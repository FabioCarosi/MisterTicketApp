@extends('layouts.public')

@section('style')
<style>
    .center {
        margin: auto;
        width: 60%;
        height: 500px;
        padding: 10px;
    }
    iframe {
        width: 100%;
        height: 100%;
        margin: 0 auto;
    }
</style>
@endsection

@section('header')
<div class="row">
    <div class="col-md-12 text-center">
        <div class="text-pageheader">
            <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
                Eventi
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
@isset($events)
@foreach($events as $event)
<!-- CONTENT =============================-->
<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <h1 class="text-center latestitems">{{$event->eventName}}</h1>
            </div>
            <div class="wow-hr type_short">
                <span class="wow-hr-h">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="productbox">
                    @include('helpers/eventImg', ['attrs' => 'imagefrm', 'imgFile' => $event->image])
                    <div class="clearfix">
                    </div>
                    <br/>
                    <div class="product-details text-left">
                        <p>
                            {{$event->eventLongDesc}}
                            
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <a href="#checkout.html" class="btn btn-buynow">{{ number_format($event->getPrice(), 2, ',', '.') }} € - Acquista</a>
                <div class="properties-box">
                    <ul class="unstyle ">
                        <li><b class="propertyname">Data e Ora:</b> {{$event->eventData}}</li>
                        <li><b class="propertyname">Posto:</b> {{$event->eventPlace}}</li>
                        <li><b class="propertyname">Organizzatore:</b> {{($event->getPromoter($event->eventPromoter))}}</li>
                        <li><b class="propertyname">Posti:</b> GNU</li>
                        <li><b class="propertyname">Mappa:</b> Easy Digital Downloads</li>
                        <li><b class="propertyname">Environment:</b> Wordpress</li>
                        <li><b class="propertyname">Any Field Etc:</b> Any Detail</li>
                        <li><b class="propertyname">Number:</b> Up to 20 specifications in this box</li>
                        <li><b class="propertyname">Live Demo:</b><a target="_blank" href="http://www.wowthemes.net/">http://www.wowthemes.net/</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2889.939933218729!2d13.515312415631946!3d43.58696746472868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d802321a175a5%3A0x3e1261137bd6ae51!2sVia+Montebello%2C+10%2C+60131+San Benedetto del Tronto%2C+Italy!5e0!3m2!1sen!2sus!4v1454947673841" style="margin: 0 auto" ></iframe>
    </div>
</section>
@endforeach
@endisset
@endsection




@section('script')
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
    $('.fadeshop').hover(
            function () {
                $(this).find('.captionshop').fadeIn(150);
            },
            function () {
                $(this).find('.captionshop').fadeOut(150);
            }
    );
});
</script>
@endsection
