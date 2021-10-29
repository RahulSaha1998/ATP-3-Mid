@extends('layouts.app')
@section('content')
     <form action="{{route('student.create')}}" class="col-md-6" method="post">
	 <!--cross site Request forgery-->
	 {{csrf_field()}}
	 
	 <div class="col-md-4 form-group">
	 <span> Name</span>
	 <input name="name" type="text" value="{{old('name')}}" class="form-control">
	 @error('name')
	     <span class="text-danger">{{$message}}</span>
     @enderror		  
	 </div>
	 <div class="col-md-4 form-group">
	 <span> Id</span>
	 <input name="s_id" type="text" value="{{old('s_id')}}" class="form-control">
	 @error('s_id')
	     <span class="text-danger">{{$message}}</span>
     @enderror
	 </div>
	 <div class="col-md-4 form-group">
	 <span> Date of Birth</span>
	 <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
	 @error('dob')
	     <span class="text-danger">{{$message}}</span>
     @enderror
	 </div>
	 <div class="col-md-4 form-group">
	 <span> Email</span> 
	 <input type="text" name="email" value="{{old('email')}}" class="form-control">
	 @error('email')
	     <span class="text-danger">{{$message}}</span>
     @enderror
	 </div>
	 <span> Phone</span> 
	 <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
	 @error('phone')
	     <span class="text-danger">{{$message}}</span>
     @enderror
	 </div>
	 <input type="submit" class="btn btn-success" value="Add">
	 </form>
@endsection