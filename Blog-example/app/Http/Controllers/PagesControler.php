<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesControler extends Controller
{
	public function home(){
		$tasks = DB::select('select * from tasks');
		//$tasks = DB::table('tasks')->get();
	    return view('welcome', compact('tasks'));
	}
    //
    public function contact(){
    	return view('/contact');
    }

    public function about(){
    	return view('/about');
    }
}
