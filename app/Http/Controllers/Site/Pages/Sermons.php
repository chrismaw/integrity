<?php

namespace App\Http\Controllers\Site\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\Site\Header;
use App\Http\Controllers\Site\Footer;
use App\Sermon;

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

	public function sermonPage($sermon){

		$headerLinks = Header::getHeaderLinks();
		$footerLinkList = Footer::getFooterLinks();
		$sermon = Sermon::where('slug', '=', $sermon)->first();
		$settings = DB::table('settings')->first();
		var_dump($sermon);
		return view('resources/sermon', [
			'sermon' => $sermon,
			'settings' => $settings,
			'headerLinks' => $headerLinks,
			'footerLinkList' => $footerLinkList
		] );
    }
}
