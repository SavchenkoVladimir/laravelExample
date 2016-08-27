@extends('site.layout')

@section('content')
<div id="summury">
    <div class="row sum">
        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 sum"></div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2 sum">
            <div class="row">
                <div class="col-xs-4 col-sm-12 col-md-12 col-lg-12 sum">
                    <img class="face sum" src="{!! asset('asset/img/site/030.jpg') !!}" alt="author photo" />
                </div>
                <hr class="face">
                <div class="col-xs-5 col-sm-12 col-md-12 col-lg-12 sum">
                    <div class="contacts">
                        <div class="skype">
                            <img src="{!! asset('asset/img/site/skype.jpg') !!}" alt="type message by skype image" class="sum" />
                            <p><a href="skype:SavchenkoV.V.?chat">SavchenkoV.V.</a></p>					
                        </div>
                        <div class="email">
                            <img src="{!! asset('asset/img/site/mail.png') !!}" alt="type message by email image" class="sum" />
                            <p><a href="mailto:Peers.Rom@gmail.com">Peers.Rom@gmail.com</a></p>					
                        </div>
                        <div class="tel">
                            <img src="{!! asset('asset/img/site/phone.png') !!}" alt="telephone logo" class="sum" />
                            <p>+38(050)759-20-16</p>					
                        </div>				
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 sum">
            <div class="download">
                <a download href="{!! asset('asset/txt/#') !!}Vladimir_Savchenko_Junior_Trainee_QA_Engineer_CV.pdf">
                    download PDF CV</a>
                <img src="{!! asset('asset/img/site/downloadPDF.png') !!}" alt="download image" />
            </div>
            <div class="about">
                <h3>Hello, friends.</h3>
                <p>Различного рода тени (особенно необычной формы), как правило делаются с помощью функций Photoshop Blending. Но сейчас, когда у нас есть CSS3, можно делать и кое-что поинтереснее, чем просто тени, не прибегая к помощи инструментариев от Adobe.</p><br />
                <p>Различного рода тени (особенно необычной формы), как правило делаются с помощью функций Photoshop Blending. Но сейчас, когда у нас есть CSS3, можно делать и кое-что поинтереснее, чем просто тени, не прибегая к помощи инструментариев от Adobe.</p><br />
                <p>Различного рода тени (особенно необычной формы), как правило делаются с помощью функций Photoshop Blending. Но сейчас, когда у нас есть CSS3, можно делать и кое-что поинтереснее, чем просто тени, не прибегая к помощи инструментариев от Adobe.</p><br />
                <p>Различного рода тени (особенно необычной формы), как правило делаются с помощью функций Photoshop Blending. Но сейчас, когда у нас есть CSS3, можно делать и кое-что поинтереснее, чем просто тени, не прибегая к помощи инструментариев от Adobe.</p><br />
                <p>Различного рода тени (особенно необычной формы), как правило делаются с помощью функций Photoshop Blending. Но сейчас, когда у нас есть CSS3, можно делать и кое-что поинтереснее, чем просто тени, не прибегая к помощи инструментариев от Adobe.</p><br />
                <p>Различного рода тени (особенно необычной формы), как правило делаются с помощью функций Photoshop Blending. Но сейчас, когда у нас есть CSS3, можно делать и кое-что поинтереснее, чем просто тени, не прибегая к помощи инструментариев от Adobe.</p><br />

                <div class="rule">
                    <h4>Rule</h4>
                    <p>Различного рода тени (особенно необычной формы), как правило делаются с помощью функций Photoshop Blending. Но сейчас, когда у нас есть CSS3, можно делать и кое-что поинтереснее, чем просто тени, не прибегая к помощи инструментариев от Adobe.</p>
                </div>
                <div class="rule">
                    <h4>Rule</h4>
                    <p>Различного рода тени (особенно необычной формы), как правило делаются с помощью функций Photoshop Blending. Но сейчас, когда у нас есть CSS3, можно делать и кое-что поинтереснее, чем просто тени, не прибегая к помощи инструментариев от Adobe.</p>				
                </div>
                <div class="rule">				
                    <h4>Rule</h4>
                    <p>Различного рода тени (особенно необычной формы), как правило делаются с помощью функций Photoshop Blending. Но сейчас, когда у нас есть CSS3, можно делать и кое-что поинтереснее, чем просто тени, не прибегая к помощи инструментариев от Adobe.</p>
                </div>

            </div>
        </div>
        <div class="hidden-xs col-sm-1 col-md-4 col-lg-1 sum"></div>
    </div>
</div>
@endsection