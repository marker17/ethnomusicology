<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
            
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? "active" : ""}}"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                <li class="{{ Request::is('josemaceda') ? "active" : ""}}"><a href="/josemaceda">Jose Maceda</a></li>
                <li class="{{ Request::is('index') ? "active" : ""}}"><a href="/accessions">Collection</a></li>
                <li class="{{ Request::is('policies') ? "active" : ""}}"><a href="/policies">Policies</a></li>
                <li class="{{ Request::is('contact') ? "active" : ""}}"><a href="/contact">Contact Us</a></li>
            </ul>
           
            {!! Form::open(['method'=>'GET', 'url' => 'accessions/search', 'class'=>'navbar-form navbar-left'])  !!}
               
                {{Form::text('keyword', Request::input('keyword') ? Request::input('keyword') : null, array('placeholder'=>'Basic Search', 'class' => 'form-control search-query')) }}


                {{ Form::submit('', array('class' => 'btn-invisible' , 'tabindex' =>'-1')) }}
    
               
            {!! Form::close() !!}


           

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello  {{ Auth::user()->name }} <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ route('accessions.index') }}">Accessions</a></li>
                    <li><a href="{{ route('categories.index') }}">Categories</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                  </ul>
                </li>
                @else
                    <p class="navbar-btn">
                        <a href="{{ route('login') }}" class="btn btn-default">Log In</a>    
                        <a href="{{ route('register') }}" class="btn btn-default">Sign Up</a>
                    </p>
                @endif

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

        </div><!-- /.navbar-collapse -->
            
    </div><!-- /.container-->
</nav>