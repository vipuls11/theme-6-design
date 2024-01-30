@extends('layout')
@section('content')
<script src="assets/js/vendor/jquery.js"></script>
<script type="text/javascript" src="assets/dist/xzoom.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/dist/xzoom.css" media="all" />

    <style>
        /* body{
           font-family: 'Satisfy', 'cursive';
         } */

        .containerer {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            /* padding: 4px 16px; */
        }

        #cards-container {
            overflow: hidden;
            margin: 20px;
        }

        .cards {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 99999px;
        }

        .card {
            /* Add shadows to create the "card" effect */
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            /* background: rgb(135,55,78); */
            -webkit-transition: 0.3s;
            transition: 0.3s;
            width: 235px;
            margin: 15px 7.5px;
        }

        .card:hover {
            -webkit-box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .card .img {
            max-width: 250px;
            height: 250px;
            display: inline-block;
        }

        #slide-left-container,
        #slide-right-container {
            display: none;
        }

        #slide-left-container.active,
        #slide-right-container.active {
            display: block;
            cursor: pointer;
        }

        .slide-left,
        .slide-right {
            border-color: #0f0101;
            border-style: solid;
            height: 20px;
            width: 20px;
            margin-top: 30%;
        }

        .slide-left {
            border-width: 4px 0 0 4px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            margin-left: 40%;
        }

        .slide-right {
            border-width: 4px 4px 0 0;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            margin-left: 22%;
        }

        .scroller::-webkit-scrollbar {
            width: 0px;
        }



        /* ..............accordance............... */
        .accordionItemHeading {
            cursor: pointer;
            /* margin:0px 0px 10px 0px;
            padding:10px;
            background:#2980b9; */
            color: #161515;
            width: 100%;
            /* -webkit-border-radius: 3px; */
            /* -moz-border-radius: 3px;
        border-radius: 3px; */
            box-sizing: border-box;
        }

        .close .accordionItemContent {
            height: 0px;
            transition: height 1s ease-out;
            -webkit-transform: scaleY(0);
            -o-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
            float: left;
            display: block;


        }

        .open .accordionItemContent {
            /* padding: 20px; */
            background-color: #fff;
            /* border: 1px solid #ddd; */
            width: 100%;
            /* margin: 0px 0px 10px 0px; */
            display: block;
            -webkit-transform: scaleY(1);
            -o-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
            -webkit-transform-origin: top;
            -o-transform-origin: top;
            -ms-transform-origin: top;
            transform-origin: top;

            -webkit-transition: -webkit-transform 0.4s ease-out;
            -o-transition: -o-transform 0.4s ease;
            -ms-transition: -ms-transform 0.4s ease;
            transition: transform 0.4s ease;
            box-sizing: border-box;
        }

        .open .accordionItemHeading {
            /* margin:0px; */
            /* -webkit-border-top-left-radius: 3px;
            -webkit-border-top-right-radius: 3px;
            -moz-border-radius-topleft: 3px;
            -moz-border-radius-topright: 3px;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            -webkit-border-bottom-right-radius: 0px;
            -webkit-border-bottom-left-radius: 0px;
            -moz-border-radius-bottomright: 0px;
            -moz-border-radius-bottomleft: 0px;
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
            background-color: #bdc3c7; */
            /* color: #7f8c8d; */
        }

        /* ..............accordance............... */

        /* ..................review icon.............. */
        .star {
            font-size: 23px;
            cursor: pointer;
        }

        .one {
            color: rgb(255, 255, 0);
        }

        .two {
            color: rgb(255, 255, 0);
        }

        .three {
            color: rgb(255, 255, 0);
        }

        .four {
            color: rgb(255, 255, 0);
        }

        .five {
            color: rgb(255, 255, 0);
        }

        /* ..................review icon.............. */

        /* .................product Button................ */
        .btn-product {
            background: var(--darkgreen);
            color: var(--white);
        }

        /* .................product Button................ */

        /* .................read more review  button.............. */
        #more {display: none;}
         /* .................read more review  button.............. */
    </style>
    <div class="my-5">

        <div class="container">
            <div class="scroller row">
                <div class="col-lg-5">
                    <div>
                        <p class="fs-6">
                <a href="" class="text-dark">Home <span>| </span></a>
                <a href="" class="text-dark">Diamond Earrings <span>| </span></a>
                <a href="" class="" style="color: var(--darkgreen);"
                  >Ravishing Rose Gold Drop Earrings
                </a>
              </p>
  
   
                        <div>
                            <section id="default" class="padding-top-0" >
                                <div class="row ">
                                    <div class="large-12 column">
                                        <h3></h3>
                                    </div>
                                    <div class="large-5 column mt-5">
                                        <div class="xzoom-container w-100">
                                            <img class="xzoom  w-100" 
                                            id="xzoom-default"
                                            src="assets/images/gallery/preview/earring4.jpg"
                                            xoriginal="assets/images/gallery/original/earring4.jpg" />
                                            <video 
                                            width="450" 
                                            height="450" 
                                            class="xzoom mt-2"
                                                id="myDiv"
                                                 controls
                                                  style="display: none;">
                                                <source src="assets/images/gallery/preview/vedio.mp4"
                                                    xoriginal="assets/images/gallery/original/vedio.mp4" type="video/mp4" />
                                            </video>
                                            <div class="xzoom-thumbs d-flex gap-3 justify-content-center w-100 py-2 mt-5">
                                                <a onclick="hideVideo()"
                                                    href="assets/images/gallery/original/earring4.jpg"><img
                                                        class="xzoom-gallery" width="60"
                                                        src="assets/images/gallery/thumbs/earring4.jpg"
                                                        xpreview="assets/images/gallery/preview/earring4.jpg" /></a>
                                                <a onclick="hideVideo()"
                                                    href="assets/images/gallery/original/earring5.jpg"><img
                                                        class="xzoom-gallery" width="60"
                                                        src="assets/images/gallery/preview/earring5.jpg" /></a>
                                                <a onclick="hideVideo()"
                                                    href="assets/images/gallery/original/earring7.jpg"><img
                                                        class="xzoom-gallery" width="60"
                                                        src="assets/images/gallery/preview/earring7.jpg" /></a>
                                                <a href="#" onclick="showHideDiv()">
                                                    <img width="60" class="xzoom-gallery border"
                                                        src="assets/images/video.png" />
                                                </a>
                                                <a onclick="hideVideo()"
                                                    href="assets/images/gallery/original/earring8.jpg"><img
                                                        class="xzoom-gallery" width="60"
                                                        src="assets/images/gallery/preview/earring8.jpg" /></a>
                                            </div>

                                            <!-- ..........video.............  -->
                                            <script>
                                                function showHideDiv() {
                                                    var x = document.getElementById("myDiv");
                                                    var img = document.getElementById("xzoom-default");

                                                    x.style.display = "block";
                                                    img.style.display = "none";
                                                }

                                                function hideVideo() {
                                                    var x = document.getElementById("myDiv");
                                                    var img = document.getElementById("xzoom-default");
                                                    x.style.display = "none";
                                                    img.style.display = "block";
                                                }
                                            </script>
                                            <!-- ...................video..................  -->
                                        </div>
                                    </div>
                                    <div class="large-7 column"></div>
                                </div>
                            </section>
                            <!-- default end -->
                            <script type="" src="assets/js/setup.js"></script>
                        </div>
                    </div>
                </div>
                <div class="scroller col-lg-7">
                    <div class="d-flex">
                        <div>
                            <div class="">
                                <span>552820DPJAAE52</span>
                                <h3 class="m-0" style="font-family: AGaramondPro-Regular;">
                                    Ravishing Rose Gold Drop Earrings
                                </h3>

                            </div>
                            <div class="">
                                <h6 class="text-dark pt-1 pb-2 m-0">
                                    As rosy as your exuberance, as sparkling as your wit!
                                </h6>
                                <div class="d-flex gap-5 ">
                                    <h6 class="fs-5 m-0 fw-semibold "><span class="fw-semibold fs-5">Offer price</span> &#8377;24 481.00
                                    </h6>
                                    <del class="fw-semibold">
                                        Price <span class="text-danger" style="font-size: 14px;">&#8377;25 769.00</span></del>
                                    </del>
                                </div>
                                <div class="mt-2 fw-semibold">
                                    <span class="">50% </span>off
                                </div>
                                <div class="">
                                    <p class="text-dark m-0">
                                        Price inclusive of all taxes.See full
                                        <span class="">Price Breakup</span>
                                    </p>
                                </div>
                                <div class="text-dark">
                                    <div class="pt-2">
                                        <label for="countries" class="fw-semibold" style="margin-right:10px;">Gross Weight</label>
                                        <select id="countries" class="">
                                            <option selected>3.029 <span>g</span></option>
                                            <option value="CA">3.031 <span>g</span></option>
                                            <option value="FR">3.996 <span>g</span></option>
                                            <option value="DE">3.1000 <span>g</span></option>
                                        </select>
                                    </div>

                                    <div class="py-2">
                                        <label for="countries" class="fw-semibold" style="margin-right:10px;" id="Quantity">Qty</label>

                                        <select name="" id="">
                                            <option value="" selected>0</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                        </select>

                                    </div>
                                </div>

                                <div>
                                    <div class="my-2">
                                        <div class="">
                                            <p style="" class="text-dark mb-1"> <span class="fw-semibold">Gold Purity :</span>  <span > 18.00 Karat</span></p>
                                        </div>
                                        <div class="">
                                            <p style="" class="text-dark mb-1"><span class="fw-semibold">Diamond
                                              Weight: </span> <span >0.140c</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-2">
                                    <p class="text-dark">
                                        Not sure what to buy? Checkout our
                                        <span class=""><a href="">Buying Guides</a></span>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex gap-3">
                                    <div class="">
                                        <a href="{{ asset('cart') }}"><button
                                                class="btn-product text-dark fw-semibold px-4 py-1  ">
                                                Add to Cart
                                            </button></a>
                                    </div>
                                    <div class="font-semibold text-left">
                                        <a href="{{ asset('checkout')}}"><button class="btn-product text-dark fw-semibold px-4 py-1"
                                                >
                                                Buy Now
                                            </button></a>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="py-3">
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="fa-regular fa-gem"></i>
                                        <p class="text-dark m-0">Purity Guaranteed</p>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                        <p class="text-dark m-0">Easy Returns</p>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="fa-sharp fa-regular fa-box"></i>
                                        <p class="text-dark m-0">Free Shipping across India</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-dark fw-semibold">
                                    Still Confused What to Buy?
                                </h4>
                                <p class="pb-2 text-dark">
                                    Get on live video call with our design experts, or visit your
                                    nearest Tanishq store to get an closer look and know more
                                    about the product.
                                </p>
                                <button class="btn-product fw-semibold px-4 py-1">
                                    Talk to an Expert
                                </button>
                            </div>
                        </div>
                        <div>
                            <div class="">
                                <div class="" >
                                    <i class="fa-regular fa-heart" style="font-size: 24px;"></i>
                                </div>
                                <div class="py-2">
                                    <svg aria-hidden="true" class="-ml-px" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" width="25" height="25">
                                        <path
                                            d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ................banner................... -->
        <div>
            <img src="bluenileimg/Everyday-Jewels-Inside-Banner.jpg" alt="" />
        </div>

        <div class="container-fluid row px-4 w-100">
            <div class="col-lg-9">
                <div>
                    <h2 class="text-2xl font-semibold py-1"
                        style="font-family: AGaramondPro-Regular;">
                        Product Details
                    </h2>
                    <p class="py-1 text-dark">
                        The diamond and gold spirals in these earrings are subtly
                        enchanting. Allure everyone when you don this pair of earrings with
                        your workwear!
                    </p>
                </div>
                <div class="d-flex gap-5 ">
                    <h2 class="" style="font-family: AGaramondPro-Regular;">Specifications</h2>
                    <div class="">
                        <button class="px-1 fw-semibold" onclick="plusDivs(-1)" style="background: var(--darkgreen);">
                            &#10094;
                        </button>
                        <button class="px-1 fw-semibold" onclick="plusDivs(+1)" style="background: var(--darkgreen);">
                            &#10095;
                        </button>
                    </div>
                </div>
                <div>
                    <div class="mySlides leading-8">
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Purity : <span class="font-normal">18.00</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Quantity : <span class="font-normal">1</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Brand : <span class="font-normal">Tanishq</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Gender : <span class="font-normal">Women</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Collection : <span class="font-normal">Bestsellers</span>
                        </h5>
                    </div>
                    <div class="mySlides leading-8">
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Product : <span class="font-normal">Earrings</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Style : <span class="font-normal">Basic</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Metal : <span class="font-normal">Gold</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Jewellery Type :
                            <span class="font-normal">Diamond Jewellery</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Size : <span class="font-normal">A</span>
                        </h5>
                    </div>
                    <div class="mySlides leading-8">
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Metal color : <span class="font-normal">Yellow</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Type : <span class="font-normal">Studs</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Occassion : <span class="font-normal">Office Wear</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Diamonds : <span class="font-normal">22</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Diamond Clarity : <span class="font-normal" style="font-family: AGaramondPro-Regular;">| 1
                                |</span>
                            <span style="font-family: AGaramondPro-Regular;">2</span>
                        </h5>
                    </div>
                    <div class="mySlides leading-8">
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Diamond Color : <span class="font-normal">Dia G H</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Diamond Shape : <span class="font-normal">Round</span>
                        </h5>
                        <h5 class="font-semibold" style="font-family: AGaramondPro-Regular;">
                            Diamond Setting : <span class="font-normal">Free</span>
                        </h5>
                    </div>
                </div>
            </div>
            <!-- .....image.... -->
            <div class="col-lg-3 py-5 ">
                {{-- <img src="bluenileimg/Ring.webp" alt="" class="w-72 h-72" /> --}}
                <div class="d-flex text-dark p-2 m-0">
                    <span class="" style="margin-right: 10px;"><i class="fa-solid fa-tags"></i></span>
                    <p class="m-0 text-dark fw-semibold">Best Designs</p>
                </div>
                <div class="d-flex text-dark p-2 m-0">
                    <span class="" style="margin-right: 10px;"><i class="fa-solid fa-certificate"></i></span>
                    <p class="m-0 text-dark fw-semibold">Certified
                        Diamonds</p>
                </div>
                <div class="d-flex text-dark p-2 m-0">
                    <span class="" style="margin-right: 10px;"><i class="fa-solid fa-landmark"></i></span>
                    <p class="m-0 text-dark fw-semibold">Bis
                        Hallmark</p>
                </div>
                <div class="d-flex text-dark p-2 m-0">
                    <span class="" style="margin-right: 10px;"><i class="fa-solid fa-box"></i></span>
                    <p class="m-0 text-dark fw-semibold">Easy
                        Exchange</p>
                </div>
                <div class="d-flex  text-dark p-2 m-0">
                    <span class="" style="margin-right: 10px;"><i class="fa-solid fa-arrow-right-arrow-left"></i></span>
                    <p class="m-0 text-dark fw-semibold">Lifetime
                        Exchange</p>
                </div>
                <div class="d-flex text-dark p-2 m-0">
                    <span class="" style="margin-right: 10px;"><i class="fa-solid fa-truck-fast"></i></span>
                    <p class="m-0 text-dark fw-semibold">Insured
                        Shipping</p>
                </div>

            </div>
            <!-- ..........image.......... -->
        </div>
        <!-- .............features accordance......... -->
        <div class="container-fluid row my-3">
            <div class="col-lg-6">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Price Breakup
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="py-2 border ">
                                    <table class="w-full">
                                        <thead class="border-b border-black">
                                            <tr class="">
                                                <th class="py-2" style="font-family: AGaramondPro-Regular;">Component
                                                </th>
                                                <th class="py-2" style="font-family: AGaramondPro-Regular;">Gold Rate
                                                    <span>(18kt)</span>
                                                </th>
                                                <th class="py-2" style="font-family: AGaramondPro-Regular;">Weight
                                                    <span>(g)</span>
                                                </th>
                                                <th class="py-2" style="font-family: AGaramondPro-Regular;">Discount
                                                </th>
                                                <th class="py-2" style="font-family: AGaramondPro-Regular;">Final Vaue
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm text-center leading-8">
                                            <tr>
                                                <td>18kt Plain Gold</td>
                                                <td><span>&#8377;</span> 56.26/g</td>
                                                <td>3.001g</td>
                                                <td>-</td>
                                                <td><span>&#8377; </span>13929.26</td>
                                            </tr>

                                            <tr>
                                                <td>Stone Detail</td>
                                                <td>-</td>
                                                <td>0.14ct/0.0280g</td>
                                                <td>-</td>
                                                <td><span>&#8377; </span>14722.00</td>
                                            </tr>

                                            <tr>
                                                <td>Making Charges</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td><span>&#8377; </span>7271.00</td>
                                            </tr>
                                        </tbody>

                                        <tbody class="border-t text-sm border-black text-center leading-8">
                                            <tr>
                                                <td>Sub Total</td>
                                                <td>-</td>
                                                <td>
                                                    3.029g
                                                    <h4>(Grow Weight)</h4>
                                                </td>
                                                <td>-</td>
                                                <td><span>&#8377; </span>35922.26</td>
                                            </tr>
                                            <tr>
                                                <td>GST</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td><span>&#8377; </span>1077.67</td>
                                            </tr>
                                            <tr class="text-lg font-semibold">
                                                <td style="font-family: AGaramondPro-Regular;">Grand Total</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td style="font-family: AGaramondPro-Regular;"><span>&#8377; </span>37000
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                More Information
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="py-2">
                                    <p class="text-dark">Net Quantity: <span>1 N</span></p>
                                    <p class="text-dark">
                                        Contact customer care executive at the manufacturing address above
                                        or call us at <a href="">1800-266-0123</a>. Email us at
                                        <a href="">customercare@titan.co.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this would
                                look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .............features accordance......... -->
            <!-- .......grid 3...... -->
            <div class="col-lg-6">
                <img src="{{ asset('images/gif/banner-single-product.png') }}" alt="" class="w-100">
                {{-- <div class="grid grid-cols-3 gap-5">
          <div><img src="bluenileimg/Guides-Ecomm-Banner-1.avif" alt="" /></div>
          <div><img src="bluenileimg/Guides-Ecomm-Banner-2.avif" alt="" /></div>
          <div><img src="bluenileimg/Guides-Ecomm-Banner-3.avif" alt="" /></div>
        </div> --}}

            </div>

        </div>
        <div class="container-fluid text-center">
            <div class="">
                <h3 class=" pb-2" style="font-family: AGaramondPro-Regular;">Review</h3>
                <div class="text-center my-1">
                    <figure class="">
                        <div class="d-flex justify-content-center text-center mb-4 ">
                            <svg aria-hidden="true" style="width: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" style="width: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" style="width: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" style="width: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" style="width: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <h3 class="text-black text-center mx-3 my-1">Write a review</h3>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="tab">
                <button class="tablinks px-4 py-2 fw-semibold" style="background: var(--darkgreen); colo" onclick="openCity(event, 'Review')"> <i
                        class="fa-solid fa-pen mr-2"></i> Write A Review</button>
                <button class="tablinks px-4 py-2 fw-semibold" onclick="openCity(event, 'Ask')" style="background: var(--darkgreen);"><i
                        class="fa-solid fa-message mr-2 "></i> Ask A Question</button>
            </div>

            <!-- ........................toggle review.................. -->
            <!-- Tab content -->
            <div id="Review" class="tabcontent">
                <div>
                    <form action="">
                        <h5 class="fs-5 mt-2 fw-semibold">
                            <span class="text-danger py-4">*</span> Write A Review
                        </h5>
                        <h5 class="fw-semibold"><span class="text-danger py-2">*</span> Score</h5>
                        {{-- <div class="flex items-center mt-2 mb-5"> --}}
                        <div id="" class="text-xl mt-1 mb-5">
                            {{-- <i class="fa fa-star active"></i> --}}
                            <span onclick="gfg(1)" class="star"><i class="fa-solid fa-star"></i> </span>
                            <span onclick="gfg(2)" class="star"><i class="fa-solid fa-star"></i></span>
                            <span onclick="gfg(3)" class="star"><i class="fa-solid fa-star"></i></span>
                            <span onclick="gfg(4)" class="star"><i class="fa-solid fa-star"></i></span>
                            <span onclick="gfg(5)" class="star"><i class="fa-solid fa-star"></i></span>
                            <h6 id="output" class="fs-6 fw-semibold">
                                Rating is: 0/5
                            </h6>

                        </div>

                        <div class="w-100">
                            <div>
                                <label for=""><span class="text-danger text-xl">*</span>Title</label>
                                <br />
                                <input type="text" class="w-50 py-2 my-1 px-4 " />
                            </div>
                            <div class="flex gap-5 w-100">
                                <div class="w-100">
                                    <label for=""><span class="text-danger">*</span>Use Your
                                        Name</label>
                                    <br />
                                    <input type="text" class="w-50 py-2 my-1 px-4" />
                                </div>

                                <div class="w-100 py-4">
                                    <label for=""><span class="text-danger">*</span>Email</label>
                                    <br />
                                    <input type="text" class="w-50 py-2 my-1 px-4 " />
                                </div>
                            </div>
                            <div class="py-2">
                              <label for=""><span class="text-danger">*</span>Review</label>
                              <br />
                              <textarea name="" id="" cols="20" rows="3"
                                  class="w-50 py-2 my-1 px-4 "></textarea>
                          </div>

                            <div class="">
                                <button class="btn-product px-4 py-2 text-white fw-semibold" style="background: var(--darkgreen);">
                                    POST
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="Ask" class="tabcontent" style="display: none;">
                <div>
                    <form action="">
                        <h5 class="mt-2 fw-semibold">
                            <span class="text-danger  py-4 uppercase fs-5">*</span>Ask A
                            Question
                        </h5>
                        <h5 class="fw-semibold">
                            <span class="text-danger  py-3">*</span> Indicates a
                            required field
                        </h5>

                        <div class="w-100">
                            <div class="py-2 w-100">
                                <label for=""><span class="text-danger ">*</span>Question</label>
                                <br />
                                <textarea name="" id="" cols="20" rows="3"
                                    class="w-50 py-2 my-2 px-4 "></textarea>
                            </div>

                            <div class="flex gap-5 w-100">
                                <div class="w-100">
                                    <label for=""><span class="text-danger ">*</span>Use Your
                                        Name</label>
                                    <br />
                                    <input type="text" class="w-50 py-2 my-2 px-4" />
                                </div>

                                <div class="w-100">
                                    <label for=""><span class="text-danger text-xl">*</span>Email</label>
                                    <br />
                                    <input type="text" class="w-50 py-2 my-2 px-4 " />
                                </div>
                            </div>

                            <div class="grid place-content-end">
                                <button class="btn-product px-4 py-2 text-dark fw-semibold" style=" background: var(--darkgreen);">
                                    POST
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ....................toggle Question............ -->
        {{-- .....................Review  comments and Rating.............. --}}
        <section class="container my-3">
            <div class="d-flex gap-5 border p-2 my-1">
              <div style="width:80px;">
                <img src="{{ asset('images/Earring Collections/vipul.jpeg') }}" alt="" class="rounded-circle"
                    style="width: 80px; height:80px; box-shadow: 5px 5px 6px rgb(199, 200, 201);">
                  </div>
                <div>
                    <div>
                        <label for="" class="fw-semibold" style="margin-right: 10px;">Vipul Vishwakarma</label>
                        <span class=""><i class="fa-solid fa-star "></i></span>
                        <span><i class="fa-solid fa-star "></i></span>
                        <span><i class="fa-solid fa-star "></i></span>
                        <span><i class="fa-solid fa-star "></i></span>
                        <span><i class="fa-solid fa-star "></i></span>
                    </div>
                    <div>
                        <span class="" style="font-size: 12px;">Jan 30 , 2024</span>
                    </div>
                    <div>
                        <p class="" style="color:var(--black); margin:0px; font-size:14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum
                            interdum, nisi lorem egestas vitae scel<span id="dots" style="font-size:14px;">...</span><span
                                id="more" style="font-size:14px;">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue
                                eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum
                                nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed
                                ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros
                                non fermentum. Sed dapibus pulvinar nibh tempor porta.</span> <span onclick="myFunction()" id="myBtn" class="text-primary" style="cursor: pointer; font-size:14px;">Read more</span></p>
                        
                    </div>
                </div>
            </div>
            <div class="d-flex gap-5 border p-2 my-1">
              <div style="width:80px;">
                <img src="{{ asset('images/Earring Collections/vipul.jpeg') }}" alt="" class="rounded-circle"
                    style="width: 80px; height:80px; box-shadow: 5px 5px 6px rgb(199, 200, 201);">
                  </div>
                <div>
                    <div>
                        <label for="" class="fw-semibold" style="margin-right: 10px;">Vipul Vishwakarma</label>
                        <span class=""><i class="fa-solid fa-star "></i></span>
                        <span><i class="fa-solid fa-star "></i></span>
                        <span><i class="fa-solid fa-star "></i></span>
                        <span><i class="fa-solid fa-star "></i></span>
                        <span><i class="fa-solid fa-star "></i></span>
                    </div>
                    <div>
                        <span class="" style="font-size: 12px;">Jan 30 , 2024</span>
                    </div>
                    <div>
                        <p class="" style="color:var(--black); margin:0px; font-size:14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum
                            interdum, nisi lorem egestas vitae scel<span id="dots" style="font-size:14px;">...</span><span
                                id="more" style="font-size:14px;">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue
                                eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum
                                nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed
                                ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros
                                non fermentum. Sed dapibus pulvinar nibh tempor porta.</span> <span onclick="myFunction()" class="text-primary" id="myBtn" style="cursor: pointer; font-size:14px;">Read more</span></p>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- ................slider image...................... -->
        <div class="container px-4">
            <h1 class="text-xl font-semibold" style="font-family: AGaramondPro-Regular;">Customers Who Viewed This Also
                Viewed</h1>

            <div class="containerer ">
                <div id="slide-left-container">
                    <div class="slide-left">
                    </div>
                </div>
                <div id="cards-container">
                    <div class="cards">
                        <div class="card">
                            <a href="{{ asset('single-product') }}"><img src="{{ asset('images/home/Emerald.jpg') }}"
                                    class="card-img-top border" alt="..."></a>
                            <div class="fast_shipping w-50 text-center p-2"
                                style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                            </div>
                            <div class="vedio_heart">
                                <span class="vedio_button" style="margin-right: 10px;"><button type="button"
                                        class="vedio_btn btn-primary p-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button>
                                </span>
                                <span><i class="fa-regular fa-heart fs-4"></i></span>
                            </div>

                            <div class="card_desc card-body">
                                <div class="card-text d-flex justify-content-between align-items-center ">
                                    <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                    <div class="card-text">
                                        <p class="card-text p-0">4.9<span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i> </span> <span
                                                class="fs-6">(14)</span></p>
                                    </div>
                                </div>
                                <div>
                                    <p class="" style="margin-bottom:0px;"><b class="card-text"
                                            style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del
                                            class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                </div>
                                <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on
                                    Stones</p>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{ asset('single-product') }}"><img src="{{ asset('images/home/Emerald.jpg') }}"
                                    class="card-img-top border" alt="..."></a>
                            <div class="fast_shipping w-50 text-center p-2"
                                style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                            </div>
                            <div class="vedio_heart">
                                <span class="vedio_button" style="margin-right: 10px;"><button type="button"
                                        class="vedio_btn btn-primary p-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button>
                                </span>
                                <span><i class="fa-regular fa-heart fs-4"></i></span>
                            </div>

                            <div class="card_desc card-body">
                                <div class="card-text d-flex justify-content-between align-items-center ">
                                    <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                    <div class="card-text">
                                        <p class="card-text p-0">4.9<span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i> </span> <span
                                                class="fs-6">(14)</span></p>
                                    </div>
                                </div>
                                <div>
                                    <p class="" style="margin-bottom:0px;"><b class="card-text"
                                            style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del
                                            class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                </div>
                                <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on
                                    Stones</p>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{ asset('single-product') }}"><img src="{{ asset('images/home/Emerald.jpg') }}"
                                    class="card-img-top border" alt="..."></a>
                            <div class="fast_shipping w-50 text-center p-2"
                                style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                            </div>
                            <div class="vedio_heart">
                                <span class="vedio_button" style="margin-right: 10px;"><button type="button"
                                        class="vedio_btn btn-primary p-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button>
                                </span>
                                <span><i class="fa-regular fa-heart fs-4"></i></span>
                            </div>

                            <div class="card_desc card-body">
                                <div class="card-text d-flex justify-content-between align-items-center ">
                                    <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                    <div class="card-text">
                                        <p class="card-text p-0">4.9<span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i> </span> <span
                                                class="fs-6">(14)</span></p>
                                    </div>
                                </div>
                                <div>
                                    <p class="" style="margin-bottom:0px;"><b class="card-text"
                                            style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del
                                            class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                </div>
                                <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on
                                    Stones</p>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{ asset('single-product') }}"><img src="{{ asset('images/home/Emerald.jpg') }}"
                                    class="card-img-top border" alt="..."></a>
                            <div class="fast_shipping w-50 text-center p-2"
                                style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                            </div>
                            <div class="vedio_heart">
                                <span class="vedio_button" style="margin-right: 10px;"><button type="button"
                                        class="vedio_btn btn-primary p-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button>
                                </span>
                                <span><i class="fa-regular fa-heart fs-4"></i></span>
                            </div>

                            <div class="card_desc card-body">
                                <div class="card-text d-flex justify-content-between align-items-center ">
                                    <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                    <div class="card-text">
                                        <p class="card-text p-0">4.9<span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i> </span> <span
                                                class="fs-6">(14)</span></p>
                                    </div>
                                </div>
                                <div>
                                    <p class="" style="margin-bottom:0px;"><b class="card-text"
                                            style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del
                                            class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                </div>
                                <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on
                                    Stones</p>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{ asset('single-product') }}"><img src="{{ asset('images/home/Emerald.jpg') }}"
                                    class="card-img-top border" alt="..."></a>
                            <div class="fast_shipping w-50 text-center p-2"
                                style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                            </div>
                            <div class="vedio_heart">
                                <span class="vedio_button" style="margin-right: 10px;"><button type="button"
                                        class="vedio_btn btn-primary p-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button>
                                </span>
                                <span><i class="fa-regular fa-heart fs-4"></i></span>
                            </div>

                            <div class="card_desc card-body">
                                <div class="card-text d-flex justify-content-between align-items-center ">
                                    <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                    <div class="card-text">
                                        <p class="card-text p-0">4.9<span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i> </span> <span
                                                class="fs-6">(14)</span></p>
                                    </div>
                                </div>
                                <div>
                                    <p class="" style="margin-bottom:0px;"><b class="card-text"
                                            style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del
                                            class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                </div>
                                <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on
                                    Stones</p>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{ asset('single-product') }}"><img src="{{ asset('images/home/Emerald.jpg') }}"
                                    class="card-img-top border" alt="..."></a>
                            <div class="fast_shipping w-50 text-center p-2"
                                style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                            </div>
                            <div class="vedio_heart">
                                <span class="vedio_button" style="margin-right: 10px;"><button type="button"
                                        class="vedio_btn btn-primary p-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button>
                                </span>
                                <span><i class="fa-regular fa-heart fs-4"></i></span>
                            </div>

                            <div class="card_desc card-body">
                                <div class="card-text d-flex justify-content-between align-items-center ">
                                    <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                    <div class="card-text">
                                        <p class="card-text p-0">4.9<span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i> </span> <span
                                                class="fs-6">(14)</span></p>
                                    </div>
                                </div>
                                <div>
                                    <p class="" style="margin-bottom:0px;"><b class="card-text"
                                            style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del
                                            class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                </div>
                                <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on
                                    Stones</p>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{ asset('single-product') }}"><img src="{{ asset('images/home/Emerald.jpg') }}"
                                    class="card-img-top border" alt="..."></a>
                            <div class="fast_shipping w-50 text-center p-2"
                                style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                            </div>
                            <div class="vedio_heart">
                                <span class="vedio_button" style="margin-right: 10px;"><button type="button"
                                        class="vedio_btn btn-primary p-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button>
                                </span>
                                <span><i class="fa-regular fa-heart fs-4"></i></span>
                            </div>

                            <div class="card_desc card-body">
                                <div class="card-text d-flex justify-content-between align-items-center ">
                                    <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                    <div class="card-text">
                                        <p class="card-text p-0">4.9<span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i> </span> <span
                                                class="fs-6">(14)</span></p>
                                    </div>
                                </div>
                                <div>
                                    <p class="" style="margin-bottom:0px;"><b class="card-text"
                                            style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del
                                            class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                </div>
                                <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on
                                    Stones</p>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{ asset('single-product') }}"><img src="{{ asset('images/home/Emerald.jpg') }}"
                                    class="card-img-top border" alt="..."></a>
                            <div class="fast_shipping w-50 text-center p-2"
                                style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                            </div>
                            <div class="vedio_heart">
                                <span class="vedio_button" style="margin-right: 10px;"><button type="button"
                                        class="vedio_btn btn-primary p-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button>
                                </span>
                                <span><i class="fa-regular fa-heart fs-4"></i></span>
                            </div>

                            <div class="card_desc card-body">
                                <div class="card-text d-flex justify-content-between align-items-center ">
                                    <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                    <div class="card-text">
                                        <p class="card-text p-0">4.9<span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i> </span> <span
                                                class="fs-6">(14)</span></p>
                                    </div>
                                </div>
                                <div>
                                    <p class="" style="margin-bottom:0px;"><b class="card-text"
                                            style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del
                                            class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                </div>
                                <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on
                                    Stones</p>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{ asset('single-product') }}"><img src="{{ asset('images/home/Emerald.jpg') }}"
                                    class="card-img-top border" alt="..."></a>
                            <div class="fast_shipping w-50 text-center p-2"
                                style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                            </div>
                            <div class="vedio_heart">
                                <span class="vedio_button" style="margin-right: 10px;"><button type="button"
                                        class="vedio_btn btn-primary p-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button>
                                </span>
                                <span><i class="fa-regular fa-heart fs-4"></i></span>
                            </div>

                            <div class="card_desc card-body">
                                <div class="card-text d-flex justify-content-between align-items-center ">
                                    <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                    <div class="card-text">
                                        <p class="card-text p-0">4.9<span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i> </span> <span
                                                class="fs-6">(14)</span></p>
                                    </div>
                                </div>
                                <div>
                                    <p class="" style="margin-bottom:0px;"><b class="card-text"
                                            style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del
                                            class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                </div>
                                <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on
                                    Stones</p>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{ asset('single-product') }}"><img src="{{ asset('images/home/Emerald.jpg') }}"
                                    class="card-img-top border" alt="..."></a>
                            <div class="fast_shipping w-50 text-center p-2"
                                style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                            </div>
                            <div class="vedio_heart">
                                <span class="vedio_button" style="margin-right: 10px;"><button type="button"
                                        class="vedio_btn btn-primary p-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button>
                                </span>
                                <span><i class="fa-regular fa-heart fs-4"></i></span>
                            </div>

                            <div class="card_desc card-body">
                                <div class="card-text d-flex justify-content-between align-items-center ">
                                    <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                    <div class="card-text">
                                        <p class="card-text p-0">4.9<span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i> </span> <span
                                                class="fs-6">(14)</span></p>
                                    </div>
                                </div>
                                <div>
                                    <p class="" style="margin-bottom:0px;"><b class="card-text"
                                            style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del
                                            class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                </div>
                                <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on
                                    Stones</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="slide-right-container">
                    <div class="slide-right">
                    </div>
                </div>

            </div>

        </div>


        <!-- ................slider image...................... -->
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <!-- ................slider image...................... -->
        <script>
            /**
             * @description Change Home page slider's arrows active status
             */
            function updateSliderArrowsStatus(
                cardsContainer,
                containerWidth,
                cardCount,
                cardWidth
            ) {
                if (
                    $(cardsContainer).scrollLeft() + containerWidth <
                    cardCount * cardWidth + 15
                ) {
                    $("#slide-right-container").addClass("active");
                } else {
                    $("#slide-right-container").removeClass("active");
                }
                if ($(cardsContainer).scrollLeft() > 0) {
                    $("#slide-left-container").addClass("active");
                } else {
                    $("#slide-left-container").removeClass("active");
                }
            }
            $(function() {
                // Scroll products' slider left/right
                let div = $("#cards-container");
                let cardCount = $(div)
                    .find(".cards")
                    .children(".card").length;
                let speed = 1000;
                let containerWidth = $(".containerer").width();
                let cardWidth = 250;

                updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);

                //Remove scrollbars
                $("#slide-right-container").click(function(e) {
                    if ($(div).scrollLeft() + containerWidth < cardCount * cardWidth) {
                        $(div).animate({
                            scrollLeft: $(div).scrollLeft() + cardWidth
                        }, {
                            duration: speed,
                            complete: function() {
                                setTimeout(
                                    updateSliderArrowsStatus(
                                        div,
                                        containerWidth,
                                        cardCount,
                                        cardWidth
                                    ),
                                    1005
                                );
                            }
                        });
                    }
                    updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);
                });
                $("#slide-left-container").click(function(e) {
                    if ($(div).scrollLeft() + containerWidth > containerWidth) {
                        $(div).animate({
                            scrollLeft: "-=" + cardWidth
                        }, {
                            duration: speed,
                            complete: function() {
                                setTimeout(
                                    updateSliderArrowsStatus(
                                        div,
                                        containerWidth,
                                        cardCount,
                                        cardWidth
                                    ),
                                    1005
                                );
                            }
                        });
                    }
                    updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);
                });

                // If resize action ocurred then update the container width value
                $(window).resize(function() {
                    try {
                        containerWidth = $("#cards-container").width();
                        updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);
                    } catch (error) {
                        console.log(
                            `Error occured while trying to get updated slider container width: 
              ${error}`
                        );
                    }
                });
            });
        </script>
        <!-- ................slider image...................... -->
        <!-- .................review................ -->
        <script>
            function openCity(evt, cityName) {
                // Declare all variables
                var i, tabcontent, tablinks;

                // Get all elements with class="tabcontent" and hide them
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                // Get all elements with class="tablinks" and remove the class "active"
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                // Show the current tab, and add an "active" class to the button that opened the tab
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>
        <!-- .................review................ -->

        <!-- .......grid 3...... -->
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs((slideIndex += n));
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {
                    slideIndex = 1;
                }
                if (n < 1) {
                    slideIndex = x.length;
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex - 1].style.display = "block";
            }
        </script>

        <!-- ..........................for Qunatity increment........................... -->
        <script>
            // Select increment and decrement buttons
            const incrementCount = document.getElementById("increment-count");
            const decrementCount = document.getElementById("decrement-count");

            // Select total count
            const totalCount = document.getElementById("total-count");

            // Variable to track count
            var count = 1;

            // Display initial count value
            totalCount.innerHTML = count;

            // Function to increment count
            const handleIncrement = () => {
                count++;
                totalCount.innerHTML = count;
            };

            // Function to decrement count
            const handleDecrement = () => {
                count = 1;
                totalCount.innerHTML = count;
            };

            // Add click event to buttons
            incrementCount.addEventListener("click", handleIncrement);
            decrementCount.addEventListener("click", handleDecrement);
        </script>
        <!-- ..........................for Qunatity increment........................... -->

        {{-- .....................accordance................... --}}
        <script>
            var accItem = document.getElementsByClassName('accordionItem');
            var accHD = document.getElementsByClassName('accordionItemHeading');
            for (i = 0; i < accHD.length; i++) {
                accHD[i].addEventListener('click', toggleItem, false);
            }

            function toggleItem() {
                var itemClass = this.parentNode.className;
                for (i = 0; i < accItem.length; i++) {
                    accItem[i].className = 'accordionItem close';
                }
                if (itemClass == 'accordionItem close') {
                    this.parentNode.className = 'accordionItem open';
                }
            }
        </script>
        {{-- .....................accordance................... --}}


        {{-- ..............................review button..................... --}}

        <script>
            // To access the stars
            let stars =
                document.getElementsByClassName("star");
            let output =
                document.getElementById("output");

            // Funtion to update rating
            function gfg(n) {
                remove();
                for (let i = 0; i < n; i++) {
                    if (n == 1) cls = "one";
                    else if (n == 2) cls = "two";
                    else if (n == 3) cls = "three";
                    else if (n == 4) cls = "four";
                    else if (n == 5) cls = "five";
                    stars[i].className = "star " + cls;
                }
                output.innerText = "Rating is: " + n + "/5";
            }

            // To remove the pre-applied styling
            function remove() {
                let i = 0;
                while (i < 5) {
                    stars[i].className = "star";
                    i++;
                }
            }
        </script>
        {{-- ..............................review button..................... --}}

        {{-- ......................read more /less button..................... --}}
        <script>
          function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");
          
            if (dots.style.display === "none") {
              dots.style.display = "inline";
              btnText.innerHTML = "Read more"; 
              moreText.style.display = "none";
            } else {
              dots.style.display = "none";
              btnText.innerHTML = "Read less"; 
              moreText.style.display = "inline";
            }
          }
          </script>
             {{-- ......................read more /less button..................... --}}
    </div>
@endsection
