<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $name;
    public $type;
    public $content;

    protected $table = 'sections';

}
