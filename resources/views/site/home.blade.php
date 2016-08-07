@extends('site.layout')

@section('content')
<?php echo $pageParameters['page_name']; ?>
<div class='scripts'>  
    <script src="{{asset('asset/js/home.js')}}"></script>            
</div>
@endsection
