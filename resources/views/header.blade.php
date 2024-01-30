
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog search-dialog">
        <div class="modal-content">
            <div class="modal-body py-4">
                <div class="d-flex justify-content-center    ">
                    <div class="col-lg-5 ">
                        <div class="d-flex align-items-center">
                            <div class="col-10 position-relative">
                                <form action="" method="GET">
                                    <input type="text" name="search" placeholder="Search.." class="w-100 px-2"
                                        style="padding:3px 40px 3px 5px;" required>
                                    <div class="position-absolute" style="top:6px; right:4px;">
                                        <button class="border-0 bg-transparent px-1"><i class="fas fa-search"
                                                style="font-size: 20px;"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="px-3 col-2"><button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d_header" style=" position:fixed; top: 0; z-index:500; width:100%;">
    <div class="d-none d-lg-block" style="width:90%;margin:auto;">
        <div class="row d-flex   align-items-center">
            <div class="col-2 d-flex  align-items-center ">
                <a href="{{ asset('/') }}">
                    <img src="{{ asset('images/New Jewelry.png') }}" alt="" style="width: 70px;" title="Website Logo">
                </a>
            </div>
            <div class="col-7">
                <nav class="navbar navbar-expand-lg "style="padding:0px;">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav ">
                                @php
                                    $categories = ['Ring', 'Earring','Diamond','Braclets'];
                                @endphp
                                @foreach ($categories as $category)
                                    <li class="nav-item dropdown has-megamenu">
                                        <a class=" nav-link menu_color  text-uppercase" href="">
                                            {{ $category }} <span style="font-size: 12px;"> <i
                                                    class="fa-solid fa-angle-down"></i></span>
                                        </a>
                                        <div class="dropdown-menu megamenu" role="menu">
                                            <div class="row g-3 ">
                                                {{-- @foreach ($category->categoryType as $ctype) --}}
                                                <div class="col-lg-6 col-12">
                                                    <div class="col-megamenu">
                                                        <a href="{{asset('product')}}">
                                                            <h6 class="title">Ring</h6>
                                                        </a>
                                                        <div class="d-flex w-100 justify-content-between">
                                                        <ul class="list-unstyled">
                                                            {{-- @foreach ($ctype->subCategory as $item) --}}
                                                            <li class="heading_li">Ring Dimond</li>
                                                            <li><a href="" class="text-capitalize">sub1
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub2
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub3
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub4
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub5
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub6
                                                                </a>
                                                            </li>
                                                            {{-- @endforeach --}}

                                                        </ul>
                                                        <ul class="list-unstyled">
                                                            {{-- @foreach ($ctype->subCategory as $item) --}}
                                                            <li class="heading_li">Ring stone</li>
                                                            <li><a href="" class="text-capitalize">sub7
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub8
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub9
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub10
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub11
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub12
                                                                </a>
                                                            </li>
                                                            {{-- @endforeach --}}

                                                        </ul>
                                                        <ul class="list-unstyled">
                                                            <li class="heading_li">Ring Gemstone</li>
                                                            {{-- @foreach ($ctype->subCategory as $item) --}}
                                                            <li><a href="" class="text-capitalize">sub13
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub14
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub15
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub16
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub17
                                                                </a>
                                                            </li>
                                                            <li><a href="" class="text-capitalize">sub18
                                                                </a>
                                                            </li>
                                                            {{-- @endforeach --}}

                                                        </ul>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="col-megamenu">
                                                        <h6 class="heading_li mb-2">We prodive your best desig to you.</h6>
                                                        <img src="{{ asset('images/home/2.jpg') }}" alt="helloo" class="w-100 img-thumbnail figure-img img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div> <!-- navbar-collapse.// -->
                    </div> <!-- container-fluid.// -->
                </nav>
            </div>

            <div class="col-2">
                <div class="d-flex justify-content-between   align-items-center">
                    <div></div>
                    <div></div>
                    <div class=" right_menus" style="padding: 4px;">
                        <div title="Search" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <svg class="right_menu_color" xmlns="http://www.w3.org/2000/svg" width="21"
                                height="21" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </div>
                    </div>

                    <div class="position-relative right_menus"><a href="{{ asset('wishlist') }}" title="Wishlist">

                            <i class="fa-solid fa-heart  right_menu_color" style="font-size:23px;  margin-top: 3px"></i>

                            <span class="count_color"
                                style="font-size: 10px;  position:absolute; top:9px; left:50%;transform:translate(-50%)">
                                0
                            </span>
                        </a>

                    </div>
                    <div class=" position-relative right_menus"> <a href="{{ asset('cart') }}" title="Cart">
                            <i class="fa-solid fa-cart-shopping right_menu_color"
                                style="font-size:23px;  margin-top: 3px"></i>

                            {{--                               
                                        @auth
                                        @php
                                        $carts = App\Cart::where('user_id', Auth::user()->id)->get();
                                        @endphp
                                        <span>
                                            ({{count($carts)}})
                                        </span>
                                        @endauth
                                        @guest --}}
                            <span class="count_color"
                                style="font-size: 10px; position:absolute; top:6px; left:50%;transform:translate(-50%)">
                                1
                            </span>
                            {{-- @endguest --}}

                            </i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-1 " style="border-left: 1px solid gray;">
                @guest
                    <div class="d-flex  align-items-center ">
                        <div>
                            <a class="right_menu_color" href="" style="font-size: 12px;">LOGIN</a><br>
                            <a class="right_menu_color" href="" style="font-size: 12px;">SIGN UP</a>
                        </div>
                    </div>
                @endguest

                {{-- @auth
                    <div class="d-flex  align-items-center ">
                        <div>
                            <form action="{{ route('logout') }}" method="post">
                                <div class="d-flex justify-content-between">
                                    @csrf
                                    <button class="right_menu_color border-0 bg-transparent"
                                        style="font-size: 11px;">LOGOUT</button>
                                </div>
                            </form>
                            <a href="{{ route('profile') }}"> <span class=" border-0 right_menu_color"
                                    style="font-size: 11px;">MY
                                    ACCOUNT</span></a>
                        </div>
                    </div>
                @endauth --}}
            </div>
        </div>

    </div>
    <div class="d-block d-lg-none">
        <div class=" d-flex justify-content-between align-items-center ">
            <div class="text-white px-2"><a href="{{ asset('/') }}">
                    <img src="images/New Jewelry.png" alt="" style="width: 40px;">
                </a></div>
            <div>
                <div class="d-flex justify-content-between   align-items-center">
                    <div class="account_menus">
                        <div title="Account">
                            <svg class="right_menu_color" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                            </svg>
                        </div>
                        <div class="acount_btn p-3 ">
                            <h6>Your Account</h6>
                            <div class="d-flex justify-content-between">
                                <a href=""> <button class="px-3 py-1  border-0"
                                        style="background-color: #071d49; color:#fff;">Sign Up</button></a>
                                <a href=""><button class="px-3 py-1 "
                                        style="border:1px solid #071d49;">Login</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative right_menus"><a href="" title="Wishlist">
                            <svg class="right_menu_color" xmlns="http://www.w3.org/2000/svg" width="22"
                                height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg>

                            <span class="right_menu_color"
                                style="font-size: 10px;  position:absolute; top:9px; left:50%;transform:translate(-50%)">
                                0
                            </span>
                        </a>

                    </div>
                    <div class=" position-relative right_menus"> <a href="" title="Cart">
                            <svg class="right_menu_color" xmlns="http://www.w3.org/2000/svg" width="22"
                                height="22" fill="currentColor" class="bi bi-handbag" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2zm3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6h4z" />
                            </svg>

                            {{--                               
                                        @auth
                                        @php
                                        $carts = App\Cart::where('user_id', Auth::user()->id)->get();
                                        @endphp
                                        <span>
                                            ({{count($carts)}})
                                        </span>
                                        @endauth
                                        @guest --}}
                            <span class="right_menu_color"
                                style="font-size: 10px; position:absolute; top:14px; left:50%;transform:translate(-50%)">
                                0
                            </span>
                            {{-- @endguest --}}

                            </i>
                        </a>
                    </div>
                    <div class=" right_menus" title="Search" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"style="padding:5px;">
                        <svg class="right_menu_color " xmlns="http://www.w3.org/2000/svg" width="22"
                            height="22" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </div>

                    <div class="mobile_menu_btn px-2">
                        <div style="width: 34px; margin:auto;">
                            <i class="hamber fas fa-bars p-2"
                                style="font-size:24px; color:#fff; cursor: pointer;"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile_menu_view position-absolute left-0 w-100 bg-white p-2 shadow"
                style="display: none; top:40px;">
                <ul style="padding-left: 0rem">
                    <li class="mb-2 ">
                        <div class="d-flex justify-content-between align-items-center px-2">
                            <div><a href="">RINGS</a></div>
                            <div class="submenu_btn" style="cursor: pointer;"><i class="accordian fas fa-plus"></i>
                            </div>
                        </div>
                        <div class="submenu_view p-2" style="display: none;">
                            <ul style="padding-left: 2rem">
                                <li class="mb-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><a href="">Shop by</a></div>
                                        <div class="subcat_submenu_btn" style="cursor: pointer;"><i
                                                class="accordian_subcat fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <div class="subcat_submenu_view p-2" style="display: none;">
                                        <ul style="padding-left: 2rem">
                                            <li class="mb-2"><a href="">Couple Bands</a></li>
                                            <li class="mb-2"><a href="">Office Wear</a></li>
                                    </div>
                                </li>
                                <li class="mb-2"><a href="">Shop by Style</a></li>
                                <li class="mb-2"><a href="">Shop by Metal</a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="mb-2 px-2"><a href="">EARRINGS</a></li>
                    <li class="mb-2 px-2"><a href="">PENDANTS</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>

<script>

</script>
