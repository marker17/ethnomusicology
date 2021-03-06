@extends('main')

@section('All Accessions')

@section('content')

	<div class="row">
		@if (Auth::check())
		<div class="form-group">
			<div style="text-align:right;">
				<a href="{{ route('accessions.create') }}" class="btn btn-primary btn-sm btncreate">Create New Post</a> 
				<a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm btncreate">Create New Category</a>
			</div>
			
		</div>
		@endif

		<div class="col-md-2">

			<table class="table">
				<thead>
					<th>Categories</th>
				</thead>
				<tbody>
					<td>
						<a href="">All</a> 
					</td>
					@foreach ($categories as $category)
						<tr>
							<td>
								<a href="{{url('accessions?type='.$category->category_name) }}">{{$category->category_name}}</a> 
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{--
			@if (Auth::check())
			<div style="text-align:left;">
				<a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm">Create New Category</a>
			</div>

			@endif
			--}}
		</div>
		<div class="col-md-10">
			

			<div class="row">

				<div class="table-responsive">
					<table class="table table-bordered" id="table-accession">
						<thead>
							
							<th>Accession No.</th>
							<th>Type</th>
							<th>Researchers</th>
							<th>Country</th>
							<th>Year</th>
							<th>Description</th>
							<th id="action">Actions</th>
						</thead>

			
							
						
					</table>
				</div>
			</div>
		</div> {{-- end of col-md-8 --}}	
	</div>

	
@endsection




@section('scripts')
<script>

	
   
  
   $(document).ready(function(){
        $('#table-accession').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "/api/accessions",
            "columnDefs": [
    			{ "width": "15%", "targets": 6 }
  			],
            "columns": [
                { data: 'accession_no'},
                { data: 'category_name'},
                { data: 'author'},
                { data: 'groupcountry'},
                { data: 'year'},
                { data: 'description'},
                { data: 'action', name: 'action', orderable: false, searchable: false}
            ]
            
           
                    
        });
    });
   




</script>
	
@endsection


 