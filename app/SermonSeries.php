<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SermonSeries extends Model
{
	protected $fillable = [
		'title',
		'tagline',
		'passage',
		'image',
		'details',
		'slug',
	];
}
