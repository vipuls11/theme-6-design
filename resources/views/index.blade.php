 @extends('layout')
 @section('content')
     {{-- ......................................slider Banner Session......................................... --}}
     <div>
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
                     <img src="{{ asset('images/home/1.jpg') }}" alt="" class="w-100">
                     {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                 </div>
                 <div class="carousel-item">
                     <img src="{{ asset('images/home/2.jpg') }}" alt="" class="w-100">
                     {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                 </div>
                 <div class="carousel-item">
                     <img src="{{ asset('images/home/3.jpg') }}" alt="" class="w-100">
                     {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                 </div>
                 <div class="carousel-item">
                     <img src="{{ asset('images/home/4.jpg') }}" alt="" class="w-100">
                     {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                 </div>
                 <div class="carousel-item">
                     <img src="{{ asset('images/home/5.jpg') }}" alt="" class="w-100">
                     {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                 </div>
             </div>
             <button class="carousel-control-prev bg-danger" style="" type="button"
                 data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next bg-danger" type="button" data-bs-target="#carouselExampleIndicators"
                 data-bs-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
             </button>
         </div>
     </div>
     {{-- ......................................slider Banner Session......................................... --}}
     {{-- ......................................Banner Session......................................... --}}
     <div class="">
         <div class="container-fluid overflow-hidden text-center my-5">
             <div class="row gy-lg-5 gy-2">
                 <div class="col-lg-6 col-md-12">
                     <div class="">
                         <img src="{{ asset('images/home/tending.jpg') }}" alt="" class="w-100"
                             style="background-size: cover;">
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-12">
                     <div class="row gy-lg-2 gy-2">
                         <div class="col-12 ">
                             <div class=""><img src="{{ asset('images/home/1_Shop_Gemstones-Wide.jpg') }}"
                                     alt="" class="w-100 object-fit-cover"></div>
                         </div>
                         <div class="col-12 object-fit-cover">
                             <div class=""><img src="{{ asset('images/home/1_Shop_Gemstones-Wide.jpg') }}"
                                     alt="" class="w-100 object-fit-cover"></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     {{-- ......................................Banner Session......................................... --}}
     {{-- ......................................Brand Spotligh......................................... --}}
     <div class="container-fluid text-center">
         <h2>Brand Spotlight</h2>
         <p class="text-dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi eius atque ab.</p>
         <div class="overflow-hidden text-center my-3">
             <div class="row gy-lg-5 gy-2">
                 <div class="col-lg-5 col-md-12">
                     <div class="">
                         <img src="{{ asset('images/home/tending.jpg') }}" alt="" class="w-100"
                             style="background-size: cover;">
                     </div>
                 </div>
                 <div class="col-lg-2 col-md-12">
                     <div class="row gy-lg-2 gy-2">
                         <div class="col-12 ">
                             <div class=""><img src="{{ asset('images/home/1_Shop_Gemstones-Wide.jpg') }}"
                                     alt="" class="w-100 object-fit-cover"></div>
                         </div>
                         <div class="col-12 object-fit-cover">
                             <div class=""><img src="{{ asset('images/home/1_Shop_Gemstones-Wide.jpg') }}"
                                     alt="" class="w-100 object-fit-cover"></div>
                         </div>
                         <div class="col-12 object-fit-cover">
                             <div class=""><img src="{{ asset('images/home/1_Shop_Gemstones-Wide.jpg') }}"
                                     alt="" class="w-100 object-fit-cover"></div>
                         </div>
                         <div class="col-12 object-fit-cover">
                             <div class=""><img src="{{ asset('images/home/1_Shop_Gemstones-Wide.jpg') }}"
                                     alt="" class="w-100 object-fit-cover"></div>
                         </div>
                         <div class="col-12 object-fit-cover">
                             <div class=""><img src="{{ asset('images/home/1_Shop_Gemstones-Wide.jpg') }}"
                                     alt="" class="w-100 object-fit-cover"></div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-5 col-md-12">
                     <div class="row gy-lg-2">
                         <div class="col-12 ">
                             <div class=""><img src="{{ asset('images/home/1_Shop_Gemstones-Wide.jpg') }}"
                                     alt="" class="w-100 object-fit-cover"></div>
                         </div>
                         <div class="col-12">
                             <div class=""><img src="{{ asset('images/home/1_Shop_Gemstones-Wide.jpg') }}"
                                     alt="" class="w-100 object-fit-cover"></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     {{-- ......................................Brand Spotligh......................................... --}}
     {{-- ......................................image card slider Trending Collections......................................... --}}
     <div class="my-5">
         <h2 class="text-center ">Trending Collections</h2>
         <div id="myCarousel" class="carousel slide container-fluid" data-bs-ride="carousel">
             <div class="carousel-inner w-100">
                 <div class="carousel-item active">
                     <div class="col-md-3">
                         <a href="#">
                             <div class="card ">
                                 <img class="w-100" src="{{ asset('images/Earring Collections/earring.jpg') }}">

                             </div>
                         </a>

                     </div>
                 </div>
                 <div class="carousel-item">
                     <div class="col-md-3">
                         <a href="#">
                             <div class="card">
                                 <img class="w-100" src="{{ asset('images/Earring Collections/neckless.jpg') }}">

                             </div>
                         </a>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <div class="col-md-3">
                         <a href="#">
                             <div class="card">
                                 <img class="w-100" src="{{ asset('images/Earring Collections/neckless1.jpg') }}">

                             </div>
                         </a>

                     </div>
                 </div></a>
                 <div class="carousel-item">
                     <div class="col-md-3">
                         <a href="#">
                             <div class="card">
                                 <img class="w-100" src="{{ asset('images/Earring Collections/ring.jpg') }}">

                             </div>
                         </a>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <div class="col-md-3">
                         <a href="">
                             <div class="card">
                                 <img class="w-100" src="{{ asset('images/Earring Collections/rings.jpg') }}">

                             </div>
                         </a>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <div class="col-md-3">
                         <a href="#">
                             <div class="card">
                                 <img class="w-100" src="{{ asset('images/Earring Collections/neckless1.jpg') }}">

                             </div>
                         </a>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <div class="col-md-3">
                         <a href="#">
                             <div class="card">
                                 <img class="w-100" src="{{ asset('images/Earring Collections/neckless.jpg') }}">

                             </div>
                         </a>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <div class="col-md-3">
                         <a href="#">
                             <div class="card">
                                 <img class="w-100" src="{{ asset('images/Earring Collections/neckless2.jpg') }}">

                             </div>
                         </a>
                     </div>
                 </div>
             </div>
             <button class="carousel-control-prev bg-danger" type="button" data-bs-target="#myCarousel"
                 data-bs-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next bg-danger" type="button" data-bs-target="#myCarousel"
                 data-bs-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
             </button>
         </div>
     </div>
     {{-- ......................................Trending Collections......................................... --}}

     {{-- ............................................Subcribe Button.................... --}}
     <div class="sub_background my-3 py-4 ">
         {{-- <img class="w-100" src="" > --}}
         <div class="container">
             <div class="row  justify-content-center">
                 <div class="col-lg-8">
                     <div class="row d-flex align-items-center py-2">
                         <div class="col-lg-6 text-center">
                             <h6 class="" style="padding: 0px;">BE A PART OF BEST THEME 5 FAMILY</h6>
                             <p class="" style="padding: 0px;">keep yourself updated with the style tips & more</p>
                         </div>
                         <div class="col-lg-6 ">
                             <div class="Subcribe_input">
                                 <input type="text" placeholder="Enter Email" name="" class="w-100 p-1"
                                     id="">
                                 <button class="button_subcribe">SUBCRIBE</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     {{-- ......................................image card slider Trending Collections......................................... --}}
     {{-- ......................................Banner Session......................................... --}}
     <div class="container text-center my-5">
         <h2>A Special Gift</h2>
         <p class="text-dark">Lorem ipsum dolor, sit amet consectetur.</p>
         <div class="overflow-hidden text-center my-3">
             <div class="row g-lg-3 g-3">
                 <div class="col-lg-4 col-md-12">
                     <div class="">
                      <img src="{{ asset('images/Earring Collections/For Perfect Proposal.png') }}" alt="" class="w-100"
                      style="background-size: cover;">
                     </div>
                     <h6 class="py-2">For Perfect Proposal</h6>
                 </div>
                 <div class="col-lg-4 col-md-12">
                     <div class="">
                      <img src="{{ asset('images/Earring Collections/Lil One.png') }}" alt="" class="w-100"
                      style="background-size: cover;">
                     </div>
                     <h6 class="py-2">Lil One</h6>
                 </div>
                 <div class="col-lg-4 col-md-12">
                     <div class="">
                      <img src="{{ asset('images/Earring Collections/Anniversary Surprise.png') }}" alt="" class="w-100"
                      style="background-size: cover;">
                     </div>
                     <h6 class="py-2">Anniversary Surprise</h6>
                 </div>
                 <div class="col-lg-4 col-md-12">
                     <div class="">
                         <img src="{{ asset('images/Earring Collections/Treating Myself.png') }}" alt="" class="w-100"
                             style="background-size: cover;">
                     </div>
                     <h6 class="py-2">Treating Myself</h6>
                 </div>
                 <div class="col-lg-4 col-md-12">
                     <div class="">
                      <img src="{{ asset('images/Earring Collections/Presents For Parents.png') }}" alt="" class="w-100"
                      style="background-size: cover;">
                     </div>
                     <h6 class="py-2">Presents For Parents</h6>
                 </div>
                 <div class="col-lg-4 col-md-12">
                     <div class="">
                      <img src="{{ asset('images/Earring Collections/Birthday Bling.png') }}" alt="" class="w-100"
                      style="background-size: cover;">
                     </div>
                     <h6 class="py-2">Birthday Bling</h6>
                 </div>
                 
             </div>
         </div>
     </div>
     {{-- ......................................Banner Session......................................... --}}

     <script></script>
 @endsection
