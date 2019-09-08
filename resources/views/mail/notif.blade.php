@extends('beautymail::templates.widgets')

@section('content')

	@include('beautymail::templates.widgets.newfeatureStart')

		<h4 class="secondary"><strong>Success</strong></h4>
		<p>Your messages was sent to our team, thanks for your feedback {{$request->name}}....!</p>

	@include('beautymail::templates.widgets.newfeatureEnd')

@stop