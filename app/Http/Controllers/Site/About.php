<?php
/**
 * Created by PhpStorm.
 * User: cmaw
 * Date: 12/12/2017
 * Time: 3:13 PM
 */

namespace App\Http\Controllers\Site;


class About
{
    public function missionIndex(){
        return view('about.mission', ['heading'=>'Mission']);
    }
    public function historyIndex(){
        return view('about.history', ['heading'=>'History']);
    }
    public function leadershipIndex(){
        return view('about.leadership', ['heading'=>'Leadership']);
    }
    public function sundayMorningsIndex(){
        return view('about.sunday_mornings', ['heading'=>'Sunday Mornings']);
    }
    public function integrityKidsIndex(){
        return view('about.integrity_kids', ['heading'=>'Integrity Kids']);
    }
    public function contactUsIndex(){
        return view('about.contact_us', ['heading'=>'Contact Us']);
    }
}