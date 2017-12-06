<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/5/17
 * Time: 10:01 PM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Settings extends Controller{

	public function index(){

		$settings = DB::table('settings')->first();
		return view('admin.settings', ['settings' => $settings]);
	}
}