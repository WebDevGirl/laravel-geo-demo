<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Space extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'geodata',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['geodata'];

    
    /*
    |--------------------------------------------------------------------------
    | Relationship Functions
    |--------------------------------------------------------------------------
    |
    | Any function that is used in the ORM due to model relationships
    |
    */

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function markers()
    {
        return $this->hasMany('App\Marker');
    }

    public function broadcasts() {
        return $this->belongsToMany('App\User', 'broadcasts', 'space_id','user_id');
    }

    /*
    |--------------------------------------------------------------------------
    | Query Scopes
    |--------------------------------------------------------------------------
    |
    */

    public function scopeWhereIntersects($query, $lat, $long) {
        return $query->whereRaw("Intersects(POINT($lat,$long), geodata)");
    }


    /*
    |--------------------------------------------------------------------------
    | Mutators / Accessors
    |--------------------------------------------------------------------------
    |
    */

    public function getGeodataRawAttribute()
    {
        return $this->attributes['geodata'];
    }



    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    |
    */
    public function generateGeodataAndMarkers($geoData, $type="polygon")
    {
        /* Clear any previous markers */
        $this->markers()->delete();

        /* Generate Geofences coords_str and add a marker for each point in the polygon */
        if ($type == "polygon") {
            $coords = array();
            foreach($geoData as $key => $coord) {
                $coords[] = $coord['lat'] . ' ' . $coord['long'];

                $marker = $this->markers()->create([
                    'lat'           => $coord['lat'],
                    'long'          => $coord['long'],
                    'order_id'      => $key+1,
                ]);

                /* Update new marker's pointdata */
                DB::statement("UPDATE `markers` SET `pointdata` = (GeomFromText('POINT(".$coord['lat'] . ' ' . $coord['long'].")')) WHERE `id` = " . $marker->id);
            }
           
            // Generate long/lat string
            $coord_str = implode(', ', $coords);

            /* Update this geofence's geodata */
            DB::statement("UPDATE `spaces` SET `geodata` = PolygonFromText('POLYGON((". $coord_str ."))') WHERE `id` = " . $this->id);   

        } else if ($type == "circle") {
            //todo
        }

    }
}
