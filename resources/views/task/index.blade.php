@extends('layout.master')



@section('content')

@if($errors->any())

       @foreach($errors->all() as $error)

        <li>{{$error}}</li>

       @endforeach
@endif

@if(session()->has('msg'))
	
	{{session()->get('msg')}}

	@endif
<form method="post" action="{{route('store')}}">
	@csrf
	Name:<input type="text" name="name"><br>
	Email:<input type="text" name="email"><br>
	Pincode:<input type="text" name="pin" ><br>

	<button type="submit" name="submit" value="submit">Submit</button>


@endsection

