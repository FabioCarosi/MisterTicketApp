@extends('layouts.public')

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


            <h2>Filterable Table</h2>
            <p>Type something in the input field to search the table for first names, last names or emails:</p>  
            <input id="myInput" type="text" placeholder="Search..">
            <br><br>

            <table>
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@mail.com</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@greatstuff.com</td>
                    </tr>
                    <tr>
                        <td>Anja</td>
                        <td>Ravendale</td>
                        <td>a_r@test.com</td>
                    </tr>
                </tbody>
            </table>

            <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>

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
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto01.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #1</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$49.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto02.png" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #2</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$49.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto03.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #3</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$49.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto04.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #4</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto05.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #5</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$49.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto06.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #6</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto07.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #7</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto08.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #8</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/default.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #9</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENT =============================-->
    <section class="item content">
        <div class="container toparea">
            <div class="underlined-title">
                <div class="editContent">
                    <h1 id="basket" class="text-center latestitems">Basket</h1>
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
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto01.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #1</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$49.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto02.png" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #2</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$49.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto03.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #3</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$49.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto04.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #4</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto05.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #5</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$49.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto06.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #6</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto07.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #7</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto08.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #8</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/default.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #9</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENT =============================-->
    <section class="item content">
        <div class="container toparea">
            <div class="underlined-title">
                <div class="editContent">
                    <h1 id="volley" class="text-center latestitems">Volley</h1>
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
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto01.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #1</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$49.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto02.png" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #2</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$49.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto03.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #3</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$49.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto04.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #4</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto05.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #5</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$49.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto06.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #6</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto07.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #7</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto08.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #8</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.productbox -->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/default.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #9</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">$35.00</span>
                            </span>
                        </div>
                    </div>
                </div>
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
