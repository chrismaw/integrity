<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $id;
    public $name;
    public $link;
//    public $sections;
    public $active;
    public $parent;
    public $desc;
    public $billboard_text;
    public $billboard_img;
    public $included_media;
    public $content;
    public $basic;

    protected $table = 'pages';

    public function getBasicPage($parent, $page){

        $p = DB::table('pages')->where([
            ['name', $page],
            ['parent', $parent]
        ])->get();
        return $p;
    }
}
