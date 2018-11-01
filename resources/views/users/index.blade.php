@extends('layouts.default')

@section('content')
	@foreach ($users as $user)
	    <h3>This is user <small class="text-muted"> {{ $user->UserName }} </small></h3>
	@endforeach
@endsection