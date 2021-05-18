<@extends('layouts.public')


@section('header')
<div class="container">
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
    <section class="item content">
        <div class="container toparea">

            <div id="navbar-collapse-02" class="collapse navbar-collapse div-center " style="margin:0 auto; width: 270px; align-content: center" >
                <ul class="nav navbar-nav ">
                    <li><a href="#calcio">Calcio</a></li>
                    <li><a href="#basket">Basket</a></li>
                    <li><a href="#volley">Volley</a></li>
                </ul>
            </div>
            <div class="underlined-title">
                <div class="editContent">
                    <h1 id="calcio" class="text-center latestitems" style="margin-top:20px">Calcio</h1>
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
                 @isset($events)
                @foreach($events as $event)
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>{{$event->eventName}}</h3>
                                <p>
                                    {{$event->eventShortDesc}}
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Acquista</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Dettagli</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto01.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>{{$event->eventName}}</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">{{ number_format($event->getPrice(), 2, ',', '.') }} €</span>
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
                @endisset()
                 </div>
            </div>
        </section>
                
                @endsection

                @section('scripts')
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
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
                </script>
                @endsection
