<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Broadcast extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'space_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [''];

    public function user() {
		return $this->belongsTo('App\User');
	}

	public function space() {
		return $this->belongsTo('App\Space');
	}
}
