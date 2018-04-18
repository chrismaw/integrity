<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Header extends Controller
{
    public static $headerLinks = array();
    public static $adminHeaderLinks = array();

    public static function getHeaderLinks() {

        $parents = DB::table('links')->distinct('parent')->pluck('parent');

        foreach ($parents as $key => $value){
            self::$headerLinks[$value] = DB::table('links')->select('name','path','parent')->where([
                ['dest', '=', 'page'],
                ['parent','=', $value]
            ])->orderBy('name','asc')->get();
        }

        return self::$headerLinks;
    }

	public static function adminHeaderLinks() {

		$parents = DB::table('links')->distinct('parent')->pluck('parent');

		foreach ($parents as $key => $value){
			self::$headerLinks[$value] = DB::table('links')->select('name','path','parent')->where([
				['dest', '=', 'page'],
				['parent','=', $value]
			])->orderBy('name','asc')->get();
		}

		return self::$headerLinks;
	}
}
