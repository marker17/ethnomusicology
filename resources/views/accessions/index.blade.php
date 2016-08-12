@extends('main')

@section('All Accessions')

@section('content')

	<div class="row">
		<div class="col-md-2">
			<h3>All categories</h3>
		</div>
		<div class="col-md-8">
			<h3>All Posts</h3>
		</div>
		<div class="col-md-2 text-center">

			<a href="{{ route('accessions.create') }}" class="btn btn-primary btn-h1-spacing">Create New Accession</a>
		</div>
		
	</div>

	<div class="row">
		<div class="col-md-2">
			<h3>categories</h3>
		</div>
		<div class="col-md-10">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<th>Accession No.</th>
						<th>Type</th>
						<th>Researchers</th>
						<th>Country</th>
						<th>Year</th>
						<th>Description</th>
					</thead>
					<tbody>
						@foreach($accessions as $accession)
						<tr>
							<th>{{$accession->id }}</th>
							<td>{{$accession->title}}</td>
							<td>{{$accession->author}}</td>
							<td>{{$accession->groupcountry}}</td>
							<td>{{$accession->year}}</td>
							<td>{{str_limit($accession->description, 30, "...")}}</td>
							<td><a href="{{ route('accessions.show', $accession->id)}}" class="btn btn-danger btn-sm">View</a> <a href="{{ route('accessions.edit', $accession->id)}}" class="btn btn-danger btn-sm">Edit</a></td>
						</tr>
						@endforeach
					</tbody>

				</table>
			</div>
		</div>
	</div>


	
@endsection
