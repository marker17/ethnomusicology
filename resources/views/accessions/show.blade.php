@extends('main')

@section('View Accession')

@section('content')

	<div class="row">

		<div class="col-md-8">
			<h1>{{ $accession->accession_no }}</h1>
			<p><a href="{{ (route('accessions.show', $accession->accession_no)) }}">{{ (route('accessions.show', $accession->accession_no)) }}</a></p>


		</div>
		<div class="col-md-4">
		@if (Auth::check())
			<div class="well">
				<div class="row">
					<div class="col-sm-6">
						{!! HTML::linkRoute('accessions.edit', 'Edit', array($accession->id), array('class'=>'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						
						{!! Form::open(['route' => ['accessions.destroy', $accession->id], 'method' => 'DELETE', 'id' => 'from1' ]) !!}

							{!! Form::submit('Delete',['id' => 'delete', 'class' => 'btn btn-danger btn-block form-control'] ) !!}

						{!! Form::close() !!}
					</div>
					
				</div>
				<div class="row">
					
					{!! HTML::linkRoute('accessions.index', ' See All Accessions', array($accession->id), array('class'=>'btn btn-success btn-block form-control btn-h1-spacing')) !!}
						
					</div>
				</div>


			</div>
		@endif
		</div>
	</div>
	
@endsection

@section('scripts')
	{!! HTML::script('js/myscripts.js') !!} 
@endsection