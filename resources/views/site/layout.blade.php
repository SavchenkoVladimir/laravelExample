<?php

//use Illuminate\Html\HtmlFacade;
use Collective\Html\HtmlFacade;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="robots" content="index, follow" />
        <meta charset="UTF-8" />
        <title>{{ $pageParameters['page_name'] }}</title>
        <meta name="description" content="The kit of work exemples. My name is Vladimir Savchenko. I am a front-end developer. On the site you can find my front-end work exemples." />
        <meta name="keywords" content="front-end, work exemples, portfolio" />
        <link href="{!! asset('asset/css/site.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <link href="{!! asset('asset/css/bootstrap.min.css.map') !!}" media="all" rel="stylesheet" type="text/css" />        
        <link rel="icon" type="image/png" href="{!! asset('asset/img/favicon.png') !!}" />
        <!--[if lt IE 9]> 
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
        <![endif]-->
    </head>
    <body>
        <div class="content">
            @yield('content')
        </div>
        <div class='scripts'>
            <script src="{{asset('asset/js/jquery-2.1.4.min.js')}}"></script>
            <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('asset/js/classes.js')}}"></script>            
            <script src="{{asset('asset/js/site.js')}}"></script>            
        </div>
    </body>
</html>

