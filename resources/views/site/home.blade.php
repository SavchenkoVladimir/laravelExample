@extends('site.layout')

@section('content')
<div id="home_page">
    <div id="sun"></div> 
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            {!! Html::link('https://github.com/SavchenkoVladimir/laravelExample',
            'HTML5', ['id' => 'link_html'], null)!!} 
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            {!! Html::link('https://github.com/SavchenkoVladimir/laravelExample',
            'JAVASCRIPT', ['id' => 'link_javascript'], null)!!}   
        </div>        
    </div>
    <div class="row">
        <div class="col-xs-6">
            {!! Html::link('https://github.com/SavchenkoVladimir/laravelExample',
            'CSS3', ['id' => 'link_css'], null)!!}   
        </div>
        <div class="col-xs-6">
            {!! Html::link('https://github.com/SavchenkoVladimir/laravelExample',
            'PHP', ['id' => 'link_php'], null)!!}   
        </div>            
    </div>
    <div class="row">
        <div class="col-xs-6">
            {!! Html::link('https://github.com/SavchenkoVladimir/laravelExample',
            'LARAVEL', ['id' => 'link_laravel'], null)!!}   
        </div>
        <div class="col-xs-6">
            {!! Html::link('https://github.com/SavchenkoVladimir/laravelExample',
            'MySQL', ['id' => 'link_mysql'], null)!!}   
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            {!! Html::link('https://github.com/SavchenkoVladimir/laravelExample',
            'AJAX', ['id' => 'link_ajax'], null)!!}   
        </div>
        <div class="col-xs-6">
            {!! Html::link('https://github.com/SavchenkoVladimir/laravelExample',
            'bootstrap', ['id' => 'link_bootstrap'], null)!!}   
        </div>
    </div>        
</div>
@endsection


