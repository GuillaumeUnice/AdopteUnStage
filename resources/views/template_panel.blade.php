<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('img/favicons/apple-touch-icon-57x57.png') }}">">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('img/favicons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('img/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('img/favicons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('img/favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('img/favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('img/favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('img/favicons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('img/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="icon" type="image/png" href="{{ url('img/favicons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ url('img/favicons/android-chrome-192x192.png') }}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{ url('img/favicons/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ url('img/favicons/favicon-16x16.png') }}" sizes="16x16">
    <link rel="manifest" href="{{ url('img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="{{ url('img/favicons/mstile-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/x-icon" href="{{ url('img/favicons/favicon.ico') }}" >

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/historique.css') }}"/>

    @yield('style')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="panel-container">

        <div class="panel-header">

            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

                <div class="navbar-header">
                    <span class="navbar-brand">AdopteUnStage @if(isset($schoolName)){{($schoolName->value)?' - '.$schoolName->value :''}}@endif</span>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ol class="breadcrumb nav navbar-nav"> @yield('fil-ariane') </ol>
                    <a class="panel-logout navbar-right" href="{{ url(route('logout')) }}"><img
                                src="{{ asset('img/logout.png') }}"/></a>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse panel-asset">
                    <ul class="nav navbar-nav side-nav">
                        @yield('menu')
                    </ul>
                </div>

            </nav>

        </div>


        <div class="panel-inner">

            <div class="panel-content">
                <div class="panel-content-inner">
                    @yield('content')
                </div>
            </div>

        </div>

        <div class="panel-footer">
            @if(isset($schoolLogo))
            <img src="{{ asset('uploads/ecole/'.($schoolLogo->value))}}"/>
            @endif
        </div>

    </div>



<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
{{-- laroute : obtenir routing laravel depuis fichier JS --}}
<script src="{{ asset('js/laroute.js') }}"></script>
{{-- Angular JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular-route.min.js"></script>

<script src="{{ asset('js/required_items.js') }}"></script>
<script src="{{ asset('js/general.js') }}"></script>

@yield('script_js')

</body>
</html>