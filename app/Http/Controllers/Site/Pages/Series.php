<?php

namespace App\Http\Controllers\Site\Pages;

use App\Media;
use App\SermonSeries;
use App\Sermon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Site\Header;
use App\Http\Controllers\Site\Footer;

class Series extends Controller
{
    public function index($series){
	    $headerLinks = Header::getHeaderLinks();
	    $footerLinkList = Footer::getFooterLinks();
//        $media = DB::table('pages')->where('name')
	    $settings = DB::table('settings')->first();
	    $sections = DB::table('sections')->where([
		    ['active', '=', 1],
		    ['where_used', 'like', '%sermon%'],
	    ])->get();
	    $sermonSeries = SermonSeries::where('slug',$series)->first();
	    $sermons = Sermon::where('sermon_series_id',$sermonSeries->id)->get();
	    $seriesImage = Media::where('id',$sermonSeries->media_id)->first();

	    return view('resources/series', [
//		    'page' => $p[0],
		    'sections' => $sections,
		    'settings' => $settings,
		    'image' => $seriesImage->toArray(),
		    'series' => $sermonSeries,
		    'sermons' => $sermons,
		    'headerLinks' => $headerLinks,
		    'footerLinkList' => $footerLinkList
	    ] );
    }
}
