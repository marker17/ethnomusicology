@extends('main')

@section('Edit Accession')

@section('content')

	<div class="row">
		
		{!! Form::model($accession, ['route' => ['accessions.update', $accession->id], 'method' => 'PATCH']) !!}
			<div class="col-md-8">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', null, ['class' => 'form-control']) }}

				{{ Form::label('category_id', 'Category') }}
				{{ Form::text('category_id', null, ['class' => 'form-control']) }}

				

				{{ Form::label('author', 'Author') }}
				{{ Form::text('author', null, ['class' => 'form-control']) }}

				{{ Form::label('groupcountry', 'Group or Country') }}
				{{ Form::text('groupcountry', null, ['class' => 'form-control']) }}

				{{ Form::label('year', 'Year') }}
				{{ Form::text('year', null, ['class' => 'form-control']) }}

				{{ Form::label('description', 'Description') }}
				{{ Form::textarea('description', null, ['class' => 'form-control']) }}

				{{ Form::label('notes', 'Notes') }}
				{{ Form::text('notes', null, ['class' => 'form-control']) }}


				{{ Form::label('picture', 'Picture:') }}
				{{ Form::text('picture', null, ['class' => 'form-control']) }}

								
				{{ Form::label('photodate', 'Photo Date:') }}
				{{ Form::text('photodate', null, ['class' => 'form-control']) }}

								
				{{ Form::label('photographer', 'Photographer') }}
				{{ Form::text('photographer', null, ['class' => 'form-control']) }}
				
				{{ Form::label('relatedimages', 'Related Images') }}
				{{ Form::text('relatedimages', null, ['class' => 'form-control']) }}
					
				
				{{ Form::label('originalformat_type', 'Original Format Type:') }}
				{{ Form::text('originalformat_type', null, ['class' => 'form-control']) }}

				{{ Form::label('originalformat_description', 'Original Format Description:') }}
				{{ Form::text('originalformat_description', null, ['class' => 'form-control']) }}
			
								
				{{ Form::label('eformat_type', 'E-Format Type:') }}
				{{ Form::text('eformat_type', null, ['class' => 'form-control']) }}

				{{ Form::label('eformat_description', 'E-format Description') }}
				{{ Form::text('eformat_description', null, ['class' => 'form-control']) }}


				{{ Form::label('original_location', 'Original Location') }}
				{{ Form::text('original_location', null, ['class' => 'form-control']) }}


				{{ Form::label('elocation', 'E-location') }}
				{{ Form::text('elocation', null, ['class' => 'form-control']) }}


				{{ Form::label('provenance_notes', 'Provenance Notes') }}
				{{ Form::text('provenance_notes', null, ['class' => 'form-control']) }}

				{{ Form::label('instrumentcatalog_no', 'Instrument Catalog No.') }}
				{{ Form::text('instrumentcatalog_no', null, ['class' => 'form-control']) }}

				{{ Form::label('instrumentcategory_no', 'Instrument Category No') }}
				{{ Form::text('instrumentcategory_no', null, ['class' => 'form-control']) }}

			
				{{ Form::label('instrument_localname', 'Instrument Local Name:') }}
				{{ Form::text('instrument_localname', null, ['class' => 'form-control']) }} 
				
							
				{{ Form::label('instrument_englishname', 'Instrument English Name:') }}
				{{ Form::text('instrument_englishname', null, ['class' => 'form-control']) }}
				

				
				{{ Form::label('musicscore_catalogername', 'Music Score Cataloger Name:') }}
				{{ Form::text('musicscore_catalogername', null, ['class' => 'form-control']) }}
				
							
				
				{{ Form::label('musicscore_instrumentation', 'Music Score Instrumentation:') }}	
				{{ Form::text('musicscore_instrumentation', null, ['class' => 'form-control']) }}


				{{ Form::label('musicscore_performances', 'Music Score Performances:') }}	
				{{ Form::text('musicscore_performances', null, ['class' => 'form-control']) }}

	
				{{ Form::label('musicscore_category', 'Music Score Category:') }}	
				{{ Form::text('musicscore_category', null, ['class' => 'form-control']) }}

			
				{{ Form::label('length', 'Length') }}
				{{ Form::text('length', null, ['class' => 'form-control']) }}

				
				{{ Form::label('width', 'Width') }}
				{{ Form::text('width', null, ['class' => 'form-control']) }}
															
				
				{{ Form::label('height', 'Height') }}
				{{ Form::text('height', null, ['class' => 'form-control']) }}
				
				
				{{ Form::label('diameter', 'Diameter') }}
				{{ Form::text('diameter', null, ['class' => 'form-control']) }}
				
				
				{{ Form::label('no_of_pages', 'No. of Pages') }}
				{{ Form::text('no_of_pages', null, ['class' => 'form-control']) }}

				

				
					
				{{ Form::label('original_work', 'Original') }}
				{{ Form::text('original_work', null, ['class' => 'form-control']) }}
													
				
				
				

				
				{{ Form::label('repo', 'Repo:') }}
				{{ Form::text('repo', null, ['class'  =>'form-control']) }}
				
				
				{{ Form::label('full_score', 'Full Score:') }}
				{{ Form::text('full_score', null, ['class' =>'form-control']) }}
				
				


	
			</div>
			<div class="col-md-4">
				<div class="well">
					<div class="row">
						<div class="col-sm-6">
							{!! HTML::linkRoute('accessions.show', 'Cancel', array($accession->id), array('class'=>'btn btn-primary btn-block')) !!}

						</div>
						<div class="col-sm-6">
							{!! Form::submit('Save Changes', ['class' => 'btn btn-success']) !!}
								
						</div>
					</div>
				</div>
			</div>
		{!! Form::close() !!}
	</div>

@endsection
