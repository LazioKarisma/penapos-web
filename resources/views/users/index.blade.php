@extends('layouts.default')

@section('content')
	@foreach ($users as $user)
	    <p>This is user {{ $user->UserName }}</p>
	@endforeach
@endsection