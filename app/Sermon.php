<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
	public function series()
	{
		return $this->belongsTo('App\SermonSeries');
	}
}
