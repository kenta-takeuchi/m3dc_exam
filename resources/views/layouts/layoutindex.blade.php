<!DOCTYPE html>
<html class="no-js" lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ Config::get('defaultcfg.defaultcfg.PAGE_TITLE') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

    <!-- jQuery -->
    <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>

    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/util-ui.js')}}"></script>

</head>

<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <h3>{{ Config::get('defaultcfg.defaultcfg.M3DC_LOG_TXT') }}</h3>
            </div>
            <div id="patern03" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                </ul>
            </div>
        </div>
    </nav>
    <div style="margin-bottom: 100px"></div>
</header>

<div>
    @yield('content')
</div>

</body>

</html>
