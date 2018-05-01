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
    public $function;
    public $link;
    public $file_size;
    public $thumb_link;
    public $thumb_size;

	protected $table = 'media';

    const TYPES = ['img','aud', 'vid'];

	public function getBillboard(Media $media){
		$folder = $media['folder'];
		$filename = $media['filename'];
		if ($media['function'] == 'billboard'){
			$billboard = 'img/' . ($folder ? $folder.'/' : '') . $filename;
		} else {
			$billboard = 'error finding billboard image';
		}
		return $billboard;
	}
	public function getMediaLink(Media $media){
        $folder = $media['folder'];
        $filename = $media['filename'];

		switch ($media['type']){
            case 'img':
                $mLink = '<img src="img/'. ($folder ? $folder.'/' : '') . $filename . '">';
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
