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
		$billboard = '';
		$medias = json_decode($p[0]->included_media,true);

//		$medias = array_values($medias);
		// example: $medias = [1,2,3]
//		$medias['media'] = 'yes';
//		echo($medias['media']);
		if ($p[0]->billboard_img){
			$media = Media::where('id', $p[0]->billboard_img)->get();
			if ($media[0] instanceof Media){
				$billboard = $media[0]->getBillboard($media[0]);
			}
		}

//		if (is_array($medias['media'])) {
////			$media = Media::where('id', $p[0]->billboard_img)->get();
//			foreach ($media as $m){
//file_put_contents('/Applications/MAMP/htdocs/integrity/test.txt',json_encode($m));
//				if ($m instanceof Media){
//					$mediaLinks[$m['name']] = ($m->getMediaLink($m));
//				}
//			}
//		}
		echo '<pre><p></p>' . var_export($media[0]['function'], true) . '</pre>';

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
			'mediaLinks' => $mediaLinks,
			'billboard' => $billboard
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