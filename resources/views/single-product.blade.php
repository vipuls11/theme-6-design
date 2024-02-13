@extends('layout')
@section('content')
<script src="assets/js/vendor/jquery.js"></script>
<script type="text/javascript" src="assets/dist/xzoom.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/dist/xzoom.css" media="all" />

    <style>
    
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
                                    {{-- <div class="large-12 column">
                                        <h3></h3>
                                    </div> --}}
                                    <div class="large-5 column mt-5">
                                        <div class="xzoom-container w-100">
                                            <img class="xzoom w-100" 
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
                                    {{-- <div class="large-7 column"></div> --}}
                                </div>
                            </section>
                            <!-- default end -->
                            <script type="" src="assets/js/setup.js"></script>
                        </div>
                    </div>
                </div>
                <div class="scroller col-lg-7">
                    <div class="">
                        <div>
                            <div class="">
                                <span>552820DPJAAE52</span>
                                <h3 class="m-0" style="font-family: AGaramondPro-Regular;">
                                    Ravishing Rose Gold Drop Earrings
                                </h3>

                            </div>
                            <div class="">
                              
                               

                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ................banner................... -->
      




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
       
    </div>
@endsection
