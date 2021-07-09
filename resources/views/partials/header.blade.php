<header>

    <div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Groovin</a>
            </div>

            <div class="navigation">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><nav>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="current"><a href="#intro">Home</a></li>
                            @if(Auth::check())
                                <li><a href="{{route('user.logout')}}">({{Auth::user()->username}})Logout</a></li>
                            @else
                                <li><a href="{{route('loginPlease')}}">Login</a></li>
                                <li><a href="{{route('user.register.show')}}">Register</a></li>
                            @endif
                        </ul></nav>
                </div><!-- /.navbar-collapse -->
            </div>

        </div>
    </div>

</header>
