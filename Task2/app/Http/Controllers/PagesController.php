<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\PagesController;

class PagesController extends Controller
{
    //
	public function home(){
		return view('pages.home');
	}
	
	public function contact(){
		return view('pages.contact');
	}
	
	public function myprofile(){
		$name="<span style='color:green'>Rahul Saha</span>";
		$id="18-38439-2";
		$dob= "4th Dec, 1998";
		$names=array("Tanvir","sabbir","karim","rahim");
		
		return view('pages.myprofile')
		->with('name',$name)
		->with('id',$id)
		->with('dob',$dob)
		->with('names',$names);
	}
	 
}
