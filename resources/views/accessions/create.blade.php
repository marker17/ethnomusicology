@extends('main')

@section('Create')

@section('stylesheets')
	{!! HTML::style('css/parsley.css') !!} 
@endsection


@section('content')



	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-xs-12">
			<h1>Create a new accession</h1>
				
						
			{!! Form::open(['route' => 'accessions.store', 'data-parsely-validate' => '']) !!}

				
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, array('class'=>'form-control')) }}
				
			
		
					
				{{ Form::label('caegory_id', 'Category:') }}
				{{ Form::text('category_id', null, array('class'=>'form-control')) }}
			
							

				
				{{ Form::label('author', 'Author:') }}
				{{ Form::text('author', null, array('class'=>'form-control')) }}
				

			
				{{ Form::label('groupcountry', 'Group or Country:') }}
				{{ Form::text('groupcountry', null, array('class'=>'form-control')) }}
			

				{{ Form::label('year', 'Year:') }}
				{{ Form::text('year', null, array('class'=>'form-control')) }}
			
							

				{{ Form::label('description', 'Description:') }}
				{{ Form::textarea('description', null, array('class'=>'form-control')) }}
		
							

			
				{{ Form::label('notes', 'Notes:') }}
				{{ Form::text('notes', null, array('class'=>'form-control')) }}
				

				
				{{ Form::label('picture', 'Picture:') }}
				{{ Form::text('picture', null, array('class'=>'form-control')) }}
				
							

				
				{{ Form::label('photodate', 'Photo Date:') }}
				{{ Form::text('photodate', null, array('class'=>'form-control')) }}
				
							

				
				{{ Form::label('photographer', 'Photographer') }}
				{{ Form::text('photographer', null, array('class'=>'form-control')) }}
				
							

				
				{{ Form::label('relatedimages', 'Related Images:') }}
				{{ Form::text('relatedimages', null, array('class'=>'form-control')) }}
				
							
							
				
				{{ Form::label('originalformat_type', 'Original Format Type:') }}
				{{ Form::text('originalformat_type', null, array('class'=>'form-control')) }}
				
							

			
				
				{{ Form::label('originalformat_description', 'Original Format Description:') }}
				{{ Form::text('originalformat_description', null, array('class'=>'form-control')) }}
				
							

				
				{{ Form::label('eformat_type', 'E-Format Type:') }}
				{{ Form::text('eformat_type', null, array('class'=>'form-control')) }}
				
							

				
				{{ Form::label('eformat_description', 'E-format Description:') }}
				{{ Form::text('eformat_description', null, array('class'=>'form-control')) }}
				
							

				
				{{ Form::label('original_location', 'Original Location:') }}
				{{ Form::text('original_location', null, array('class'=>'form-control')) }}
						
							
				
				{{ Form::label('elocation', 'E-location:') }}
				{{ Form::text('elocation', null, array('class'=>'form-control')) }}
			
		

				
				{{ Form::label('provenance_notes', 'Provenance Notes:') }}
				{{ 	Form::text('provenance_notes', null, array('class'=>'form-control')) }}
				
						

				
				{{ Form::label('instrumentcatalog_no', 'Instrument Catalog No.:') }}
				{{ Form::text('instrumentcatalog_no', null, array('class'=>'form-control')) }}
			
				
				{{ Form::label('instrumentcategory_no', 'Instrument Category No:') }}
				{{ Form::text('instrumentcategory_no', null, array('class'=>'form-control')) }}
				

	
				{{ Form::label('instrument_localname', 'Instrument Local Name:') }}
				{{ Form::text('instrument_localname', null, array('class'=>'form-control')) }} 
				
							

							
				
				{{ Form::label('instrument_englishname', 'Instrument English Name:') }}
				{{ Form::text('instrument_englishname', null, array('class'=>'form-control')) }}
				

				
				{{ Form::label('musicscore_catalogername', 'Music Score Cataloger Name:') }}
				{{ Form::text('musicscore_catalogername', null, array('class'=>'form-control')) }}
				
					
						
				
				{{ Form::label('musicscore_instrumentation', 'Music Score Instrumentation:') }}
					
				{{ Form::text('musicscore_instrumentation', null, array('class'=>'form-control')) }}
				
							
							
				
				{{ Form::label('length', 'Length:') }}
				{{ Form::text('length', null, array('class'=>'form-control')) }}
				
	
							
				
				{{ Form::label('width', 'Width:') !!}
				{{ Form::text('width', null, array('class'=>'form-control')) }}
				

							
				
				{{ Form::label('height', 'Height:') }}
				{{ Form::text('height', null, array('class'=>'form-control')) }}
			
							


				
				{{ Form::label('diameter', 'Diameter:') }}
				{{ Form::text('diameter', null, array('class'=>'form-control')) }}
				
							

				
				{{ Form::label('no_of_pages', 'No. of Pages:') }}
				{{ Form::text('no_of_pages', null, array('class'=>'form-control')) }}
				

								
				
				{{ Form::label('original', 'Original') }}
				{{ Form::text('original', null, array('class'=>'form-control')) }}
				
							


				
				{{ Form::label('repo', 'Repo:') }}
				{{ Form::text('repo', null, array('class'=>'form-control')) }}
				
						


			
				{{ Form::label('full_score', 'Full Score:') }}
				{{ Form::text('full_score', null, array('class'=>'form-control')) }}
				
											
						
				{{ Form::submit('Create New Accession',['class' => 'btn btn-success btn-block form-control']) }}
					
																	
			{!! Form::close() !!}
		</div>			
	</div>
@endsection

@section('scripts')
	{!! HTML::script('js/parsley.min.js') !!} 
@endsection


