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

class Sections extends Controller{

	public function index(){
		$sections = DB::table('sections')->get();
		return view('admin.sections.sections', ['sections' => $sections]);
	}
}