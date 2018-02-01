<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Footer extends Controller
{
    public static $footerLinkList = array();
    public static function getFooterLinks() {

        $links = DB::table('link_lists')->where('name','=','Footer')->pluck('links');
        $links = json_decode($links[0], true);

        foreach ($links as $key => $linkID){
             self::$footerLinkList[$linkID] = DB::table('links')->select('name','path','parent')->where('id', $linkID)->first();
        }
        return self::$footerLinkList;
    }
}
