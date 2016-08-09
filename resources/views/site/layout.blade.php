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
        <link href="{!! asset('asset/font-awesome-4.6.3/css/font-awesome.min.css') !!}" media="all" rel="stylesheet" type="text/css" />         
        <link rel="icon" type="image/png" href="{!! asset('asset/img/favicon.png') !!}" />
        <script src="{{asset('asset/js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{asset('asset/js/classes.js')}}"></script>
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
                            <li class="hidden-xs col-sm-3 col-md-5 col-lg-5">
                            </li>
                            <li class="div_summary_divnk col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <a class='nav'>Work examples</a>
                            </li>                        
                            <li class="div_home_divnk col-xs-3 col-sm-2 col-md-2 col-lg-2">
                                <a class='nav'>Summury</a>
                            </li>
                            <li class="div_contacts_divnk col-xs-3 col-sm-3 col-md-2 col-lg-2">
                                <a class='nav'>Contacts</a>
                            </li>
                        </ul>
                    </header>
                </div>
                <div class="content">
                    @yield('content')
                </div>
                <footer class="row">
                    <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2"></div>
                    <div class="col-xs-5 col-sm-4 col-md-3 col-lg-4">
                        <div class="copyright">&copy; Vladimir Savchenko</div>
                        <div class="beginYear">2015</div>
                        <div class="currentYear"></div>
                    </div>
                    <div class="col-xs-1 col-sm-3 col-md-3 col-lg-3"></div>
                    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                        <a href="https://www.linkedin.com/shareArticle?url=http://savchenkoportfolio.com&mini=true"
                           id="linkedin"><i class="fa fa-linkedin fa-2x share" aria-hidden="true"></i></a>
                        <a href="http://www.facebook.com/sharer.php?s=link" id="facebook">
                            <i class="fa fa-facebook fa-2x share" aria-hidden="true"></i></a>
                        <a href="http://vkontakte.ru/share.php?url=link" id="vk">
                            <i class="fa fa-vk fa-2x share" aria-hidden="true"></i>
                        </a>                        
                    </div>     
                    <div></div>
                </footer>
            </div>
        </div>
        <div class='scripts'>
            <script src="{{asset('asset/js/site.js')}}"></script>           
            <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
        </div>
    </body>
</html>

