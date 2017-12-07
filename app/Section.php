<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $name;
    public $active;
    public $heading;
    public $type;
    public $where_used;
    public $content;
    public $bg = array('dark','light');

    protected $table = 'sections';

}
