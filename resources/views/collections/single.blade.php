@extends('main')

@section('View Accession')

@section('content')

	<div class="row">

		<div class="col-md-8">
			<h1>{{ $accession->accession_no }}</h1>
		</div>
		<div class="col-md-4">
			<div class="well">
				
				<div class="row">
					
					{!! HTML::linkRoute('accessions.index', ' See All Accessions', array($accession->id), array('class'=>'btn btn-success btn-block form-control btn-h1-spacing')) !!}
						
					</div>
				</div>


			</div>

		</div>
	</div>
	
@endsection