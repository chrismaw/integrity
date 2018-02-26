<?php

namespace App\Http\Controllers\Site\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Site\Header;
use App\Http\Controllers\Site\Footer;

class Sermon extends Controller
{
    public function index($series, $sermon){
	    $headerLinks = Header::getHeaderLinks();
	    $footerLinkList = Footer::getFooterLinks();
//        $media = DB::table('pages')->where('name')
	    $settings = DB::table('settings')->first();
	    $sections = DB::table('sections')->where([
		    ['active', '=', 1],
		    ['where_used', 'like', '%sermon%'],
	    ])->get();
	    $s = DB::table('sermons')->where([
		    ['name', str_replace('-',' ', $sermon)],
		    ['series', str_replace('-',' ', $series)]
	    ])->get();
//		$page = DB::table('pages')->where('name','=','index')->first();
	    return view('resources/sermons/sermon', [
		    'page' => $p[0],
		    'settings' => $settings,
		    'sections' => $sections,
		    'headerLinks' => $headerLinks,
		    'footerLinkList' => $footerLinkList
	    ] );
    }
}
