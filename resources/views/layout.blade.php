<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/New Jewelry.png') }}">
    <title>Theme-6 Design</title>
    {{-- ---------------font-awesome------------ --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- ---------------font-family------------ --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">

    {{-- ---------------jquery------------ --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>

    {{-- ---------------toastr------------ --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    {{-- ---------------bootstrap------------ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrapm.css') }}">

    {{-- ---------------Style------------ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/allstyle.css') }}">
    {{-- ---------------Style header------------ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
    {{-- ---------------Style footer------------ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
     {{-- ---------------Style Layout------------ --}}
     <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}">
      {{-- ---------------Style index------------ --}}
      <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
       {{-- ---------------Style product------------ --}}
       <link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}">
       {{-- ---------------Style cart------------ --}}
       <link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}">
       {{-- ---------------Style checkout------------ --}}
       <link rel="stylesheet" type="text/css" href="{{ asset('css/checkout.css') }}">
    {{-- ---------------livewire single-product------------ --}}
       <link rel="stylesheet" type="text/css" href="{{ asset('css/single-product.css') }}">
    {{-- ---------------livewire wishlist------------ --}}
       <link rel="stylesheet" type="text/css" href="{{ asset('css/wishlist.css') }}">
    {{-- ---------------livewire------------ --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- @livewireStyles --}}


    <style>
 
    </style>
</head>

<body>
    @include('header')
    @yield('content')
    @include('footer')


    {{-- ---------------scrollToTop------------ --}}
    <button id="scroll_top" onclick="scrollToTop()" title="Go To Top" class="original-button position-fixed custom-btn btn-5"
        style="display: none; z-index:3;bottom:15px; right:15px;  font-size: 22px; width:50px; height:50px;">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
    
    <script>
       
    </script>

    {{-- @livewireScripts --}}
    {{-- ---------------bootstrap------------ --}}
    <script src="{{ asset('js/bootstrapm.js') }}"></script>
    {{-- ---------------JAVASCRIPT HEADER------------ --}}
    <script src="{{ asset('js/header.js') }}"></script>
    {{-- ---------------JAVASCRIPT LAYOUT------------ --}}
    <script src="{{ asset('js/layout.js') }}"></script>
    {{-- ---------------INDEX LAYOUT------------ --}}
    <script src="{{ asset('js/index.js') }}"></script>
     {{-- ---------------PRODUCT LAYOUT------------ --}}
     <script src="{{ asset('js/product.js') }}"></script>
     {{-- ---------------PRODUCT CART------------ --}}
     <script src="{{ asset('js/cart.js') }}"></script>
     {{-- ---------------PRODUCT CHECKOUT------------ --}}
     <script src="{{ asset('js/checkout.js') }}"></script>
     {{-- ---------------PRODUCT single-product------------ --}}
     <script src="{{ asset('js/single-product.js') }}"></script>
     {{-- ---------------PRODUCT single-product------------ --}}
     <script src="{{ asset('js/wishlist.js') }}"></script>
</body>

</html>
