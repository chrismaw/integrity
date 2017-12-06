<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Index extends Controller{

	public function index() {
		$settings = DB::table( 'settings' )->first();
		$sections = array('about', 'contact', 'download');
		return view( 'index', [ 'settings' => $settings, 'sections' => $sections] );
	}

}