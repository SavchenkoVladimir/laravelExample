@extends('site.layout')

@section('content')
<div id="work_examples" class="we">
    @foreach ($workExamples as $workExample)

    <div class="row">
        <div class="we_examples_img col-xs-12 col-sm-5 col-md-4 col-lg-4">
            <img src="{{ asset($workExample['img_link'])}}" class="we_examples_img"/>
        </div>          
        <div class="we_examples_descr col-xs-12 col-sm-6 col-md-8 col-lg-8">
            <h3><a href="{!! url('meetAStar') !!}" class="we">{!! $workExample['name'] !!}</a></h3>
            <p class="we_progect_description">{!! $workExample['text_description'] !!}</p>
        </div>
        <hr class="we" />
    </div>
    <hr/>
    @endforeach   
</div>
<div class="scripts">
    <script src="{{asset('asset/js/workExamples.js')}}"></script>
</div>
@endsection


