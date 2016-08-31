@extends('main')

@section('View Accession')

@section('content')

	<div class="row">

		<div class="col-md-4">

			<div class="row">
				<div class="col-md-12">
					<div class="imageframe">
						{{{ $accession['picture'] }}}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-striped" id="table2">
							<tr>
								<th class="head">Original Format:</th>
								<td>{{{ $accession['originalformat_type'] }}}</td>
							</tr>
							<tr>
								<th>E-Format:</th>
								<td>{{{ $accession['eformat_type'] }}}</td>
							</tr>
							<tr>
								<th>Original Location:</th>
								<td>{{{ $accession['original_location'] }}}</td>
							</tr>
							<tr>
								<th>E-Location</th>
								<td>{{{ $accession['elocation'] }}}</td>
							</tr>
						</table>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-striped" id="table3">
							<tr>
								<th class="head">Length (cm)</th>
								<td>{{{ $accession['length'] }}}</td>
							</tr>
							<tr>
								<th>Width (cm)</th>
								<td>{{{ $accession['width'] }}}</td>
							</tr>
							<tr>
								<th>Height (cm)</th>
								<td>{{{ $accession['height'] }}}</td>
							</tr>
							<tr>
								<th>Diameter</th>
								<td>{{{ $accession['diameter'] }}}</td>
							</tr>
							<tr>
								<th>No. of Pages</th>
								<td>{{{ $accession['no_of_pages'] }}}</td>
							</tr>
							<tr>
								<th>Original</th>
								<td>{{{ $accession['original_work'] }}}</td>
							</tr>
							<tr>
								<th>Repo</th>
								<td>{{{ $accession['repo'] }}}</td>
							</tr>
							<tr>
								<th>Full Score</th>
								<td>{{{ $accession['full_score'] }}}</td>
							</tr>	
						</table>
					</div>
				</div>
			</div>

			<div class="row">
				<div class='col-md-12'>
					<h3>Related Images</h3>
					<div class="row">
						
						<div class="col-sm-3">
							<div class="smallimage"></div>

						</div>

						<div class="col-sm-3">
							<div class="smallimage"></div>

						</div>

						<div class="col-sm-3">
							<div class="smallimage"></div>

						</div>

						<div class="col-sm-3">
							<div class="smallimage"></div>

						</div>

					</div>
				</div>

			</div>
		</div>
		<div class="col-md-8">

			<div class="row">
				<div class="col-md-6">
					<h1>{{ $accession->accession_no }}</h1>
				</div>		
				<div class="col-md-6">
					@if (Auth::check())
						<div class="well" id="wellbutton">
							<div class="row">
								<div class="col-sm-4">
									{!! HTML::linkRoute('accessions.edit', 'Edit', array($accession->id), array('class'=>'btn btn-primary btn-block')) !!}
								</div>
								<div class="col-sm-4">
									
									{!! Form::open(['route' => ['accessions.destroy', $accession->id], 'method' => 'DELETE', 'id' => 'from1' ]) !!}

										{!! Form::submit('Delete',['id' => 'delete', 'class' => 'btn btn-danger btn-block form-control'] ) !!}

									{!! Form::close() !!}
								</div>
								<div class="col-sm-4">
								
									{!! HTML::linkRoute('accessions.index', 'Back', array($accession->id), array('class'=>'btn btn-success btn-block')) !!}
									
								</div>
							</div>
						</div>
					@endif
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-striped" id="table1">
							<tr style="border-bottom: 1px dotted silver;">
								<th class="head">Old Catalog No.</th>
								<td>{{{ $accession['title'] }}}</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th>Collection Type</th>
								<td>{{{ $accession->category->category_name }}}</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th>Researchers/Author</th>
								<td>{{{ $accession['author'] }}}</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th>Group/Country</th>
								<td>{{{ $accession['groupcountry'] }}}</td>
								<td>&nbsp;</td>
							</tr>

							<tr>
								<th>Year</th>
								<td>{{{ $accession['year'] }}}</td>
								<td>&nbsp;</td>
							</tr>

							<tr>
								<th>Description</th>
								<td>{{{ $accession['description'] }}}</td>
								<td>&nbsp;</td>
							</tr>

							<tr>
								<th>Notes</th>
								<td>{{{ $accession['notes'] }}}</td>
								<td>&nbsp;</td>
							</tr>

							<tr>
								<th>INSTRUMENT DETAILS</th>
								<td>Catalog No.</td>
								<td>{{{ $accession['instrumentcatalog_no'] }}}</td>
								

							</tr>
							<tr>
								<th>&nbsp;</th>
								<td>Category</td>
								<td>{{{ $accession['instrumentcategory_no'] }}}</td>
								

							</tr>
							
							<tr>
								<th>&nbsp;</th>
								<td>Name (Local)</td>
								<td>{{{ $accession['instrument_localname'] }}}</td>
								

							</tr>

							<tr>
								<th>&nbsp;</th>
								<td>Name (English)</td>
								<td>{{{ $accession['instrument_englishname'] }}}</td>
								

							</tr>

							<tr>
								<th>MAINTENANCE</th>
								<td>Photo Date</td>
								<td>{{{ $accession['photodate'] }}}</td>
								

							</tr>
							<tr>
								<th>&nbsp;</th>
								<td>Photographer</td>
								<td>{{{ $accession['photographer'] }}}</td>
								

							</tr>

							<tr>
								<th>CATALOG</th>
								<td>Cataloger</td>
								<td>{{{ $accession['musicscore_catalogername'] }}}</td>
								
							</tr>
							<tr>
								<th>&nbsp;</th>
								<td>Instrumentation</td>
								<td>{{{ $accession['musicscore_instrumentation'] }}}</td>
								
							</tr>

							<tr>
								<th>&nbsp;</th>
								<td>Instrumentation</td>
								<td>{{{ $accession['musicscore_performances'] }}}</td>
								
							</tr>

							<tr>
								<th>&nbsp;</th>
								<td>Music ScoreCategory</td>
								<td>{{{ $accession['musicscore_category'] }}}</td>
								
							</tr>

							
							
							
							

						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection


@section('scripts')
	
	{!! HTML::script('js/myscripts.js') !!} 
		
	
@endsection

