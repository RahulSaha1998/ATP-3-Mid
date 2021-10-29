<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\support\Facades\Validator;

class StudentController extends Controller
{
    //
	public function create(){
		return view('pages.students.create');
	}
	public function createSubmit(Request $request){
            $validator = $request->validate([
			'name'=>'required|min:5|max=10|regex:/^[A-Za-z]+$/',
			'id'=>'required',
			'dob'=>'required',
			'email'=>'required',
			'phone'=>'required|regex:/^([0-9\s\+(\)]*)$/'
			],
			
			[
			'name.required'=>'Please write your name*',
			'name.min'=>'Name must be grater than 2 charcters'
			]
			);
			return "ok";
			
		}
		public function list(){
			$students=array();
			for($i=0;$i<10;$i++){
			  $student=array(
			    "name"=>"Student ".($i+1),
				"id"=>($i+1),
				"dob"=>"12.12.21"
			  );
			  $students[]=(object)$student;
		}
		return view('pages.students.list')->with('students',$students);
		}
		
		public function edit(Request $request){
			return $request->id;
		}
} 











