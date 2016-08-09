@extends('main')

@section('Create')

@section('content')



	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">Create New Accession</div>
					<div class="panel-body">

				
						{!! Form::open(array('route' => 'accessions.store', 'class' => 'form-horizontal')) !!}

							<div class="form-group">
								{{ Form::label('title', 'Title:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('title', null, array('class'=>'form-control')) }}
								</div>
							</div>
		
							<div class="form-group">		
								{{ Form::label('caegory_id', 'Category:',array('class'=>'col-sm-2 control-label') ) }}
								<div class="col-sm-10">
									{{ Form::text('category_id', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('author', 'Author:',array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('author', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('groupcountry', 'Group or Country:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('groupcountry', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('year', 'Year:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('Yearr', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('description', 'Description:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::textarea('description', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('notes', 'Notes:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('notes', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('picture', 'Picture:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('picture', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">	
								{{ Form::label('photodate', 'Photo Date:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('photodate', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('photographer', 'Photographer', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('photographer', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('relatedimages', 'Related Images:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('relatedimages', null, array('class'=>'form-control')) }}
								</div>
							</div>
							
							<div class="form-group">
								{{ Form::label('originalformat_type', 'Original Format Type:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('originalformat_type', null, array('class'=>'form-control')) }}
								</div>
							</div>

			
							<div class="form-group">
								{{ Form::label('originalformat_description', 'Original Format Description:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('originalformat_description', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('e-format_type', 'E-Format Type:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('e-format_type', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('e-format_description', 'E-format Description:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('e-format_description', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('original_location', 'Original Location:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('original_location', null, array('class'=>'form-control')) }}
								</div>
							</div>

							
							<div class="form-group">
								{{ Form::label('elocation', 'E-location:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('elocation', null, array('class'=>'form-control')) }}
								</div>
							</div>


							<div class="form-group">
								{{ Form::label('provenance_notes', 'Provenance Notes:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ 	Form::text('provenance_notes', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('instrumentcatalog_no', 'Instrument Catalog No.:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('instrumentcatalog_no', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('instrumentcategory_no', 'Instrument Category No:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('instrumentcategory_no', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('instrument_localname', 'Instrument Local Name:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('instrument_localname', null, array('class'=>'form-control')) }}
								</div>
							</div>

							
							<div class="form-group">
								{{ Form::label('instrument_englishname', 'Instrument English Name:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('instrument_englishname', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('musicscore_catalogername', 'Music Score Cataloger Name:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('musicscore_catalogername', null, array('class'=>'form-control')) }}
								</div>
							</div>
						
							<div class="form-group">
								{{ Form::label('musicscore_instrumentation', 'Music Score Instrumentation:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('musicscore_instrumentation', null, array('class'=>'form-control')) }}
								</div>
							</div>
							
							<div class="form-group">
								{{ Form::label('musicscore_performances', 'Music Score Performances:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('musicscore_performances', null, array('class'=>'form-control')) }}
								</div>
							</div>


							<div class="form-group">
								{{ Form::label('musicscore_category', 'Music Score Category:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('musicscore_category', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('length', 'Length:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('length', null, array('class'=>'form-control')) }}
								</div>
							</div>
							
							<div class="form-group">
								{{ Form::label('width', 'Width:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('width', null, array('class'=>'form-control')) }}
								</div>
							</div>
							
							<div class="form-group">
								{{ Form::label('height', 'Height:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('height', null, array('class'=>'form-control')) }}
								</div>
							</div>


							<div class="form-group">
								{{ Form::label('diameter', 'Diameter:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('diameter', null, array('class'=>'form-control')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('no_of_pages', 'No. of Pages:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('no_of_pages', null, array('class'=>'form-control')) }}
								</div>
							</div>

								
							<div class="form-group">
								{{ Form::label('original', 'Original', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('original', null, array('class'=>'form-control')) }}
								</div>
							</div>


							<div class="form-group">
								{{ Form::label('repo', 'Repo:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('repo', null, array('class'=>'form-control')) }}
								</div>
							</div>


							<div class="form-group">
								{{ Form::label('full_score', 'Full Score:', array('class'=>'col-sm-2 control-label')) }}
								<div class="col-sm-10">
									{{ Form::text('full_score', null, array('class'=>'form-control')) }}
								</div>
							</div>

							{{ Form::submit('Create New Accession',['class' => 'btn btn-success btn-block form-control'])}}											
							

						{!! Form::close() !!}
					</div>

			</div>
		</div>
	</div>
@endsection
