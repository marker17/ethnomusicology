<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

{{ HTML::style('css/normalize.css') }}

{{--{{ HTML::style('css/bootstrap.min.css') }} --}}
    
{{ HTML::style('css/styles.css') }}

{{ HTML::style('css/dist/sweetalert.css') }}




<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
{{ HTML::style('css/font-awesome.min.css') }}

{{ HTML::style('css/bootstrap-social.css') }}




@yield('stylesheets') 