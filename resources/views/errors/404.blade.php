<!DOCTYPE HTML>
<html>
    <head>
        <meta name="robots" content="index, follow" />
        <meta charset="UTF-8" />
        <title>404</title>
        <meta name="description" content="The kit of work exemples. My name is Vladimir Savchenko. I am a front-end developer. On the site you can find my front-end work exemples." />
        <meta name="keywords" content="front-end, work exemples, portfolio" />
        <link href="{{ asset('asset/css/site.css') }}" media="all" rel="stylesheet" type="text/css" />
        <link href="{!! asset('asset/bootstrap-3.3.7-dist/css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />        
        <link rel="icon" type="image/png" href="{!! asset('asset/img/site/favicon.png') !!}" />
        <script src="{{asset('asset/js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{asset('asset/js/classes.js')}}"></script>        
    </head>
    <body>
        <section  class="e404">
            <article class="e404">
                <div class="overLine"></div>
                <p class="caption404">404</p>
                <div class="underLine"></div>
                <h1 class="e404">We've got a problem</h1>
                <p class="large404">There's a lot of reasons why the page is 404</p>
                <p class="middle404">Don't waste your time enjoying the look of it</p>
                <p class="small404">We offer solutions for you</p>
                <div class="row">
                    <div class="col-xs-6">
                        {!! Html::link('/home', 'Home', [ 'class' => 'button404 left404'], null)!!}
                    </div>
                    <div class="col-xs-6">
                        {!! Html::link('/contact', 'Contact', [ 'class' => 'button404 right404'], null)!!}
                    </div>
                </div>
            </article>
        </section>
        <script src="{{asset('asset/js/site.js')}}"></script> 
    </body>
</html>