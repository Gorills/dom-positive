<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Новости</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/static/css/bootstrap.min.css">
        <link rel="stylesheet" href="/static/css/font-awesome.min.css">
        <link rel="stylesheet" href="/static/css/main.css">

        <!--[if lt IE 9]>
            <script src="/js/vendor/html5shiv.min.js"></script>
        <![endif]-->

        <script src="/static/js/vendor/modernizr.custom.32229-2.8-respondjs-1-4-2.js"></script>
    </head>
    <body>
@stack('header')	
        <main class="container left-container">
            <div class="row">
@yield('content')                
            </div> <!--/row -->

        </main> <!-- /container -->
@stack('footer')	
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/static/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="/static/js/vendor/jquery.jpanelmenu.min.js"></script>
        <script src="/static/js/vendor/bootstrap.min.js"></script>
        <script src="/static/js/vendor/fastclick.min.js"></script>

        <script src="/static/js/main.js"></script>
    </body>
</html>
