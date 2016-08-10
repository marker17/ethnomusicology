@extends('main')

@section('View Accession')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			

			<h1> {{ $accession->title }}</h1>

		
			<p class="lead">{{ $accession->author }}</p>
		</div>
	</div>
	
@endsection
