<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Artykuły </title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700&subset=latin,latin-ext" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    

    <style>
        body {
            font-family: 'Lato';
        }
    </style>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">

            <ul class="sidebar-nav" data-toggle="collapse" data-target="#collapse">
                <li class="sidebar-brand">
                    <a href="{{  route('homepage') }}">
                        Kyokushin Siemianowice 
                    </a>
                </li>
                <li class="dropdown">
                    <a href="" data-toggle="dropdown" >Co to Kyokushin</a>
                    <ul class="dropdown-menu">
                        <li> <a href="/przysiega-dojo"><b>Przysięga Dojo</b></a> </li>
                        <li> <a href="/historia-karate"><b>Historia Karate</b></a> </li>
                        <li> <a href="{{ route('filozofia-karate') }}"><b>Filozofia Karate</b></a> </li>
                        <li> <a href="/whytranings"><b>Dlaczego warto trenować</b></a> </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"  data-toggle="dropdown"  >Wymagania egzaminacyjne</a>

                    <ul class="dropdown-menu">
                        <li> <a href="{{ route('wymagania-dzieci') }}"><b>Dziecęce</b></a> </li>
                        <li> <a href="{{ route('wymagania-dorosli') }}"><b>Powyżej lat 14</b></a> </li>
                        </ul>
                 </li>
                </li>
                <li class="dropdown">
                    <a href="#"  data-toggle="dropdown"  >Trenuj sam</a>

                    <ul class="dropdown-menu">
                        <li> <a href="/slownictwo"><b>Słownictwo</b></a> </li>

                    </ul>
                 </li>
                 <li> <a href="{{ route('gallery') }}"><b>Galeria</b></a> </li>
                  <!-- <li>
                    <a href="/gallery">Galeria</a>
                  </li> -->
                 @if (!Auth::guest())
                    @if (Auth::user()->role == 2)
                    <li>
                        <a href="/materialy-szkoleniowe">Materiały szkoleniowe</a>
                    </li>
                    @endif
                @endif
                <li>
                    <a href="/films">Filmy</a>
                </li>
                @if (!Auth::guest())
                <li>
                    <a href="/scores">Twoje osiągnięcia</a>
                </li>
                @endif
                <li>
                    <a href="/contact">Kontakt</a>
                </li>
                <li>
                    <a href="#" class="menu-toggle hide-menu hidden-lg hidden-md"><span><i class="fa fa-bars  " aria-hidden="true"></i> Ukryj menu</span></a>
                </li>
            </ul>


            <img class="sign  hidden-xs" src="/img/znak.png" alt="">

            @if (Auth::guest())
            <form class="form-horizontal login-form" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-sm-12 control-label">E-Mail</label>
                    <div class="col-xs-12">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-sm-12 control-label">Hasło</label>
                    <div class="col-xs-12">
                    <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-10">
                    <div class="checkbox">
                        <label>
                        <input type="checkbox" name="remember"> Pamiętaj mnie
                        </label>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-10">
                    <button type="submit" class="btn btn-primary">Zaloguj</button>
                    </div>
                </div>

                <a href="{{ url('register') }}"  class="btn btn-primary" role="button">Zarejestruj się</a>
            </form>

            @else
                <form action="{{url('logout')}}" method="POST">
                {{csrf_field()}}
                    <input type="submit" class="btn btn-primary logout" value="Wyloguj">
                </form>
            @endif
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <a title="Menu" href="#menu-toggle" class="menu-toggle hidden-lg hidden-md " ><span class="glyphicon glyphicon-menu-hamburger"></span ></a>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->







<div class="hidden-xs hidden-sm" id="facebook_slider_widget" style="display: none">
    <script type="text/javascript" src="http://webfrik.pl/widget/facebook_slider.html?fb_url=https://www.facebook.com/maneckidojo/?ref=ts&fref=ts&amp;fb_width=250&amp;fb_height=290&amp;fb_faces=true&amp;fb_stream=false&amp;fb_header=true&amp;fb_border=false&amp;fb_theme=light&amp;chx=787&amp;speed=slow&amp;fb_pic=logo&amp;position=RIGHT"></script>
</div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>


    $(".menu-toggle").click(function(e) {
       e.preventDefault();
       $("#wrapper").toggleClass("toggled");
       $("#page-content-wrapper .menu-toggle").toggleClass("hidden");
    });
    </script>


</body>
</html>