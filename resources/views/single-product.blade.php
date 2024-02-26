@extends('layout')
@section('content')
<script src="assets/js/vendor/jquery.js"></script>
<script type="text/javascript" src="assets/dist/xzoom.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/dist/xzoom.css" media="all" />

    <style>
    
    </style>
        <div class="container-fluid fs-6 my-3">
            <a href="" class="text-dark">Home <span>| </span></a>
            <a href="" class="text-dark">Diamond Earrings <span>| </span></a>
            <a href="" class="" style="color: var(--darkgreen);"
              >Ravishing Rose Gold Drop Earrings
            </a>
        </div>
    <div class="my-5">

        <div class="container">
            <div class="scroller row">
                <div class="col-lg-4">
                    <div>
                    
  
   
                        <div>
                            <section id="default" class="padding-top-0" >
                                <div class="row">
                                    {{-- <div class="large-12 column">
                                        <h3></h3>
                                    </div> --}}
                                    <div class="large-5 column">
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
                <div class="scroller col-lg-8">
                    <div class="">
                        <div class="px-4">
                            <div class="">
                                <h4 class="m-0 mb-1 text-black" style="">
                                    Ravishing Rose Gold Drop Earrings
                                </h4>
                               <p class="text-black" style="m-0 font-size:14px;">Product code: <span style=" font-size:14px;">552820DPJAAE52</span></p>
                                <p class="text-black ">Free Shipping In India | Hallmarked jewellery available for sale</p>
                                <p class="text-black">Availability: <span>Make To Order</span></p>
                            </div>
                            <div class="mb-2">
                                <h4 class="fw-semibold m-0" style="color: var(--darkgreen)">&#8377; 13000</h4>
                                <p class="m-0 text-black" style="font-size: 12px;">(Inclusive of all takes)</p>
                            </div>
                            <div>
                                <div class="row g-2">
                                    <div class="col-2 ">
                                        <label for="qty">Size :</label><br>
                                        <select name="" id="" class="py-1 w-100">
                                            <option value="" class="border " >12(51.9mm)</option>
                                            <option value="" selected>10(50mm)</option>
                                            <option value="">12(51.9mm)<option>
                                            <option value="">13(53.1mm)</option>
                                            <option value="">14(54.4mm)</option>
                                        </select>
                                    </div>
                                    <div class="col-2 ">
                                        <label for="qty">Gold Color :</label><br>
                                        <select name="" id="" class="py-1 w-100">
                                            <option value="">Rose</option>
                                            <option value="" selected>Yellow</option>
                                            <option value="">Gold<option>
                                            {{-- <option value="">13(53.1mm)</option>
                                            <option value="">14(54.4mm)</option> --}}
                                        </select>
                                    </div>
                                    <div class="col-2 ">
                                        <label for="qty">Gold Color :</label><br>
                                        <select name="" id="" class="py-1 w-100">
                                            <option value="">Rose</option>
                                            <option value="" selected>VVSHS-GH</option>
                                            <option value="">Gold<option>
                                            {{-- <option value="">13(53.1mm)</option>
                                            <option value="">14(54.4mm)</option> --}}
                                        </select>  
                                    </div>
                                    <p class="text-black" style="font-size: 14px;">Weight will increase as per the Size. <span class="" style="color:var(--darkgreen); font-size: 14px;">Check Sizing Comparison</span></p>
                                    <div class="pb-4 border-bottom">
                                        <h6 class="fw-semibold m-0 mb-2" style="font-size: 14px;">Price Breakup</h6>
                                        <div class="d-flex text-center">
                                            <div class="border-end p-2" >
                                                <p class="text-black m-0" style="font-size: 14px;">Gold</p>
                                                <p class="m-0 text-black" style="font-size: 14px;">&#8377; 4865</p>
                                            </div>
                                            <div class="border-end p-2"> 
                                                <p class="text-black m-0" style="font-size: 14px;">Diamond</p>
                                                <p class="text-black m-0" style="font-size: 14px;">&#8377; 2948</p>
                                            </div>
                                            <div class="border-end p-2">
                                                <p class="text-black m-0" style="font-size: 14px;">Making</p>
                                                <p class="text-black m-0" style="font-size: 14px;">&#8377; 2900</p>
                                            </div>
                                            <div class="border-end p-2">
                                                <p class="text-black m-0" style="font-size: 14px;">Tax</p>
                                                <p class="text-black m-0" style="font-size: 14px;">&#8377; 321</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex " >
                                            <input type="text" class="m-0 px-2" placeholder="Pincode" style="width: 150px; border-radius:0%; border:1px solid black;">
                                            <button class="m-0 px-2 text-white" style="background: var(--darkgreen); border:1px solid black;">Check</button>
                                        </div>
                                        <div class="mx-2">
                                            <p class="m-0 text-black fw-semibold" style="font-size: 12px;">( Dispatch by: <span class="fw-semibold" style="font-size: 12px;">saturday, Mar 30, 24</span> )</p>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="w-25 py-1 fw-semibold text-white" style="background:var(--darkgreen); border:1px solid black;">Buy Now</button>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                        <div>
                                            <p class="m-0 text-black">Any Questions ? Please contact us at</p>
                                           <p class="m-0"><span class="text-black "><a href="" class="text-black fw-semibold" style="font-size: 12px;"><i class="fa-solid fa-headphones" style="font-size: 12px;"></i> +91 00000 00000</a></span> <span ><a href="" class="text-black fw-semibold" style="font-size: 12px;"><i class="fa-solid fa-phone" style="font-size:12px;"></i> +91 00000 00000</a></span></p> 
                                        </div>
                                        <div>
                                            <p class="m-0 text-black fw-semibold text-center" style="font-size:12px;">100% Certified by <br> International Standards</p>
                                        </div>
                                        <div>
                                           <img src="fgfh" alt="Hello" class="" style="width:80px height:80px;"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ................banner................... -->
      

{{-- .....................................................product Details...................................... --}}
        <div class="my-5 container">
            <div class="row text-center py-1" >
                <div class="col py-1" style="background:rgb(222, 221, 221);"><h5>Product Details</h5></div>
                <div class="col"></div>
            </div>
            <div class="d-flex w-100 p-2 m-0" style="background:rgb(222, 221, 221);">
                <div class="w-100 px-4" style="font-size:10px;">
                    <h6>Basic Information</h6>
                    <div class="d-flex justify-content-between gap-3 my-3">
                        <p class="m-0 text-black">Product Type</p>
                        <p class="m-0 text-black">Ring</p>
                    </div>
                    <div class="d-flex justify-content-between gap-3 my-3">
                        <p class="m-0 text-black">Product Type</p>
                        <p class="m-0 text-black">Ring</p>
                    </div>
                    <div class="d-flex justify-content-between gap-3 my-3">
                        <p class="m-0 text-black">Product Type</p>
                        <p class="m-0 text-black">Ring</p>
                    </div>
                    <div class="d-flex justify-content-between gap-3 my-3">
                        <p class="m-0 text-black">Product Type</p>
                        <p class="m-0text-black">Ring</p>
                    </div>
                </div>
                <div class="w-100 px-4">
                    <h6>Basic Information</h6>
                    <div class="d-flex justify-content-between gap-3 my-3">
                        <p class="m-0 text-black">Product Type</p>
                        <p class="m-0 text-black">Ring</p>
                    </div>
                    <div class="d-flex justify-content-between gap-3 my-3">
                        <p class="m-0 text-black">Product Type</p>
                        <p class="m-0text-black">Ring</p>
                    </div>
                    <div class="d-flex justify-content-between gap-3 my-3">
                        <p class="m-0 text-black">Product Type</p>
                        <p class="m-0 text-black">Ring</p>
                    </div>
                    <div class="d-flex justify-content-between gap-3 my-3">
                        <p class="m-0 text-black">Product Type</p>
                        <p class="m-0 text-black">Ring</p>
                    </div>
                </div>
                <div class="w-100 px-4">
                    <h6>Basic Information</h6>
                    <div class="d-flex justify-content-between gap-3 my-3">
                        <p class="m-0 text-black">Product Type</p>
                        <p class="m-0 text-black">Ring</p>
                    </div>
                    <div class="d-flex justify-content-between gap-3 my-3">
                        <p class="m-0 text-black">Product Type</p>
                        <p class="m-0 text-black">Ring</p>
                    </div>
                    <div class="d-flex justify-content-between gap-3 my-3">
                        <p class="m-0 text-black">Product Type</p>
                        <p class="m-0 text-black">Ring</p>
                    </div>
                    <div class="d-flex justify-content-between gap-3 my-3">
                        <p class="m-0 text-black">Product Type</p>
                        <p class="m-0 text-black">Ring</p>
                    </div>
                </div>
            </div>
        </div>
{{-- .....................................................product Details...................................... --}}
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
