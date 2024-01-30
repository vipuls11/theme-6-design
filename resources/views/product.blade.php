@extends('layout')
@section('content')

    <div class="banner">
        <img src="{{ asset('images/Earring Collections/banner.jpg') }}" alt="" class="w-100">
    </div>

    <div class="container my-2">
        <div>
          {{-- ...........................Home/Jewellery.................... --}}
            <div class="my-4">
                <span><a href="" class="text-dark" style="font-size: 12px;">Home</a></span> / <span><a href=""
                        class="text-dark" style="font-size: 12px;">Jewellery</a></span>
            </div>
             {{-- ...........................Home/Jewellery.................... --}}

             {{-- ...............Filter By............................ --}}
            <div>
              <div class="d-none d-lg-block d-md-block">
                
                <div class="row row-cols-2 row-cols-lg-6 g-2  align-items-center">
                  <div class="col" style="width: 80px;"><span><b>Filter By:</b></span></div>
                    <div class="col">
                        <div class="dropdown w-100">
                            <button class="btn dropdown-toggle py-1 w-100" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Price
                            </button>
                            <ul class="dropdown-menu w-100">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    1000-2000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    2000-3000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    2000-3000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="dropdown w-100">
                            <button class="btn dropdown-toggle py-1 w-100" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Product Type
                            </button>
                            <ul class="dropdown-menu w-100">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check ">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                                    id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    1000-2000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                                    id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    2000-3000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check ">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                                    id="flexRadioDefault6">
                                                <label class="form-check-label" for="flexRadioDefault6">
                                                    2000-3000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="dropdown w-100">
                            <button class="btn dropdown-toggle py-1 w-100" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Rating
                            </button>
                            <ul class="dropdown-menu w-25">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check ">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                                    id="flexRadioDefault7">
                                                <label class="form-check-label" for="flexRadioDefault7">
                                                    1000-2000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                                    id="flexRadioDefault8">
                                                <label class="form-check-label" for="flexRadioDefault8">
                                                    2000-3000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check ">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                                    id="flexRadioDefault9">
                                                <label class="form-check-label" for="flexRadioDefault9">
                                                    2000-3000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="dropdown w-100">
                            <button class="btn dropdown-toggle py-1 w-100" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Material Type
                            </button>
                            <ul class="dropdown-menu w-100">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check ">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                                    id="flexRadioDefault10">
                                                <label class="form-check-label" for="flexRadioDefault10">
                                                    1000-2000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                                    id="flexRadioDefault11">
                                                <label class="form-check-label" for="flexRadioDefault11">
                                                    2000-3000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check ">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                                    id="flexRadioDefault12">
                                                <label class="form-check-label" for="flexRadioDefault12">
                                                    2000-3000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="dropdown w-100">
                            <button class="btn dropdown-toggle py-1 w-100" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Shop For
                            </button>
                            <ul class="dropdown-menu w-100">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check ">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                                    id="flexRadioDefault13">
                                                <label class="form-check-label" for="flexRadioDefault13">
                                                    1000-2000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                                    id="flexRadioDefault14">
                                                <label class="form-check-label" for="flexRadioDefault14">
                                                    2000-3000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check ">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                                    id="flexRadioDefault15">
                                                <label class="form-check-label" for="flexRadioDefault15">
                                                    2000-3000
                                                </label>
                                            </div>
                                            <div>
                                                <span>405</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="">
                            <button class="btn py-2 px-4 navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                                aria-label="Toggle navigation">
                                {{-- <span class="navbar-toggler-icon"></span> --}}
                                More Filter
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                                aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> More Filter</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                              Accordion Item #1
                                            </button>
                                          </h2>
                                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                              Accordion Item #2
                                            </button>
                                          </h2>
                                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                              Accordion Item #3
                                            </button>
                                          </h2>
                                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
              </div>
                 {{-- ...............Filter By Mobile Responsive............................ --}}
            <div>
              <div class="d-block d-lg-none d-md-none text-center">
                <div class="row align-items-start ">
                  <div class="col  fw-bold">
                   <button  class="py-1 px-2 w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"> Filter By </button>
                  </div>
                  <div class="col dropdown  fw-bold">
                  <button class="px-2 py-1 dropdown-toggle w-100" type="button" data-bs-toggle="dropdown"> Sort By </button>
                  <ul class="dropdown-menu w-100">
                    <li><a class="dropdown-item" href="#">Low to High Price</a></li>
                    <li><a class="dropdown-item" href="#">High to Low Price</a></li>
                    <li><a class="dropdown-item" href="#">Best Price</a></li>
                    <li><a class="dropdown-item" href="#">Best Sales</a></li>
                    <li><a class="dropdown-item" href="#">Trending Products</a></li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>

              {{-- ..............................Responsive Filter modal........................ --}}
              <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title fw-bold" id="offcanvasExampleLabel">Filter By :</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Price
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="d-flex justify-content-between">
                              <div class="form-check ">
                                  <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                      id="flexRadioDefault4">
                                  <label class="form-check-label" for="flexRadioDefault4">
                                      1000-2000
                                  </label>
                              </div>
                              <div>
                                  <span>405</span>
                              </div>
                          </div>
                          <div class="d-flex justify-content-between">
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                    id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">
                                    1000-2000
                                </label>
                            </div>
                            <div>
                                <span>405</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                          <div class="form-check ">
                              <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                  id="flexRadioDefault4">
                              <label class="form-check-label" for="flexRadioDefault4">
                                  1000-2000
                              </label>
                          </div>
                          <div>
                              <span>405</span>
                          </div>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                1000-2000
                            </label>
                        </div>
                        <div>
                            <span>405</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                      <div class="form-check ">
                          <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                              id="flexRadioDefault4">
                          <label class="form-check-label" for="flexRadioDefault4">
                              1000-2000
                          </label>
                      </div>
                      <div>
                          <span>405</span>
                      </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                            id="flexRadioDefault4">
                        <label class="form-check-label" for="flexRadioDefault4">
                            1000-2000
                        </label>
                    </div>
                    <div>
                        <span>405</span>
                    </div>
                </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Product Type
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="d-flex justify-content-between">
                              <div class="form-check ">
                                  <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                      id="flexRadioDefault4">
                                  <label class="form-check-label" for="flexRadioDefault4">
                                      1000-2000
                                  </label>
                              </div>
                              <div>
                                  <span>405</span>
                              </div>
                          </div>
                          <div class="d-flex justify-content-between">
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                    id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">
                                    1000-2000
                                </label>
                            </div>
                            <div>
                                <span>405</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                          <div class="form-check ">
                              <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                  id="flexRadioDefault4">
                              <label class="form-check-label" for="flexRadioDefault4">
                                  1000-2000
                              </label>
                          </div>
                          <div>
                              <span>405</span>
                          </div>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                1000-2000
                            </label>
                        </div>
                        <div>
                            <span>405</span>
                        </div>
                    </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                           Rating
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="d-flex justify-content-between">
                              <div class="form-check ">
                                  <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                      id="flexRadioDefault4">
                                  <label class="form-check-label" for="flexRadioDefault4">
                                      1000-2000
                                  </label>
                              </div>
                              <div>
                                  <span>405</span>
                              </div>
                          </div>
                          <div class="d-flex justify-content-between">
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                    id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">
                                    1000-2000
                                </label>
                            </div>
                            <div>
                                <span>405</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                          <div class="form-check ">
                              <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                  id="flexRadioDefault4">
                              <label class="form-check-label" for="flexRadioDefault4">
                                  1000-2000
                              </label>
                          </div>
                          <div>
                              <span>405</span>
                          </div>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                1000-2000
                            </label>
                        </div>
                        <div>
                            <span>405</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                      <div class="form-check ">
                          <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                              id="flexRadioDefault4">
                          <label class="form-check-label" for="flexRadioDefault4">
                              1000-2000
                          </label>
                      </div>
                      <div>
                          <span>405</span>
                      </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                            id="flexRadioDefault4">
                        <label class="form-check-label" for="flexRadioDefault4">
                            1000-2000
                        </label>
                    </div>
                    <div>
                        <span>405</span>
                    </div>
                </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                </div>
              </div>
               {{-- ..............................Responsive Filter modal........................ --}}

            {{-- ...............Filter By Mobile Responsive............................ --}}

                <div class="my-2">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <span>Currently Shopping by :</span>
                        <div class="badge text-bg-warning alert-dismissible fade show" id="badge-close">Primary <button
                                type="button" data-bs-dismiss="alerts" class="badge-btn btn-close p-0"
                                onclick="myFunction()"></button></div>
                        <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>  
            {{-- ...............Filter By............................ --}} 
        </div>


        <div class="">
            <div class="overflow-hidden">
                <div class="row g-2">
                    <div class="col-lg-4 col-md-6">
                        <div class="p-3">
                            <div class="card" >
                                <a href="{{asset('single-product')}}"><img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border" alt="..."></a>
                                <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                 <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                                </div>
                                <div class="vedio_heart">
                                  <span class="vedio_button" style="margin-right: 10px;"><button type="button" class="vedio_btn btn-primary p-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button> </span>
                                  <span><i class="fa-regular fa-heart fs-4"></i></span>
                                </div>
                           
                                <div class="card_desc card-body">
                                  <div class="card-text d-flex justify-content-between align-items-center ">
                                    <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                        <div class="card-text" ><p class="card-text p-0" >4.9<span class="" style=""><i class="fa-solid fa-star text-warning"></i> </span> <span class="fs-6">(14)</span></p></div>
                                      </div>
                                      <div>
                                        <p class="" style="margin-bottom:0px;"><b class="card-text" style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                      </div>
                                      <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on Stones</p>
                                </div>
                              </div>
                            </div>
                        </div>
                   
                        <div class="col-lg-4 col-md-6">
                          <div class="p-3">
                              <div class="card" >
                                  <img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border" alt="...">
                                  <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                   <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                                  </div>
                                  <div class="vedio_heart">
                                    <span class="vedio_button" style="margin-right: 10px;"><button type="button" class="vedio_btn btn-primary p-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button> </span>
                                    <span><i class="fa-regular fa-heart fs-4"></i></span>
                                  </div>
                             
                                  <div class="card_desc card-body">
                                    <div class="card-text d-flex justify-content-between align-items-center ">
                                      <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                          <div class="card-text"><p class="card-text p-0">4.9<span class="" style=""><i class="fa-solid fa-star text-warning"></i> </span> <span class="fs-6">(14)</span></p></div>
                                        </div>
                                        <div>
                                          <p class="" style="margin-bottom:0px;"><b class="card-text " style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                        </div>
                                        <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on Stones</p>
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="col-lg-4 col-md-6">
                            <div class="p-3">
                                <div class="card" >
                                    <img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border" alt="...">
                                    <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                     <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                                    </div>
                                    <div class="vedio_heart">
                                      <span class="vedio_button" style="margin-right: 10px;"><button type="button" class="vedio_btn btn-primary p-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button> </span>
                                      <span><i class="fa-regular fa-heart fs-4"></i></span>
                                    </div>
                               
                                    <div class="card_desc card-body">
                                      <div class="card-text d-flex justify-content-between align-items-center ">
                                        <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                            <div class="card-text"><p class="card-text p-0">4.9<span class="" style=""><i class="fa-solid fa-star text-warning"></i> </span> <span class="fs-6">(14)</span></p></div>
                                          </div>
                                          <div>
                                            <p class="" style="margin-bottom:0px;"><b class="card-text " style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                          </div>
                                          <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on Stones</p>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                              <div class="p-3">
                                  <div class="card" >
                                      <img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border" alt="...">
                                      <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                       <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                                      </div>
                                      <div class="vedio_heart">
                                        <span class="vedio_button" style="margin-right: 10px;"><button type="button" class="vedio_btn btn-primary p-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-5"></i></button> </span>
                                        <span><i class="fa-regular fa-heart fs-4"></i></span>
                                      </div>
                                 
                                      <div class="card_desc card-body">
                                        <div class="card-text d-flex justify-content-between align-items-center ">
                                          <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                              <div class="card-text"><p class="card-text p-0">4.9<span class="" style=""><i class="fa-solid fa-star text-warning"></i> </span> <span class="fs-6">(14)</span></p></div>
                                            </div>
                                            <div class="">
                                              <p class="" style="margin-bottom:0px;"><b class="card-text" style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                            </div>
                                            <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on Stones</p>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                </div>
              </div>
            </div>
        </div>
    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("badge-close");

            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
@endsection



<!-- Modal vedio-->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="text-end">
        {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}} 
        <button type="button" class="btn_vedio_modal btn-close m-1" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class=" modal-body">
        <video width="450" height="240" controls>
          <source src="movie.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
      </div>

    </div>
  </div>
</div>

