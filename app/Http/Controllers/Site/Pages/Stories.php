<?php

namespace App\Http\Controllers\Site\Pages;

use App\Story;
use App\StorySeries;
use App\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Site\Header;
use App\Http\Controllers\Site\Footer;

class Stories extends Controller
{
    public function index(){
	    $headerLinks = Header::getHeaderLinks();
	    $footerLinkList = Footer::getFooterLinks();
//        $media = DB::table('pages')->where('name')
	    $settings = DB::table('settings')->first();
	    $p = DB::table('pages')->where([
		    ['name', 'stories'],
		    ['parent', 'resources']
	    ])->get();
	    $storySeries = DB::table('story_series')
	                       ->join('media', 'story_series.media_id', '=', 'media.id')
	                       ->select('story_series.*', 'media.type', 'media.folder', 'media.filename')
	                       ->orderBy('id', 'desc')
	                       ->get();
	    $featured = DB::table('stories')
	                       ->join('media', 'stories.image_media', '=', 'media.id')
	                       ->join('story_series', 'stories.series', '=', 'story_series.id')
	                       ->select('stories.*', 'story_series.title as series','media.type', 'media.folder', 'media.filename')
	                       ->where('featured','=', 1)
	                       ->orderBy('id', 'desc')
	                       ->get();
		file_put_contents('/Applications/MAMP/htdocs/integrity/text.txt',json_encode($featured));
	    return view('resources/stories', [
		    'settings' => $settings,
		    'page' => $p[0],
		    'featured' => $featured[0],
		    'allSeries' => $storySeries,
		    'headerLinks' => $headerLinks,
		    'footerLinkList' => $footerLinkList
	    ] );
    }
}
