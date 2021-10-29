@extends('layouts.app')
@section('content')
      <table class="table table-border">
        <tr>
		  <th>Name</th>
		  <th>Id</th>
		  <th>Dob</th>
		  <th>Edit</th>
		</tr>            
		 @foreach($students as $student)
          <tr>	
            <td>{{$student->name}}</td>
            <td>{{$student->id}}</td>	
            <td>{{$student->dob}}</td>
			<td><a href="/student/edit/{{$student->id}}">Edit</a></td>
		  </tr>
        @endforeach		  
	  </table>
@endsection