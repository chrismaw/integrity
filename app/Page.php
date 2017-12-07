<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $name;
    public $path;
    public $slug;
    public $sections;
    public $active;
    public $billboard_text;

    protected $table = 'pages';
}
