<div class="container topnav">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand topnav" href="#">Plantas Medicinais</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{ url('/home#about') }}">home</a>
            </li>
            <li>
                <a href="{{ url('/#services') }}" >Services</a>
            </li>
            <li >
                <a href="{{ url('/#contact') }}" >Contato</a>
            </li>
            <!----
            <li>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Languages
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        @foreach(config('app.languages') as $lang)
                            <li class="{{ session('locale') == $lang ? 'active' : '' }}">
                                <a href="/language?lang={{ $lang }}" >{{ $lang }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            --->
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login#services') }}">Login</a></li>
                <li><a href="{{ url('/register#services') }}">Registar</a></li>
            @else
                <li >
                    <a href="{{ url('/catalogacao#services') }}" >Cadastro</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>
                    </ul>
                </li>
            @endif
            <!-- Right Side Of Navbar -->

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</div>
<!-- /.container -->