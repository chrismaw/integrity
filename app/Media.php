<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Media extends Model
{
    public $id;
    public $name;
    public $type = array();
    public $filename;
    public $folder;
    public $link;
    public $file_size;
    public $thumb_link;
    public $thumb_size;

    public function getMediaLink(Media $media){
//        $m = DB::table('media')->where('id', $media->id)->first();
        $mLink = '';
        switch ($media->type){
            case 'img':
            $mLink = "<img src=\"img/'.$media->folder ? $media->folder.'/' : ''$media->filename.'\">";
            break;
            case 'vid':
                $mLink = "<video autoplay><source src=\"vid/'.$media->folder ? $media->folder.'/' : ''$media->filename.'\" type=\"video/mp4\"></video>";
            break;
            case 'aud':
                $mLink = "<img src=\"aud/'.$media->folder ? $media->folder.'/' : ''$media->filename.'\">";
            break;
            default:
                $mLink = "There was an error when retrieving the media file";
        }
        return $mLink;
    }
}
