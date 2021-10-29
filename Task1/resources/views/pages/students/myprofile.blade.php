@extends('layouts.app')
@section('content')

<h1>My Profile</h1>
<h2><?php echo $name;?></h2>
<h2>{{$id}}</h2>
<h2><?php echo $dob;?></h2>
<table>
    @foreach($names as $n)
    <tr><td>{{$n}}</td></tr> 
    @endforeach
</table>

@endsection
