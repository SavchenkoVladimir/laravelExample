<?php
//use Illuminate\Html;
//use Collective\HtmlServiceProvider;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="robots" content="index, follow" />
        <meta charset="UTF-8" />
        <title>{{ $pageParameters['page_name'] }}</title>
        <meta name="description" content="The kit of work exemples. My name is Vladimir Savchenko. 
              I am a front-end developer. On the site you can find my front-end work exemples." />
        <meta name="keywords" content="front-end, work exemples, portfodivo" />
        <link href="{!! asset('asset/css/site.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <link href="{!! asset('asset/bootstrap-3.3.7-dist/css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />        
        <link href="{!! asset('asset/font-awesome-4.6.3/css/font-awesome.min.css') !!}" media="all" 
              rel="stylesheet" type="text/css" />         
        <link rel="icon" type="image/png" href="{!! asset('asset/img/site/favicon.png') !!}" />
        <script src="{{asset('asset/js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{asset('asset/js/classes.js')}}"></script>
        <!--[if lt IE 9]> 
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
        <![endif]-->
    </head>
    <body>
         <div class="row" id="site_layout">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="layout_header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsiv-header">
                    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>                            
                    <span class="sr-only">Open navigation</span>                     
                </button>
                <div class="collapse navbar-collapse" id="responsiv-header">
                    <ul class="row">
                        <li class="hidden-xs col-sm-1 col-md-4 col-lg-4">
                        </li>
                        <li class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                            {!! Html::link($pageParameters['link'][0]['route'],
                            $pageParameters['link'][0]['html'], [ 'class' => 'nav'], null)!!} 
                        </li>                        
                        <li class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                            {!! Html::link($pageParameters['link'][1]['route'],
                            $pageParameters['link'][1]['html'], [ 'class' => 'nav'], null)!!}  
                        </li>
                        <li class="col-xs-12 col-sm-3 col-md-2 col-lg-2" id="li_contacts_link">
                            <a class='nav'>Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content" id="site_content">
                @yield('content')
            </div>

            <div class="row" id="site_layout_footer">
                <div class="hidden-xs col-sm-1 col-md-2 col-lg-2">                
                </div>
                <div class="copyright_container col-xs-8 col-sm-7 col-md-5 col-lg-5">
                    <div class="copyright">&copy; Vladimir Savchenko</div>
                    <div class="beginYear">2015</div>
                    <div class="currentYear"></div>        
                </div>
                <div class="hidden-xs col-sm-1 col-md-2 col-lg-3"></div>
                <div class="share_links_container col-xs-4 col-sm-3 col-md-3 col-lg-2">
                    <a href="https://www.linkedin.com/shareArticle?url=http://savchenkoportfolio.com&mini=true"
                       id="linkedin"><i class="fa fa-linkedin fa-2x share" aria-hidden="true"></i></a>
                    <a href="http://www.facebook.com/sharer.php?s=link" id="facebook">
                        <i class="fa fa-facebook fa-2x share" aria-hidden="true"></i></a>
                    <a href="http://vkontakte.ru/share.php?url=link" id="vk">
                        <i class="fa fa-vk fa-2x share" aria-hidden="true"></i>
                    </a>                  
                </div>
            </div>
        </div>            
    </div>
    <div class='scripts'>
        <script src="{{asset('asset/js/site.js')}}"></script>           
        <script src="{{asset('asset/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
    </div>        
</body>
</html>
