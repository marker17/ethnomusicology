@extends('main')

@section('Edit Category')

@section('content')

	<div class="row">
		
		{!! Form::model($category, ['method' => 'PATCH', 'action'=>['CategoryController@update', $category->id]])!!} 
			<div class="col-md-8">
				

				{{ Form::label('category_name', 'Category Name') }}
				{{ Form::text('category_name', null,['class' => 'form-control']) }}

			</div>
			<div class="col-md-4">
				<div class="well">
					<div class="row">
						<div class="col-sm-4">
							{!! HTML::linkRoute('categories.index', 'Cancel', array($category->id), array('class'=>'btn btn-primary btn-block')) !!}

						</div>
						<div class="col-sm-4">
							{!! Form::submit('Update', ['class' => 'btn btn-success btn-block']) !!}
							{!! Form::close() !!}
						</div>

						<div class="col-sm-4">
							{!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}

							{!! Form::submit('Delete',['class' => 'btn btn-danger btn-block form-control']) !!}

							{!! Form::close() !!}
								
						</div>
					</div>
				</div>
			</div>
		{!! Form::close() !!}
	</div>

@endsection
