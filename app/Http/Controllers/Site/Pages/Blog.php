<?php

namespace App\Http\Controllers\Site\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Site\Header;
use App\Http\Controllers\Site\Footer;

class Blog extends Controller
{
    public function index(){
	    $headerLinks = Header::getHeaderLinks();
	    $footerLinkList = Footer::getFooterLinks();
//        $media = DB::table('pages')->where('name')
	    $settings = DB::table('settings')->first();
	    $sections = DB::table('sections')->where([
		    ['active', '=', 1],
		    ['where_used', 'like', '%contact%'],
	    ])->get();
	    $p = DB::table('pages')->where([
		    ['name', 'contact us'],
		    ['parent', 'about']
	    ])->get();
//		$page = DB::table('pages')->where('name','=','index')->first();
	    return view('about/contact_us', [
		    'page' => $p[0],
		    'settings' => $settings,
		    'sections' => $sections,
		    'headerLinks' => $headerLinks,
		    'footerLinkList' => $footerLinkList
	    ] );
    }
}
