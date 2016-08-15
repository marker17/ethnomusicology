@extends('main')

@section('View Accession')

@section('content')

	<div class="row">

		<div class="col-md-8">
			<h1>{{ $accession->accession_no }}</h1>
		</div>
		<div class="col-md-4">
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

		</div>
	</div>
	
@endsection

@section('scripts')
<script>
        document.querySelector('#from1').addEventListener('submit', function(e) {
            var form = this;
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this accession!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, Delete it!',
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Deleted!',
                        text: 'Accession was successfully deleted!',
                        type: 'success'
                    }, function() {
                        form.submit();
                    });
                    
                } else {
                    swal("Cancelled", "Your accession is safe :)", "error");
                }
            });
        });

    </script>
@endsection