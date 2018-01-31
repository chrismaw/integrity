<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Header extends Controller
{
    public static $headerLinks = array();

    public static function getHeaderLinks() {

        $parents = DB::table('links')->distinct('parent')->pluck('parent');

        foreach ($parents as $key => $value){
            self::$headerLinks[$value] = DB::table('links')->select('name','path','parent')->where([
                ['dest', '=', 'page'],
                ['parent','=', $value]
            ])->get();
        }

        file_put_contents('c:/wamp64/www/integrity/test.txt',json_encode(self::$headerLinks));


        return self::$headerLinks;
    }
}
