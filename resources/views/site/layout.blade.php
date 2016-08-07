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
        <meta name="keywords" content="front-end, work exemples, portfodivo" />
    <link href="{!! asset('asset/css/site.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('asset/css/bootstrap.css') !!}" media="all" rel="stylesheet" type="text/css" />        
    <link rel="icon" type="image/png" href="{!! asset('asset/img/favicon.png') !!}" />
    <!--[if lt IE 9]> 
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
    <![endif]-->
</head>
<body>
    <div class='row'>
        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
            <div class="row">
                <header class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="row">
                        <li class="div col-xs-12 col-sm-12 col-md-12 col-lg-5">
                            <a class='nav'></a>
                        </li>
                        <li class="div_home_divnk col-xs-12 col-sm-12 col-md-12 col-lg-2">
                            <a class='nav'>Home</a>
                        </li>
                        <li class="div_summary_divnk col-xs-12 col-sm-12 col-md-12 col-lg-3">
                            <a class='nav'>Work examples</a>
                        </li>
                        <li class="div_contacts_divnk col-xs-12 col-sm-12 col-md-12 col-lg-2">
                            <a class='nav'>Contacts</a>
                        </li>
                    </ul>
                </header>
            </div>
            <div class="content">
                @yield('content')
            </div>
            <footer class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            </footer>
        </div>
    </div>
    <div class='scripts'>
        <script src="{{asset('asset/js/jquery-2.1.4.min.js')}}"></script>

        <script src="{{asset('asset/js/classes.js')}}"></script>            
        <script src="{{asset('asset/js/site.js')}}"></script>            
        <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    </div>
</body>
</html>

