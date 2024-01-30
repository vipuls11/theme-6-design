@extends('layout')
@section('content')
<style>
    .vedio_btn_card{
  border: none;
}
</style>
<div>
    <div class="container py-3">
        <h4 class="fw-bold fs-3 text-center " style="color:var(--black);">Wishlist</h4>
        <hr  width=100% align="center" />
        <div class="overflow-hidden">
            <div class="row g-2">
                <div id="myDIV" class="col-lg-3 col-md-6">
                    <div  class="p-3">
                        <div class="card" >
                            <a href="{{asset('single-product')}}"><img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border" alt="..."></a>
                            <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                             <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                            </div>
                            <div class="vedio_heart">
                              <span class="vedio_button" style="margin-right: 10px;"><button type="button" class="vedio_btn_card" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-4"></i></button> </span>
                              <span onclick="myFunction()"><i class="fa-regular fa-circle-xmark fs-4 fw-semibold"></i></span>
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
               
                    <div class="col-lg-3 col-md-6">
                      <div class="p-3">
                          <div class="card" >
                              <img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border" alt="...">
                              <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                               <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                              </div>
                              <div class="vedio_heart">
                                <span class="vedio_button" style="margin-right: 10px;"><button type="button" class="vedio_btn_card" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-4"></i></button> </span>
                                <span><i class="fa-regular fa-circle-xmark fs-4 fw-semibold"></i></span>
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

                      <div class="col-lg-3 col-md-6">
                        <div class="p-3">
                            <div class="card" >
                                <img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border" alt="...">
                                <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                 <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                                </div>
                                <div class="vedio_heart">
                                  <span class="vedio_button" style="margin-right: 10px;"><button type="button" class="vedio_btn_card" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-4"></i></button> </span>
                                  <span><i class="fa-regular fa-circle-xmark fs-4 fw-semibold"></i></span>
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

                        <div class="col-lg-3 col-md-6">
                          <div class="p-3">
                              <div class="card" >
                                  <img src="{{asset('images/home/Emerald.jpg')}}" class="card-img-top border" alt="...">
                                  <div class="fast_shipping w-50 text-center p-2" style="clip-path: polygon(0% 20%, 60% 20%, 100% 20%, 90% 52%, 100% 81%, 60% 80%, 0% 80%);">
                                   <h6 class="text-white mb-0 " style="font-size:14px;">Fast Shipping</h6>
                                  </div>
                                  <div class="vedio_heart">
                                    <span class="vedio_button" style="margin-right: 10px;"><button type="button" class="vedio_btn_card " data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-video fs-4"></i></button> </span>
                                    <span><i class="fa-regular fa-circle-xmark fs-4 fw-semibold"></i></span>
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
<script>
    function myFunction() {
  var x = document.getElementById("myDIV");
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

  