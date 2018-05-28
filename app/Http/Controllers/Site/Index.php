<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\SermonSeries;
use App\Sermon;
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
		$billboard = array();
		$medias = json_decode($p[0]->included_media,true);

//		$medias = array_values($medias);
		// example: $medias = [1,2,3]
//		$medias['media'] = 'yes';
//		echo($medias['media']);
		if ($p[0]->billboard_img_id){
			$media = Media::where('id', $p[0]->billboard_img_id)->get();
			if ($media[0] instanceof Media){
				$billboard['img'] = $media[0]->getBillboard($media[0]);
			}
		}
			$billboard['text'] = $p[0]->billboard_text ? $p[0]->billboard_text : '';

//		if (is_array($medias['media'])) {
////			$media = Media::where('id', $p[0]->billboard_img)->get();
//			foreach ($media as $m){
//file_put_contents('/Applications/MAMP/htdocs/integrity/test.txt',json_encode($m));
//				if ($m instanceof Media){
//					$mediaLinks[$m['name']] = ($m->getMediaLink($m));
//				}
//			}
//		}

		$headerLinks = Header::getHeaderLinks();
        $footerLinkList = Footer::getFooterLinks();
//        $media = DB::table('pages')->where('name')
		$settings = DB::table('settings')->first();
		$sections = DB::table('sections')->where([
            ['active', '=', 1],
            ['where_used', 'like', '%index%'],
                ])->get();

		$currentSeries = SermonSeries::where('is_current',1)->first();
        $latestSeriesSermon = Sermon::where(
            'sermon_series_id', $currentSeries['id']
        )->orderBy('id', 'desc')->first();
        $sermons = DB::table('sermons')
	        ->join('media', 'sermons.media_id', '=', 'media.id')
	        ->select('sermons.*', 'media.type', 'media.folder', 'media.filename')
	        ->where('sermon_series_id',$currentSeries->id)
	        ->orderBy('id','desc')
	        ->get();
        $seriesImage = Media::where('id',$currentSeries->media_id)->first();
//		$page = DB::table('pages')->where('name','=','index')->first();
		return view('index', [
            'currentSeries' => $currentSeries,
            'latestSermon' => $latestSeriesSermon,
            'seriesImage' => $seriesImage->toArray(),
            'sermons' => $sermons,
		    'page' => $p[0],
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
	    $billboard = array();

	    if ($p[0]->billboard_img_id){
		    $media = Media::where('id', $p[0]->billboard_img_id)->get();
		    if ($media[0] instanceof Media){
			    $billboard['img'] = $media[0]->getBillboard($media[0]);
		    }
	    }

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
                'footerLinkList' => $footerLinkList,
                'billboard' => $billboard
            ]);
        } else {
		    return redirect()->route($p[0]->name);
	    }
	}
}