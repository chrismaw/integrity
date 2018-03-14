<?php

namespace App\Http\Controllers\Site\Pages;

use App\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\Site\Header;
use App\Http\Controllers\Site\Footer;
use App\Sermon;
use App\SermonSeries;


class Sermons extends Controller
{
    public function index(){
	    $headerLinks = Header::getHeaderLinks();
	    $footerLinkList = Footer::getFooterLinks();
//        $media = DB::table('pages')->where('name')
	    $settings = DB::table('settings')->first();
	    $sections = DB::table('sections')->where([
		    ['active', '=', 1],
		    ['where_used', 'like', '%sermons%'],
	    ])->get();
	    $p = DB::table('pages')->where([
		    ['name', 'sermons'],
		    ['parent', 'resources']
	    ])->get();
//		$page = DB::table('pages')->where('name','=','index')->first();
	    return view('resources/sermons', [
		    'page' => $p[0],
		    'settings' => $settings,
		    'sections' => $sections,
		    'headerLinks' => $headerLinks,
		    'footerLinkList' => $footerLinkList
	    ] );
    }

	public function sermonPage($series, $sermon){

		$headerLinks = Header::getHeaderLinks();
		$footerLinkList = Footer::getFooterLinks();
		$sr = SermonSeries::where('slug', $series)->first();
		$sm = Sermon::where([
			['slug', '=', $sermon],
			['series', '=', $sr->id]
		])->first();
		$audio = DB::table('media')->where('id', $sm->media)->first();
		$settings = DB::table('settings')->first();
		return view('resources/sermon', [
			'audio' => $audio,
			'sermon' => $sm,
			'series' => $sr,
			'settings' => $settings,
			'headerLinks' => $headerLinks,
			'footerLinkList' => $footerLinkList
		] );
    }
}
