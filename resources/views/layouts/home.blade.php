<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

</head>
<body>
        
    <nav class="navbar navbar-default navbar-fixed-top animated fadeInDown">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a href="{{ url('/') }}" class="navbar-brand animated flipInX">{{ config('app.name', 'Laravel') }}</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Acasa<span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicii<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Creare site</a></li>
                    <li><a href="#">Sait de prezentare: One page</a></li>
                    <li><a href="#">Landing page</a></li>
                    <li><a href="#">Optimizare SEO</a></li>
                    <li><a href="#">Web design</a></li>
                    <li><a href="#">Administrare si mentenanta</a></li>
                </ul>
                </li>
                <li><a href="#">Portofoliu</a></li>
                <li><a href="#">Preturi</a></li>
                <li><a href="#">Contacte</a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li class="btn-default"><a href="#">Comanda Aici</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
</body>
</html>