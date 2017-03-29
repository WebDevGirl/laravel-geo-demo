<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Broadcast extends Model
{
	public function user() {
		return $this->belongsTo('App\User');
	}

	public function space() {
		return $this->belongsTo('App\Space');
	}
}
