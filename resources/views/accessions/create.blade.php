@extends('main')

@section('Create')

@section('stylesheets')
	{!! HTML::style('css/parsley.css') !!} 
@endsection


@section('content')



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

@section('scripts')				

	{!! HTML::script('js/parsley.min.js') !!} 
@endsection


