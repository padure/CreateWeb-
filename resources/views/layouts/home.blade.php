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
        <div class="container-fluid" style="background-color: #b300b3;">
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
                <li><a href="#"><b>Acasa</b><span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Servicii</b><span class="caret"></span></a>
                <ul class="dropdown-menu" style="background-color: #b300b3;">
                    <li><a href="#">Creare site</a></li>
                    <li><a href="#">Sait de prezentare: One page</a></li>
                    <li><a href="#">Landing page</a></li>
                    <li><a href="#">Optimizare SEO</a></li>
                    <li><a href="#">Web design</a></li>
                    <li><a href="#">Administrare si mentenanta</a></li>
                </ul>
                </li>
                <li><a href="#"><b>Portofoliu</b></a></li>
                <li><a href="#"><b>Preturi</b></a></li>
                <li><a href="#"><b>Contacte</b></a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li class="btn-default"><a href="#" data-toggle="modal" data-target="#exampleModal">Comanda Aici</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Recipient:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Message:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
            </div>
        </div>
    </div>
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("li").hover(function(){
               // $(".dropdown").addClass("open");
               alert('Salut');
        });
    </script>
</body>
</html>