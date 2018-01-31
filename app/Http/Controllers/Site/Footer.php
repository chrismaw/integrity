<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Footer extends Controller
{
    public static $footerLinkList = array();
    public static function getFooterLinks() {
        $linkList = DB::table('link_lists')->where('','','')->get();
        }
}
