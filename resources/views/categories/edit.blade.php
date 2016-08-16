@extends('main')

@section('Edit Category')

@section('content')
{!! Form::model($category, ['method' => 'PATCH', 'action'=>['CategoryController@update', $category->id]])!!}
	<div class="panel panel-info">
	 	<div class="panel-heading">Update the Category</div>		 
		<div class="panel-body">
		
					
			<div class="form-group">
				{{ Form::label('category_name', 'Category Name') }}
				{{ Form::text('category_name', null,['class' => 'form-control']) }}
			</div>
				
		</div>
		<div class="panel-footer">
		
			<div class="form-group">
				{{ Form::submit('Update', ['class' => 'btn btn-success btn-sm']) }}
				{!! Form::close() !!}	
				
			</div>
			<div class="form-group">
			
				{!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE', 'id' => 'from1']) !!}

				{{ Form::submit('Delete',['class' => 'btn btn-danger btn-sm']) }}

				{!! Form::close() !!}
			</div>	
			<div class="form-group">

				{!! HTML::linkRoute('categories.index', 'Cancel', array($category->id), array('class'=>'btn btn-primary btn-sm')) !!}
				
			</div>
		</div>
	</div>


	
	

@endsection

@section('scripts')
	{!! HTML::script('js/myscripts.js') !!} 
@endsection