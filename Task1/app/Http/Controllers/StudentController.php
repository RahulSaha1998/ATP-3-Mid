<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\support\Facades\Validator;
use App\Models\Student;


class StudentController extends Controller
{
    //
	public function create(){
		return view('pages.students.create');
	}
	public function createSubmit(Request $request){
            $validator = $request->validate([
			'name'=>'required|min:5|regex:/^[A-Za-z]+$/',
			's_id'=>'required',
			'dob'=>'required',
			'email'=>'required',
			'phone'=>'required|regex:/^([0-9\s\+(\)]*)$/'
			],
			
			[
			'name.required'=>'Please write your name*',
			'name.min'=>'Name must be grater than 2 charcters'
			]
			);
			
			$var=new Student();
			$var->name=$request->name;
			$var->s_id=$request->s_id;
			$var->email=$request->email;
			$var->dob=$request->dob;
			$var->phone=$request->phone;
			$var->save();
		
			return "ok";
			
		}
		public function list(){
			/*$students=array();
			for($i=0;$i<10;$i++){
			  $student=array(
			    "name"=>"Student ".($i+1),
				"id"=>($i+1),
				"dob"=>"12.12.21"
			  );
			  $students[]=(object)$student;
		}*/
		$students= Student::all();
		return view('pages.students.list')->with('students',$students);
		}
		
		public function edit(Request $request){
			$id= $request->id;
			$student= Student::where('id',$id)->first();
			//$student= Student::where('id','>',$id)->first();
			return $student;
		}
} 











