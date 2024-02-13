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

                    <div class="d-flex gap-2  align-items-center">
                        <div class="" style=""><span><b>Filter By:</b></span></div>
                        @for ($i = 0; $i < 4; $i++)
                            <div class="">

                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-1 rounded-3" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Price
                                    </button>
                                    <ul class="dropdown-menu w-100">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex justify-content-between">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="flexcheckboxDefault" id="flexcheckboxDefault1">
                                                        <label class="form-check-label" for="flexcheckboxDefault1">
                                                            1000-2000
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <span class="border px-1 rounded-3"
                                                            style="font-size: 12px;">405</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex justify-content-between">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="flexcheckboxDefault" id="flexcheckboxDefault2">
                                                        <label class="form-check-label" for="flexcheckboxDefault2">
                                                            2000-3000
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <span class="" style="font-size: 12px;">405</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex justify-content-between">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault3">
                                                        <label class="form-check-label" for="flexRadioDefault3">
                                                            2000-3000
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <span class="" style="font-size: 12px;">405</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endfor
                        <div class="">
                            <div class="dropdown ">
                                <button class="btn dropdown-toggle py-1 rounded-3" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Product Type
                                </button>
                                <ul class="dropdown-menu">
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
                                                    <span class="" style="font-size: 12px;">405</span>
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
                                                    <span class="" style="font-size: 12px;">405</span>
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
                                                    <span class="" style="font-size: 12px;">405</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle py-1 rounded-3" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Rating
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault7">
                                                    <label class="form-check-label" for="flexRadioDefault7">
                                                        1000-2000
                                                    </label>
                                                </div>
                                                <div>
                                                    <span class="" style="font-size: 12px;">405</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault8">
                                                    <label class="form-check-label" for="flexRadioDefault8">
                                                        2000-3000
                                                    </label>
                                                </div>
                                                <div>
                                                    <span class="" style="font-size: 12px;">405</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault9">
                                                    <label class="form-check-label" for="flexRadioDefault9">
                                                        2000-3000
                                                    </label>
                                                </div>
                                                <div>
                                                    <span class="" style="font-size: 12px;">405</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle py-1 rounded-3" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Material Type
                                </button>
                                <ul class="dropdown-menu ">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault10">
                                                    <label class="form-check-label" for="flexRadioDefault10">
                                                        1000-2000
                                                    </label>
                                                </div>
                                                <div>
                                                    <span class="" style="font-size: 12px;">405</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault11">
                                                    <label class="form-check-label" for="flexRadioDefault11">
                                                        2000-3000
                                                    </label>
                                                </div>
                                                <div>
                                                    <span class="" style="font-size: 12px;">405</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault12">
                                                    <label class="form-check-label" for="flexRadioDefault12">
                                                        2000-3000
                                                    </label>
                                                </div>
                                                <div>
                                                    <span class="" style="font-size: 12px;">405</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle py-1 rounded-3" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Shop For
                                </button>
                                <ul class="dropdown-menu w-100">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault13">
                                                    <label class="form-check-label" for="flexRadioDefault13">
                                                        Ring
                                                    </label>
                                                </div>
                                                <div>
                                                    <span class="" style="font-size: 12px;">405</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault14">
                                                    <label class="form-check-label" for="flexRadioDefault14">
                                                        2000-3000
                                                    </label>
                                                </div>
                                                <div>
                                                    <span class="" style="font-size: 12px;">405</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexcheckboxDefault" id="flexcheckboxDefault15">
                                                    <label class="form-check-label" for="flexcheckboxDefault15">
                                                        2000-3000
                                                    </label>
                                                </div>
                                                <div>
                                                    <span class="" style="font-size: 12px;">405</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center py-4 border-bottom">
                        <div>
                            <p class="text-black m-0 fw-semibold fs-4">GOLD JEWELLERY <span class=""
                                    style="font-weight: 400; font-size:12px;">(25 items out of 1684 items)</span></p>
                        </div>
                        <div>
                            <select name="" id="" class="py-2 px-4 rounded-3"  style="background:var(--darkgreen);">
                                <option value="">Sort By </option>
                                <option value="">High To Low</option>
                                <option value="">Low To High</option>
                                <option value="">1000 To 1500</option>
                                <option value="">1500 To 2000</option>
                                <option value="">2000 To 2500</option>
                                <option value="">2500 To 3000</option>
                                <option value="">3500 To 4000</option>
                            </select>
                        </div>
                    </div>
                </div>
                {{-- ...............Filter By Mobile Responsive............................ --}}
                <div>
                    <div class="d-block d-lg-none d-md-none text-center fixed-bottom">
                        <div class="row g-0 align-items-start m-0" style="background:var(--darkgreen);">
                            <div class="col-6 fw-bold">
                                <button class="py-2 w-100 fw-bold border-2 border-white text-white" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" style="background:transparent;"><span><i class="fa-solid fa-filter"></i></span> Filter By
                                </button>
                            </div>
                            <div class="col-6  fw-bold">
                                <button class="w-100 py-2 border-2 border-white" style="background:var(--darkgreen);">
                                <select name="" id="" class="px-4 w-100 fw-bold rounded-0 border-0 text-white" style="background:var(--darkgreen); outline:none;">
                                    <option value="">Sort By </option>
                                    <option value="">High To Low</option>
                                    <option value="">Low To High</option>
                                    <option value="">1000 To 1500</option>
                                    <option value="">1500 To 2000</option>
                                    <option value="">2000 To 2500</option>
                                    <option value="">2500 To 3000</option>
                                    <option value="">3500 To 4000</option>
                                </select>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ..............................Responsive Filter modal........................ --}}
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title fw-bold" id="offcanvasExampleLabel">Filter By :</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Price
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Product Type
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Rating
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                                                    <input class="form-check-input" type="checkbox"
                                                        name="flexRadioDefault" id="flexRadioDefault4">
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
                        <div class="badge text-bg-warning alert-dismissible fade show" id="badgeclose">Primary<button
                                type="button" data-bs-dismiss="alerts" class="badge-btn btn-close p-0"
                                onclick="myFunction()"></button></div>
                        <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            {{-- ...............Filter By............................ --}}
            <script>
                function myFunction() {
                    var x = document.document.getElementsById("badgeclose");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }
                console.log(myFunction());
            </script>
        </div>


        <div class="">
            <div class="">
                <div class="row g-2">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="col-lg-3 col-md-6">
                            <div class="p-1">
                                <div class="card w-100">
                                    <a href="{{ asset('single-product') }}"><img
                                            src="{{ asset('images/home/Emerald.jpg') }}" class="card-img-top border w-100"
                                            alt="..."></a>
                                    <div class="fast_shipping w-50 text-center p-2"
                                        style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                        <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                                    </div>
                                    <div class="vedio_heart">
                                        <span><i class="fa-regular fa-heart fs-4"></i></span>
                                    </div>

                                    <div class="card_desc card-body">
                                        <div class="card-text ">
                                            <h6 class="pb-0" style="margin:0px;">Each Diamond Earrings.</h6>
                                            <div class="card-text">
                                                <p class="card-text p-0">
                                                    <span class="" style="">
                                                        <i class="fa-solid fa-star text-warning"></i>
                                                        <i class="fa-solid fa-star text-warning"></i>
                                                        <i class="fa-solid fa-star text-warning"></i>
                                                        <i class="fa-solid fa-star text-warning"></i>
                                                        <i class="fa-solid fa-star text-warning"></i>
                                                    </span>
                                                    <span class="fs-6">(4.9)</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="" style="margin-bottom:0px;"><b class="card-text"
                                                    style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del
                                                    class="card-discount" style="font-size:12px;">&#8377;52,699</del></p>
                                        </div>
                                        <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF
                                            on Stones</p>
                                        <div>
                                            <button type="button"
                                                class="vedio_btn btn-primary px-3 py-1 fw-semibold w-100 mb-2"
                                                style="background:var(--darkgreen); color:var(--white)"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal1">Quick View</button>
                                            <button type="button"
                                                class="vedio_btn btn-primary px-3 py-1 fw-semibold w-100"
                                                style="background:var(--darkgreen); color:var(--white)">Add to
                                                Card</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor

                    {{-- <div class="col-lg-3 col-md-6">
                            <div class="p-1">
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
                                          <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on Stones</p>
                                          <div>
                                          <button type="button" class="vedio_btn btn-primary px-3 py-1 fw-semibold w-100 mb-2" style="background:var(--darkgreen); color:var(--white)" data-bs-toggle="modal" data-bs-target="#exampleModal1">Quick View</button>
                                          <button type="button" class="vedio_btn btn-primary px-3 py-1 fw-semibold w-100" style="background:var(--darkgreen); color:var(--white)" >Add to Card</button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div> --}}

                    {{-- <div class="col-lg-3 col-md-6">
                                <div class="p-1">
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
                                              <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on Stones</p>
                                              <div>
                                              <button type="button" class="vedio_btn btn-primary px-3 py-1 fw-semibold w-100 mb-2" style="background:var(--darkgreen); color:var(--white)" data-bs-toggle="modal" data-bs-target="#exampleModal1">Quick View</button>
                                              <button type="button" class="vedio_btn btn-primary px-3 py-1 fw-semibold w-100" style="background:var(--darkgreen); color:var(--white)" >Add to Card</button>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div> --}}

                    {{-- <div class="col-lg-3 col-md-6">
                                    <div class="p-1">
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
                                                  <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on Stones</p>
                                                  <div>
                                                  <button type="button" class="vedio_btn btn-primary px-3 py-1 fw-semibold w-100 mb-2" style="background:var(--darkgreen); color:var(--white)" data-bs-toggle="modal" data-bs-target="#exampleModal1">Quick View</button>
                                                  <button type="button" class="vedio_btn btn-primary px-3 py-1 fw-semibold w-100" style="background:var(--darkgreen); color:var(--white)" >Add to Card</button>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div> --}}
                </div>
            </div>
        </div>
    </div>






    <!-- Modal vedio-->
    <div class="modal fade " id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="text-end">
                    {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}}
                    <button type="button" class="btn_vedio_modal btn-close m-1" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="d-flex gap-2">
                                <div>
                                    <img src="{{ asset('images/home/Emerald.jpg') }}" class="card-img-top border"
                                        alt="..." class="" style="width:100px;">
                                </div>
                                <div>
                                    <img src="{{ asset('images/home/Emerald.jpg') }}" class="card-img-top border"
                                        alt="..." class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="card_desc card-body">
                                <div class="card-text  ">
                                    <h6 class="pb-0 fs-1" style="margin:0px;">Each Diamond Earrings.</h6>
                                    <div class="card-text">
                                        <p class="card-text p-0">
                                            <span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i></span>
                                            <span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i></span>
                                            <span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i></span>
                                            <span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i></span>
                                            <span class="" style=""><i
                                                    class="fa-solid fa-star text-warning"></i></span>
                                            <span class="fs-6">(4.9)</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="text-center px-4 py-1 bg-danger rounded-3 border border-2 mb-2"
                                    style="width:140px;">
                                    <h6 class="text-white mb-0 fw-semibold" style="font-size:14px; ">Fast Shipping</h6>
                                </div>
                                <p class="m-0 text-black ">AEGTE LIFESCIENCE</p>
                                <div class="">
                                    <p class="text-black fs-1" style="margin-bottom:0px;">Price: <b
                                            class="card-text fs-1"
                                            style="margin-right:5px; margin-bottom:0px;">&#8377;47,148</b> <del
                                            class="card-discount fs-4" style="font-size:12px;">&#8377;52,699</del></p>
                                </div>
                                <p class="card-discount" style="margin:0px; padding:0px; font-size:12px;">20% OFF on
                                    Stones</p>
                                <div>
                                    <h3 class="text-black fw-semibold">Product Specifications</h3>
                                    <ul class="" style="list-style-type: circle;">
                                        <li class="m-0 p-0"
                                            style="list-style-type: circle; list-style-position: inside; font-size:14px;">
                                            Star Wars Rebel Alliance Special Forces Rucksack</li>
                                        <li class="m-0 p-0"
                                            style="list-style-type: circle; list-style-position: inside; font-size:14px;">
                                            Officially-licensed Star Wars merchandise</li>
                                        <li class="m-0 p-0"
                                            style="list-style-type: circle; list-style-position: inside; font-size:14px;">
                                            Includes roll-top, 2 front zipper pockets, and 2 zippered side pockets Endor
                                            Commando Alliance Special Forces patch is prominently featured on the front</li>
                                        <li class="m-0 p-0"
                                            style="list-style-type: circle; list-style-position: inside; font-size:14px;">
                                            Features faux Aurebesh on the side pocket (it would say “Restore the Republic”,
                                            but each letter is backwards) – you don’t want EVERYONE to know your true
                                            mission, do you?</li>
                                        <li class="m-0 p-0"
                                            style="list-style-type: circle; list-style-position: inside; font-size:14px;">
                                            Also shows the Rebel Alliance symbol</li>
                                        <li class="m-0 p-0"
                                            style="list-style-type: circle; list-style-position: inside; font-size:14px;">
                                            If you put an Ewok in the bag, don’t roll the top down too tight</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
