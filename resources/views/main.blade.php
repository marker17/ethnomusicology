<!DOCTYPE html>
<html lang="en">

    <head>
        @include('partials._head')
    </head>

    <body> 
       
        @include('partials._nav')
        
        <div class="container main-container">
        
            @include('partials._messages')


            @yield('content')
        </div>
        <div class="container footer">
            @include('partials._footer')
        </div>
        <!-- Latest compiled and minified JavaScript -->
        <!-- Latest compiled and minified JavaScript -->
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Latest compiled and minified JavaScript -->

        @include('partials._javascript')

        @yield('scripts') 
        
    </body>

</html>



