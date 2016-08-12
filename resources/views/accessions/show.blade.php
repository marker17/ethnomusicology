@extends('main')

@section('View Accession')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $accession->title }}</h1>

			<p class="lead">{{ $accession->author }}</p>
			
		</div>
		<div class="col-md-4">
			<div class="well">
				<div class="row">
					<div class = "col-md-6">
						{!! HTML::linkRoute('accessions.edit', 'Edit', array($accession->id), array('class'=>'btn btn-primary btn-block')) !!}

					</div>
					<div class = "col-md-6">
						{!! HTML::linkRoute('accessions.destroy', 'Delete', array($accession->id), array('class'=>'btn btn-primary btn-block')) !!}
					</div>
				</div>


			</div>

		</div>
	</div>
	
@endsection
