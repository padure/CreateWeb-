<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{URL::asset('css/agency.min.css') }}" rel="stylesheet">
    <link href="{{URL::asset('css/search.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <style>
      @media (max-width: 991px){
          .form-inline{
          width: 100%!important;
          }
          .search-index{
            margin-top: 20px;
          }
      }
    </style>
    <!-- Custom styles for this template -->
    

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/en') }}">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            {{ Form::open(array('url' => 'en/search', 'class' => 'form-inline nav-item pull-left')) }}
            {!! Form::text('query', null, ['class' => 'form-control search-index', 'type'=>'search', 'aria-label' => 'Search', 'placeholder' => 'Search', 'style' => 'width: 100%!important; padding: .150rem .30rem!important; background-color: transparent; color: #fed136; border-radius: 0;']) !!}
            {{ Form::close() }}
          </ul>
        </div>
      </div>
    </nav>
    <header class="masthead">
      <div class="container">
        <div class="intro-text search">
        <div class="container-fluid search-container">
        <h5>Search: <u>{{ $query }}</u></h5>
            @if($query != '')
            <table class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Compartiment</th>
              </tr>
            </thead>
            <tbody>
                @foreach($services as $ser)
                    @if($ser->lg =='EN')
                        <tr>
                        <td>{{ $ser->title }}</td>
                        <td>Services</td>
                        </tr>
                    @endif
                @endforeach
                @foreach($portofoliu as $port)
                    @if($port->lg =='EN')
                        <tr>
                        <td>{{ $port->categorie }}</td>
                        <td>Prtofolio</td>
                        </tr>
                    @endif
                @endforeach
                @foreach($teams as $team)
                    @if($team->lg =='EN')
                        <tr>
                        <td>{{ $team->name }}</td>
                        <td>Team</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
            @else
                <p>You have not entered anything</p>
            @endif
        </div>
        </div>
      </div>
    </header>

<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <span class="copyright">Copyright &copy; {{ config('app.name', 'Laravel') }} 2018</span>
          </div>
          <div class="col-md-6">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    
    <!-- Bootstrap core JavaScript -->
    <script src="{{URL::asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{URL::asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{URL::asset('js/jqBootstrapValidation.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{URL::asset('js/agency.min.js') }}"></script>

  </body>

</html>