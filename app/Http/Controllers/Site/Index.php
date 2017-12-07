<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Section;

class Index extends Controller{

	public function index() {
		$settings = DB::table('settings')->first();
		$sections = DB::table('sections')->where([
            ['active', '=', 1],
            ['where_used', 'like', '%index%'],
                ])->get();
		$page = DB::table('pages')->where('name','=','index')->first();

		return view( 'index', [ 'settings' => $settings, 'sections' => $sections, 'page' => $page] );
	}

}