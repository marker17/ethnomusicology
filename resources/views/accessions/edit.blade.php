@extends('main')

@section('Edit Accession')

@section('content')

	<div class="row">
		
		{!! Form::model($accession, ['route' => ['accessions.update', $accession->id], 'method' => 'PATCH']) !!}
			<div class="col-md-8">

				{{ Form::label('accession_no', 'Accession No.') }}
				{{ Form::text('accession_no', null, ['class' => 'form-control']) }}

				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', null, ['class' => 'form-control']) }}

				{{ Form::label('category_id', 'Category') }}
				{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

				

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


	<div class="row">

		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create</div>
                <div class="panel-body">
						
			
					{!! Form::open(array('route' => 'accessions.store', 'data-parsley-validate' => '', 'class' => 'form-horizontal')) !!}

					<div class="form-group">
						{{ Form::label('accession_no', 'Accession No.', array('class' => "col-md-4 control-label")) }}

						<div class="col-md-6">
							{{ Form::text('accession_no', null, array('class' =>'form-control', 'required'=>'','maxlength' =>'255', 'minlength' => '5')) }}
						</div>
					</div>



					<div class="form-group">
						{{ Form::label('title', 'Title', array('class' => "col-md-4 control-label")) }}

						<div class="col-md-6">
							{{ Form::text('title', null, array('class' =>'form-control', 'maxlength' =>'255')) }}
						</div>
					</div>	


					<div class="form-group">
						{{ Form::label('category_id', 'Category', array('class' => "col-md-4 control-label")) }}

						<div class="col-md-6">
							<select class="form-control" name="category_id">
								@foreach( $categories as $category)
									<option value='{{ $category->id }}'>{{ $category->category_name }}</option>
								@endforeach
							</select>
						</div>
					</div>	


					<div class="form-group">		
						{{ Form::label('author', 'Author', array('class' => "col-md-4 control-label")) }}

						<div class="col-md-6">
							{{ Form::text('author', null, array('class'=>'form-control')) }}
						</div>
					</div>


					<div class="form-group">	
						{{ Form::label('groupcountry', 'Group or Country', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('groupcountry', null, array('class'=>'form-control')) }}
						</div>
					</div>
					

					<div class="form-group">	
						{{ Form::label('year', 'Year',array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('year', null, array('class'=>'form-control')) }}
						</div>
					</div>
					
					<div class="form-group">	
						{{ Form::label('description', 'Description', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::textarea('description', null, array('class'=>'form-control')) }}
						</div>
					</div>
						
					<div class="form-group">	
						{{ Form::label('notes', 'Notes', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('notes', null, array('class'=>'form-control')) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('picture', 'Picture', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('picture', null, array('class'=>'form-control')) }}
						</div>
					</div>
					

					<div class="form-group">
						{{ Form::label('photodate', 'Photo Date', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('photodate', null, array('class'=>'form-control')) }}
						</div>
					</div>
						
					<div class="form-group">
						{{ Form::label('photographer', 'Photographer', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('photographer', null, array('class'=>'form-control')) }}
						</div>
					</div>
						
					<div class="form-group">
						{{ Form::label('relatedimages', 'Related Images', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('relatedimages', null, array('class'=>'form-control')) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('originalformat_type', 'Original Format Type', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('originalformat_type', null, array('class'=>'form-control')) }}
						</div>
					</div>


					<div class="form-group">
						{{ Form::label('originalformat_description', 'Original Format Description', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('originalformat_description', null, array('class'=>'form-control')) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('eformat_type', 'E-Format Type', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('eformat_type', null, array('class'=>'form-control')) }}
						</div>
					</div>

					<div class="form-group">			
						{{ Form::label('eformat_description', 'E-format Description', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('eformat_description', null, array('class'=>'form-control')) }}
						</div>
					</div>


					<div class="form-group">			
						{{ Form::label('original_location', 'Original Location:', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('original_location', null, array('class'=>'form-control')) }}
						</div>
					</div>


					<div class="form-group">
						{{ Form::label('elocation', 'E-location', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('elocation', null, array('class'=>'form-control')) }}
						</div>
					</div>
			
					<div class="form-group">
						{{ Form::label('provenance_notes', 'Provenance Notes', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('provenance_notes', null, array('class'=>'form-control')) }}
						</div>
					</div>

					<div class="form-group">			
						{{ Form::label('instrumentcatalog_no', 'Instrument Catalog No', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('instrumentcatalog_no', null, array('class'=>'form-control')) }}
						</div>
					</div>
					
					<div class="form-group">
						{{ Form::label('instrumentcategory_no', 'Instrument Category No', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('instrumentcategory_no', null, array('class'=>'form-control')) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('instrument_localname', 'Instrument Local Name', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('instrument_localname', null, array('class'=>'form-control')) }}
						</div>
					</div>
						
					<div class="form-group">
						{{ Form::label('instrument_englishname', 'Instrument English Name', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('instrument_englishname', null, array('class'=>'form-control')) }}
						</div>
					</div>
						
					<div class="form-group">
						{{ Form::label('musicscore_catalogername', 'Music Score Cataloger Name', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('musicscore_catalogername', null, array('class'=>'form-control')) }}
						</div>
					</div>
						
					<div class="form-group">
						{{ Form::label('musicscore_instrumentation', 'Music Score Instrumentation:', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('musicscore_instrumentation', null, array('class'=>'form-control'	)) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('musicscore_performances', 'Music Score Performances:', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('musicscore_performances', null, array('class'=>'form-control')) }}
						</div>
					</div>




					<div class="form-group">
						{{ Form::label('musicscore_category', 'Music Score Category:', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('musicscore_category', null, array('class'=>'form-control')) }}
						</div>
					</div>

					<div class="form-group">		
						{{ Form::label('length', 'Length', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('length', null, array('class'=>'form-control')) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('width', 'Width', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('width', null, array('class'=>'form-control')) }}
						</div>
					</div>
						
						
					<div class="form-group">
						{{ Form::label('height', 'Height', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('height', null, array('class'=>'form-control')) }}
						</div>
					</div>
					
					<div class="form-group">
						{{ Form::label('diameter', 'Diameter', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('diameter', null, array('class'=>'form-control')) }}
						</div>
					</div>
					
					

						
					<div class="form-group">
						{{ Form::label('no_of_pages', 'No. of Pages', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('no_of_pages', null, array('class'=>'form-control')) }}
						</div>
					</div>

						

						
					<div class="form-group">
						{{ Form::label('original_work', 'Original', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('original_work', null, array('class'=>'form-control')) }}
						</div>
					</div>
									
												
						
					
					<div class="form-group">				
						{{ Form::label('repo', 'Repo', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('repo', null, array('class'=>'form-control')) }}
						</div>
					</div>
									
											
					
					
					<div class="form-group">		
						{{ Form::label('full_score', 'Full Score', array('class' => "col-md-4 control-label")) }}
						<div class="col-md-6">
							{{ Form::text('full_score', null, array('class'=>'form-control')) }}
						</div>
					</div>

						

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">

							{{--

							{{ Form::submit('Create New Accession', array('class' => 'btn btn-success btn-lg btn-block' , 'style' =>'margin-top:20px;')) }}
							--}}
							<button type="submit" class="btn btn-primary">
								 <i class="fa fa-btn fa-plus"></i> Create New Accession
		                    </button>
						</div>
					</div>
					
					{!! Form::close() !!}
				</div>
			</div>
		</div>			
	</div>

@endsection
