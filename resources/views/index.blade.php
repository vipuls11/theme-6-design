 @extends('layout')
 @section('content')
 <style>
    .carousel{
        height:50%;
    }

    .carousel-control-prev {
        position: absolute;
        top: 100px;
        height:50px;
        width: 50px;
       
    }
    .carousel-control-next {
        position: absolute;
        top: 100px;
        height:50px;
        width: 50px;
    }

 </style>
     {{-- ......................................slider Banner Session......................................... --}}
     <div class="">
         <div id="carouselExampleIndicators" class="carousel slide">
             <div class="carousel-indicators">
                 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                     aria-current="true" aria-label="Slide 1"></button>
                 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                     aria-label="Slide 2"></button>
                 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                     aria-label="Slide 3"></button>
                 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                     aria-label="Slide 4"></button>
                 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                     aria-label="Slide 5"></button>
             </div>
             <div class="carousel-inner">
                 <div class="carousel-item active">
                     {{-- <img src="{{ asset('image/Add a heading/1.png') }}" alt="" class="w-100 h-50"> --}}
                     <img src="{{ asset('image/1.png') }}" alt="" class="w-100 h-50">
                     {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                 </div>
                 <div class="carousel-item">
                     <img src="{{ asset('image/2.png') }}" alt="" class="w-100">
                     {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                 </div>
                 <div class="carousel-item">
                     <img src="{{ asset('image/3.png') }}" alt="" class="w-100">
                     {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                 </div>
                 <div class="carousel-item">
                     <img src="{{ asset('image/4.png') }}" alt="" class="w-100">
                     {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                 </div>
                 <div class="carousel-item">
                     <img src="{{ asset('image/5.png') }}" alt="" class="w-100">
                     {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                 </div>
             </div>
             <button class="carousel-control-prev bg-primary" style="" type="button"
                 data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next bg-primary" type="button" data-bs-target="#carouselExampleIndicators"
                 data-bs-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
             </button>
         </div>
     </div>
     {{-- ......................................slider Banner Session......................................... --}}
     {{-- ......................................Banner Session......................................... --}}
     <style>
        .card-log{
            border: 2px solid var(--darkgreen);
        }
        .card-heading{
            border-top: 2px solid var(--darkgreen);
        }
     </style>
     <div class="">
         <div class="container overflow-hidden text-center my-3">
            <h2 class="fw-semibold m-0">Jewellery Which Suits On You and Yours dress To</h2>
            <p class="text-dark m-0">Trending On <span class="" style="color: var(--jewel-webnet);">Jewel Webnet</span></p>
             <div class="row g-lg-5 gy-2  pt-2">
                 <div class="col-lg-4 col-md-6">
                     <a href=""><div class="card-log">
                         <img src="{{ asset('image/matchwithdress/1.png') }}" alt="" class="w-100 p-2"
                             style="background-size: cover;">
                             <h5 class="card-heading m-0 fw-semibold py-1 " >Gold Neckless</h5>
                     </div></a>
                 </div>
                 <div class="col-lg-4 col-md-6">
                    <a href=""> <div class="card-log">
                        <img src="{{ asset('image/matchwithdress/2.png') }}" alt="" class="w-100 p-2"
                            style="background-size: cover;">
                            <h5 class="card-heading m-0 py-1 fw-semibold">Classy Earring</h5>
                    </div></a>
                </div>
                <div class="col-lg-4 col-md-6">
                   <a href=""><div class="card-log">
                        <img src="{{ asset('image/matchwithdress/3.png') }}" alt="" class="w-100 p-2"
                            style="background-size: cover;">
                            <h5 class="card-heading m-0 py-1 fw-semibold">Elegant Necklaces</h5>
                    </div></a> 
                </div>
                <div class="col-lg-4 col-md-6">
                   <a href=""> <div class="card-log">
                        <img src="{{ asset('image/matchwithdress/4.png') }}" alt="" class="w-100 p-2"
                            style="background-size: cover;">
                            <h5 class="card-heading m-0 py-1 fw-semibold">Traditional Necklaces</h5>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-md-6">
                   <a href=""> <div class="card-log">
                        <img src="{{ asset('image/matchwithdress/5.png') }}" alt="" class="w-100 p-2"
                            style="background-size: cover;">
                            <h5 class="card-heading m-0 py-1 fw-semibold">Ivy Gold Necklaces</h5>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-md-6">
                  <a href=""> <div class="card-log">
                     <img src="{{ asset('image/matchwithdress/6.png') }}" alt="" class="w-100 p-2"
                            style="background-size: cover;">
                            <h5 class="card-heading m-0 py-1 fw-semibold">Trending Collections</h5>
                    </div></a>
                </div>
              
             </div>
         </div>
     </div>
     {{-- ......................................Banner Session......................................... --}}
     {{-- ......................................Brand Spotligh......................................... --}}
     <style>
        .image-card-right img{
            border-radius: 0px 0px 50px 0px;
        }
        .image-card-left {
            border-radius: 0px 0px 0px 50px;
            overflow: hidden;
        }
        .carousel-inner{
            overflow: hidden; 
        }
     </style>
     <div class="container-fluid text-center">
         <h2 class="fw-semibold">Brand Spotlight</h2>
         <p class="text-dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi eius atque ab.</p>
         <div class="overflow-hidden text-center my-3">
             <div class="row">
                 <div class="image-card-right col-lg-6 col-md-12 g-0 float-end">
                     <div class="">
                        <div id="carouselExampleAutoplaying " class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner m-0">
                              <div class="carousel-item active ">
                                <img src="{{ asset('image/jpeg-optimizer_1.png') }}" class="d-block w-100 " alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{ asset('image/jpeg-optimizer_2.png') }}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{ asset('image/jpeg-optimizer_3.png') }}" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev bg-primary" style="margin-left:10px;" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next bg-primary" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                     </div>
                 </div>
            
                 <div class="image-card-left col-lg-6 col-md-12 row align-items-center" style="align-content: center; background:var(--darkgreen);">     
                            <div> 
                                <div class="">
                                <h4 class="m-0 text-white fs-1 fw-semibold">A Special</h4>
                                <h3 class="fs-1 fw-semibold">Gift For You</h3>
                                <p class="m-0 text-black fs-4 p-0">We live every second of our day.</p>
                                <p class="m-0 text-black fs-4 p-0">Why not make every moment special ?</p>
                            </div>
                        </div>
                 </div>
             </div>
         </div>
     </div>
     {{-- ......................................Brand Spotligh......................................... --}}
     {{-- ......................................image card slider Trending Collections......................................... --}}
     <div class="my-5">
         <h2 class="text-center fw-semibold">Trending Collections</h2>        
     <section class="mb-5">
        <div id="containers">
            <div id="slider-container">
              <button onclick="slideRight()" class="btn-slider"></button>
                <div id="slider">
                  <div class="slide-card">
                    {{-- <img src="{{asset('image/matchwithdress/1.png')}}" alt="" class="w-100"> --}}
                    <div class="card w-100">
                        <a href="{{asset('single-product')}}"><img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border w-100" alt="..."></a>
                        <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                         <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                        </div>
                        <div class="vedio_heart">
                          <span><i class="fa-regular fa-heart fs-4"></i></span>
                        </div>
                   
                        <div class="card_desc card-body">
                          <div class="card-text ">
                            <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>  
                            <div class="card-text" ><p class="card-text p-0" >
                                <span class="" style="">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                             </span> 
                             <span class="fs-6">(4.9)</span></p></div>
                              </div>
                              <div>
                                <p class="" style="margin-bottom:0px;"><b class="card-text" style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                              </div>
                        </div>
                      </div>
                </div>
                  <div class="slide-card">
                    {{-- <img src="{{asset('image/matchwithdress/2.png')}}" alt="" class="w-100"> --}}
                    <div class="card w-100">
                        <a href="{{asset('single-product')}}"><img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border w-100" alt="..."></a>
                        {{-- <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                         <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                        </div> --}}
                        <div class="vedio_heart">
                          <span><i class="fa-regular fa-heart fs-4"></i></span>
                        </div>
                   
                        <div class="card_desc card-body">
                          <div class="card-text ">
                            <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>  
                            <div class="card-text" ><p class="card-text p-0" >
                                <span class="" style="">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                             </span> 
                             <span class="fs-6">(4.9)</span></p></div>
                              </div>
                              <div>
                                <p class="" style="margin-bottom:0px;"><b class="card-text" style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                              </div>
                        </div>
                      </div>
                </div>
                  <div class="slide-card">
                    {{-- <img src="{{asset('image/matchwithdress/3.png')}}" alt="" class="w-100"> --}}
                    <div class="card w-100">
                        <a href="{{asset('single-product')}}"><img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border w-100" alt="..."></a>
                        {{-- <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                         <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                        </div> --}}
                        <div class="vedio_heart">
                          <span><i class="fa-regular fa-heart fs-4"></i></span>
                        </div>
                   
                        <div class="card_desc card-body">
                          <div class="card-text ">
                            <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>  
                            <div class="card-text" ><p class="card-text p-0" >
                                <span class="" style="">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                             </span> 
                             <span class="fs-6">(4.9)</span></p></div>
                              </div>
                              <div>
                                <p class="" style="margin-bottom:0px;"><b class="card-text" style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                              </div>
                        </div>
                      </div>
                    </div>
                  <div class="slide-card">
                    {{-- <img src="{{asset('image/matchwithdress/4.png')}}" alt="" class="w-100"> --}}
                    <div class="card w-100">
                        <a href="{{asset('single-product')}}"><img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border w-100" alt="..."></a>
                        <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                         <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                        </div>
                        <div class="vedio_heart">
                          <span><i class="fa-regular fa-heart fs-4"></i></span>
                        </div>
                   
                        <div class="card_desc card-body">
                          <div class="card-text ">
                            <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>  
                            <div class="card-text" ><p class="card-text p-0" >
                                <span class="" style="">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                             </span> 
                             <span class="fs-6">(4.9)</span></p></div>
                              </div>
                              <div>
                                <p class="" style="margin-bottom:0px;"><b class="card-text" style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                              </div>
                        </div>
                      </div>
                </div>
                  <div class="slide-card">
                    {{-- <img src="{{asset('image/matchwithdress/5.png')}}" alt="" class="w-100"> --}}
                    <div class="card w-100">
                        <a href="{{asset('single-product')}}"><img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border w-100" alt="..."></a>
                        {{-- <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                         <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                        </div> --}}
                        <div class="vedio_heart">
                          <span><i class="fa-regular fa-heart fs-4"></i></span>
                        </div>
                   
                        <div class="card_desc card-body">
                          <div class="card-text ">
                            <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>  
                            <div class="card-text" ><p class="card-text p-0" >
                                <span class="" style="">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                             </span> 
                             <span class="fs-6">(4.9)</span></p></div>
                              </div>
                              <div>
                                <p class="" style="margin-bottom:0px;"><b class="card-text" style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                              </div>
                        </div>
                      </div>
                </div>
                  <div class="slide-card">
                    {{-- <img src="{{asset('image/matchwithdress/1.png')}}" alt="" class="w-100"> --}}
                    <div class="card w-100">
                        <a href="{{asset('single-product')}}"><img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border w-100" alt="..."></a>
                        <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                         <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                        </div>
                        <div class="vedio_heart">
                          <span><i class="fa-regular fa-heart fs-4"></i></span>
                        </div>
                   
                        <div class="card_desc card-body">
                          <div class="card-text ">
                            <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>  
                            <div class="card-text" ><p class="card-text p-0" >
                                <span class="" style="">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                             </span> 
                             <span class="fs-6">(4.9)</span></p></div>
                              </div>
                              <div>
                                <p class="" style="margin-bottom:0px;"><b class="card-text" style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                              </div>
                        </div>
                      </div>
                    </div>
                  <div class="slide-card">
                    {{-- <img src="{{asset('image/matchwithdress/2.png')}}" alt="" class="w-100"> --}}
                    <div class="card w-100">
                        <a href="{{asset('single-product')}}"><img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border w-100" alt="..."></a>
                        <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                         <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                        </div>
                        <div class="vedio_heart">
                          <span><i class="fa-regular fa-heart fs-4"></i></span>
                        </div>
                   
                        <div class="card_desc card-body">
                          <div class="card-text ">
                            <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>  
                            <div class="card-text" ><p class="card-text p-0" >
                                <span class="" style="">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                             </span> 
                             <span class="fs-6">(4.9)</span></p></div>
                              </div>
                              <div>
                                <p class="" style="margin-bottom:0px;"><b class="card-text" style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                              </div>
                        </div>
                      </div>
                    </div>
                  <div class="slide-card">
                    {{-- <img src="{{asset('image/matchwithdress/3.png')}}" alt="" class="w-100"> --}}
                    <div class="card w-100">
                        <a href="{{asset('single-product')}}"><img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border w-100" alt="..."></a>
                        <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                         <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                        </div>
                        <div class="vedio_heart">
                          <span><i class="fa-regular fa-heart fs-4"></i></span>
                        </div>
                   
                        <div class="card_desc card-body">
                          <div class="card-text ">
                            <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>  
                            <div class="card-text" ><p class="card-text p-0" >
                                <span class="" style="">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                             </span> 
                             <span class="fs-6">(4.9)</span></p></div>
                              </div>
                              <div>
                                <p class="" style="margin-bottom:0px;"><b class="card-text" style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                              </div>
                        </div>
                      </div>
                </div>
                  <div class="slide-card">
                    {{-- <img src="{{asset('image/matchwithdress/4.png')}}" alt="" class="w-100"> --}}
                    <div class="card w-100">
                        <a href="{{asset('single-product')}}"><img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border w-100" alt="..."></a>
                        <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                         <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                        </div>
                        <div class="vedio_heart">
                          <span><i class="fa-regular fa-heart fs-4"></i></span>
                        </div>
                   
                        <div class="card_desc card-body">
                          <div class="card-text ">
                            <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>  
                            <div class="card-text" ><p class="card-text p-0" >
                                <span class="" style="">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                             </span> 
                             <span class="fs-6">(4.9)</span></p></div>
                              </div>
                              <div>
                                <p class="" style="margin-bottom:0px;"><b class="card-text" style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                              </div>
                        </div>
                      </div>
                </div>
                  <div class="slide-card">
                    {{-- <img src="{{asset('image/matchwithdress/5.png')}}" alt="" class="w-100"> --}}
                    <div class="card w-100">
                        <a href="{{asset('single-product')}}"><img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border w-100" alt="..."></a>
                        <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                         <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                        </div>
                        <div class="vedio_heart">
                          <span><i class="fa-regular fa-heart fs-4"></i></span>
                        </div>
                   
                        <div class="card_desc card-body">
                          <div class="card-text ">
                            <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>  
                            <div class="card-text" ><p class="card-text p-0" >
                                <span class="" style="">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                             </span> 
                             <span class="fs-6">(4.9)</span></p></div>
                              </div>
                              <div>
                                <p class="" style="margin-bottom:0px;"><b class="card-text" style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                              </div>
                        </div>
                      </div>
                </div>
              </div>
              <button onclick="slideLeft()" class="btn-slider"></button>
            </div>
          </div>
    </section>
     </div>
     {{-- ......................................Trending Collections......................................... --}}

     {{-- ......................................image card slider Trending Collections......................................... --}}
     {{-- ......................................Banner Session......................................... --}}
     <div class="container text-center my-5">
         <h2 class="fw-semibold">Designed For Everyday Moment</h2>
         {{-- <p class="text-dark m-0">Lorem ipsum dolor, sit amet consectetur.</p> --}}
         <div class="overflow-hidden text-center my-3">
             <div class="row g-lg-3 g-3">
                 <div class="col-lg-3 col-md-12">
                     <div class="">
                      <img src="{{ asset('images/Earring Collections/For Perfect Proposal.png') }}" alt="" class="w-100"
                      style="background-size: cover;">
                     </div>
                     <h5 class="py-2 fw-semibold">For Perfect Proposal</h5>
                 </div>
                 <div class="col-lg-3 col-md-12">
                     <div class="">
                      <img src="{{ asset('images/Earring Collections/Lil One.png') }}" alt="" class="w-100"
                      style="background-size: cover;">
                     </div>
                     <h5 class="py-2 fw-semibold">Lil One</h5>
                 </div>
                 <div class="col-lg-3 col-md-12">
                     <div class="">
                      <img src="{{ asset('images/Earring Collections/Anniversary Surprise.png') }}" alt="" class="w-100"
                      style="background-size: cover;">
                     </div>
                     <h5 class="py-2 fw-semibold">Anniversary Surprise</h5>
                 </div>
                 <div class="col-lg-3 col-md-12">
                     <div class="">
                         <img src="{{ asset('images/Earring Collections/Treating Myself.png') }}" alt="" class="w-100"
                             style="background-size: cover;">
                     </div>
                     <h5 class="py-2 fw-semibold">Treating Myself</h5>
                 </div>               
             </div>
         </div>
     </div>
     {{-- ......................................Banner Session......................................... --}}

     <script></script>
 @endsection
