@extends('template')

@section('main')
	<div class="container valign">
		<img src="{{asset('public/image/pokemon.png')}}" class="img-fluid mx-auto d-block" alt="Responsive image" style="height:300px">
		<hr>
		<a href="{{url('biasaHome')}}" class="btn btn-indigo mx-auto d-block">Mulai Aplikasi <i class='fas fa-running'></i></a>
	</div>
@stop

@section('footer')

@stop