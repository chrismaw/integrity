<?php

namespace App\Http\Controllers\Site\Pages;

use App\Article;
use App\ArticleSeries;
use App\Media;
use App\SermonSeries;
use App\Sermon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Site\Header;
use App\Http\Controllers\Site\Footer;

class Articles extends Controller
{
    public function articlesIndex(){
	    $headerLinks = Header::getHeaderLinks();
	    $footerLinkList = Footer::getFooterLinks();
//        $media = DB::table('pages')->where('name')
	    $settings = DB::table('settings')->first();
	    $articleSeries = DB::table('article_series')
	                       ->join('media', 'article_series.media_id', '=', 'media.id')
	                       ->select('article_series.*', 'media.type', 'media.folder', 'media.filename')
	                       ->orderBy('id', 'desc')
	                       ->get();
	    $featured = DB::table('articles')
	                       ->join('media', 'articles.image_media', '=', 'media.id')
	                       ->select('articles.*', 'media.type', 'media.folder', 'media.filename')
		                    ->where('featured','=', 1)
	                       ->orderBy('id', 'desc')
	                       ->get();

	    return view('resources/series', [
		    'settings' => $settings,
		    'features' => $featured,
		    'series' => $articleSeries,
		    'headerLinks' => $headerLinks,
		    'footerLinkList' => $footerLinkList
	    ] );
    }
}
