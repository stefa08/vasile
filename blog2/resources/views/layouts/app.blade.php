<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="shortcut icon" href="{{ asset('law.gif') }}" >
<<<<<<< HEAD

    <style>
#video{
    float: left;
    width: 50%;
}

#title {
    font-size:300%;
    font-style: italic;
    color:gray;
    float: right;
    width: 50%;
} 

#main-wrap {
    /* overflow to handle inner floating block */ 
    border-style: solid;
    border-color: #808080;
    overflow: hidden;
}
        body {
            font-family: 'Lato';
        }
       
        .fa-btn {
            margin-right: 6px;
        }
        .jumbotron{
             background-image:url("{{ asset('banner_search.jpg') }}") ; 
             background-repeat: no-repeat; 
             -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
        }
        .navbar-custom {
    color: #FF0049;
    background-color: #649DC8;
}

    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top navbar-custom  ">
        <div class="container">

=======
    <link rel="stylesheet" href="{{ URL::asset('css/design.css') }}" />
    
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
>>>>>>> 944bbd5400bacdb48068de14cd4b21bbb6408253
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
<<<<<<< HEAD
                <a class="navbar-brand" href="{{ url('/') }}">
                    <strong ><font color='white'>About us</font></strong>
=======
                <a class="navbar-brand" href="{{ url('http://students.info.uaic.ro/~stefan.pascaru/') }}">
                    About us
>>>>>>> 944bbd5400bacdb48068de14cd4b21bbb6408253
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
<<<<<<< HEAD
                    <li><a href="http://students.info.uaic.ro/~stefan.pascaru">Home</a></li>
=======
                    <li><a href="{{ url('/home') }}">Home</a></li>
>>>>>>> 944bbd5400bacdb48068de14cd4b21bbb6408253


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        SlideShare <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
<<<<<<< HEAD
                                <form action="{{action('SlideShareController@getAPI')}}" method="post"> Cauta slideuri despre:
                                    <input type="text" name="tag_slideuri"><br>
                                    <input type="submit" value="Cauta">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </li>
                        </ul>
                    </li>
                    
                    <li><a href="{{ url('/vimeo') }}">vimeo</a></li>

                    <li><a href="{{ url('/Cristi') }}">Cristi</a></li>
                    <li><a href="{{ url('/Sami') }}">Sami</a></li>
                    <li><a href="{{ url('/mash') }}">Mash-up</a></li>
=======
                                {!! Form::open(array('route' => 'slide.api.simplu')) !!}
                                    {{Form::label('cauta','Cauta slideuri despre:')}}
                                    {{Form::text('tag_slideuri',null,array('class'=>'form-control'))}}
                                    {{Form::submit('Cauta',array('class' => 'btn btn-succes btn-lg btn-block'))}}
                                {!! Form::close() !!}
                            </li>
                            <li><a href="{{ url('/slideAv') }}">Cautare avansata</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="{{ url('/vimeo') }}">Bogdan</a></li>
                    <li><a href="{{ url('/Cristi') }}">Cristi</a></li>
                    <li><a href="{{ url('/Sami') }}">Sami</a></li>
>>>>>>> 944bbd5400bacdb48068de14cd4b21bbb6408253
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<<<<<<< HEAD
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $('#getRequest').click(function(){
        alert($(this).text());
        });
    });
    </script>
</body>
</html>
=======

         <!-- Begin page content -->
      <div class="container">

        <div class="page-header">
        </div>
        <p> <a href="{{ url('/documentation') }}"> API Documentation</a></p>
      </div>
    </div><!-- Wrap Div end -->

</body>
</html>
>>>>>>> 944bbd5400bacdb48068de14cd4b21bbb6408253
