<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use App\Section;
use App\Http\Controllers\Site\Header;
use App\Http\Controllers\Site\Footer;
use App\Page;

class Index extends Controller{

	public function index() {
        $headerLinks = Header::getHeaderLinks();
        $footerLinkList = Footer::getFooterLinks();
//        $media = DB::table('pages')->where('name')
		$settings = DB::table('settings')->first();
		$sections = DB::table('sections')->where([
            ['active', '=', 1],
            ['where_used', 'like', '%index%'],
                ])->get();
//		$page = DB::table('pages')->where('name','=','index')->first();
		return view('index', [
		    'settings' => $settings,
            'sections' => $sections,
            'headerLinks' => $headerLinks,
            'footerLinkList' => $footerLinkList
        ] );
	}
    public function pageIndex($parent, $page) {
	    $p = DB::table('pages')->where([
	        ['name', $page],
            ['parent', $parent]
        ])->get();
	    file_put_contents('c:/wamp64/www/integrity/test.txt',json_encode($p));
	    if ($p[0]->basic == 1) {
            $headerLinks = Header::getHeaderLinks();
            $footerLinkList = Footer::getFooterLinks();
//        $media = DB::table('pages')->where('name')
            $settings = DB::table('settings')->first();
            $sections = DB::table('sections')->where([
                ['active', '=', 1],
                ['where_used', 'like', '%' . $p[0]->id . '%'],
            ])->get();
//		$page = DB::table('pages')->where('name','=','index')->first();
            return view('basic', [
                'page' => $p[0],
                'settings' => $settings,
                'sections' => $sections,
                'headerLinks' => $headerLinks,
                'footerLinkList' => $footerLinkList
            ]);
        } else {
	        return redirect('/'.$p->parent.'/'.$p->name);
        }
	}
}