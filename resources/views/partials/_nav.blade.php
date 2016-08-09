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
                <li class="{{ Request::is('index') ? "active" : ""}}"><a href="/collection">Collection</a></li>
                <li class="{{ Request::is('policies') ? "active" : ""}}"><a href="/policies">Policies</a></li>
                <li class="{{ Request::is('contact') ? "active" : ""}}"><a href="/contact">Contact Us</a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control search-query"  placeholder="Search">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
            
    </div><!-- /.container-->
</nav>