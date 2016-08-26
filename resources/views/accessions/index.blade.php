@extends('main')

@section('All Accessions')

@section('content')

	<div class="row">
		@if (Auth::check())
			<div style="text-align:right;">
				<a href="{{ route('accessions.create') }}" class="btn btn-primary btn-h1-spacing">Create New Post</a>
			</div>
		@endif

		<div class="col-md-2">

			<table class="table">
				<thead>
					<th>Categories</th>
				</thead>
				<tbody>

					@foreach ($categories as $category)
						<tr>
							<td>
								<a href="{{url('accessions?type='.$category->category_name) }}">{{$category->category_name}}</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>

			@if (Auth::check())
			<div style="text-align:left;">
				<a href="{{ route('categories.index') }}" class="btn btn-success btn-block">Create New Category</a>
			</div>
		@endif
		
		</div>
		<div class="col-md-10">
			

			<div class="row">

				<div class="table-responsive">
					<table class="table table-bordered" id="accession">
						<thead>
							<th>Accession No.</th>

						

							<th>Type</th>

							
							<th>Researchers</th>
							<th>Country</th>
							<th>Year</th>
							<th>Description</th>
							<th></th>

							
						</thead>

					
						<tbody>

						
				
							@foreach ($accessions as $accession)

							
								<tr>
									<th><a href="{{route('accessions.show', $accession->id)}}">{{$accession->accession_no}}</a></th>
									

									<td>{{ ($accession->category->category_name) }}</td> 

									
									<td>{{substr($accession->author, 0, 25) }}{{ strlen($accession->author)>25 ? "…" : "" }}</td></td>
									<td>{{substr($accession->groupcountry, 0, 20) }}{{ strlen($accession->author)>20 ? "…" : "" }}</td>
									<td>{{substr($accession->year, 0, 20) }}{{ strlen($accession->year)>20 ? "…" : "" }}</td>
									<td>{{substr($accession->description, 0, 30) }}{{ strlen($accession->description)>50 ? "…" : "" }}</td>

									@if (Auth::check())
										<td id="tdedit" class="text-right">
											<a href="{{ route('accessions.show', $accession->id) }}" class="btn btn-danger btn-sm">View
											</a> <a href="{{ route('accessions.edit', $accession->id) }}" class="btn btn-danger btn-sm">Edit</a>
										</td>
									@endif

									
								</tr>
							@endforeach

							
						</tbody>
						
					</table>
				</div>
			</div>
		</div> {{-- end of col-md-8 --}}	
	</div>

	{{--
	<div class="row">
		<div class="text-center">	
			{!! $accessions->links(); !!}
		</div>
	</div>

	--}}
@endsection




@section('scripts')
	
		{!! HTML::script('js/myscripts.js') !!} 
		
	
@endsection

{{--

@section('scripts')
<script>		
$(document).ready( function () {
    $('#accession').DataTable();
} );

</script>	
@endsection

--}}


