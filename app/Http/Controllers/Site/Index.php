<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use App\Section;
use App\Http\Controllers\Site\Header;
use App\Http\Controllers\Site\Footer;
use App\Page;
use App\Media;

class Index extends Controller{

	public function index() {
		$p = DB::table('pages')->where([
			['name', 'index']
		])->get();

		//get media files and billboard from page value
		// example: $p[0]->included_media = [[1],[2],[3]]
		$mediaLinks = array();
		$medias = json_decode($p[0]->included_media,true);

//		$medias = array_column($medias, 'media');
		// example: $medias = [1,2,3]
		file_put_contents('/Applications/MAMP/htdocs/integrity/test.txt',json_encode($medias['media']));

		if ($p[0]->billboard_img || is_array($medias)) {
			$media = Media::whereIn( 'id', json_encode($medias['media']) )->orWhere( 'id', $p[0]->billboard_img )->get('id');
//		file_put_contents('/Applications/MAMP/htdocs/integrity/test.txt',($media));

			foreach ($media as $m){
				if ($m instanceof Media){
					$mediaLinks[$m->name] = $m->getMediaLink($m);
				}
			}
		}

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
            'footerLinkList' => $footerLinkList,
			'mediaLinks' => $mediaLinks
        ] );
	}
    public function pageIndex($parent, $page) {
		$page = str_replace("-"," ",$page);
	    $p = DB::table('pages')->where([
	        ['name', $page],
            ['parent', $parent]
        ])->get();
	    if ($p[0]->basic == 1) {
            $headerLinks = Header::getHeaderLinks();
            $footerLinkList = Footer::getFooterLinks();
//        $media = DB::table('pages')->where('name')
            $settings = DB::table('settings')->first();
            $sections = DB::table('sections')->where([
                ['active', '=', 1],
                ['where_used', 'like', '%' . $p[0]->id . '%'],
            ])->get();
            return view('basic', [
                'page' => $p[0],
                'settings' => $settings,
                'sections' => $sections,
                'headerLinks' => $headerLinks,
                'footerLinkList' => $footerLinkList
            ]);
        } else {
		    return redirect()->route($p[0]->name);

	    }
	}
}