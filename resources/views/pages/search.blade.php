

@extends('main')                    

@section('Home')  

@section('content')
	<h1>WELCOME</h1>
   
  @if (count($articles) === 0)
    <p>No articles found</p>
	@elseif (count($articles) >= 1)
    @foreach($articles as $article)
        {{ dd($article }}
    @endforeach
@endif
@endif
@stop   



