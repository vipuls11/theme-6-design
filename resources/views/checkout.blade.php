@extends('layout')
@section('content')
<style>
   
</style>
<div class="container mt-2 mb-5">
    <div class="row">
        <div class="col-lg-7 ">
            <h4 class="text-black fw-semibold">Total Item 1</h4>
            <div class="checkout-product-details border border-2 ">
                <div class="p-3">
            <div class="d-flex align-items-center ">
                <div>
                    <img src="{{asset('images/home/Emerald.jpg')}}" alt="" style="width: 150px;">
                </div>
              
                <div>
                    <h5 class="text-dark">Ravishing Rose Gold Drop Earrings</h5>
                    <div>
                        <label for="" class="text-dark"><span class="fw-semibold">Metal :</span> <span>  14k Yellow Gold(2.98g)</span></label>
                    </div>
                    <div>
                        <label for=""><span class="fw-semibold">Qty :</span>
                            <select name="" id="">
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <p class="text-dark m-0 "><span class="mx-2 fw-semibold fs-5">&#8377; 46,867.00</span> <del class="" style="font-size: 12px">&#8377; 52,676.00</del></p>
            </div>
        </div> 
            <div class="text-end" style="background: #b0afb1">
                <button class="checkout-button px-2 py-1 "><span class=""><i class="fa-solid fa-trash mr-2"></i></span> Remove</button>
            </div>  
        </div>
        <div class="my-3">
           <a href="{{asset('product')}}">
            <button class="py-2 px-4 text-white fw-semibold " style="background: var(--darkgreen); border: 2px solid var(-darkgreen);"><span class="" style="margin-right: 5px;">&#11164;</span> CONTINUE SHOPPING</button>
            </a> 
        </div>
       
        </div>
        <div class="col-lg-5 border-2 border-start ">
            
             <div class="p-3 m-lg-3">   
            <button class="w-100 py-2 text-white fw-semibold " style="background: var(--darkgreen); border: 2px solid var(-darkgreen);">CHECKOUT</button>
            <div class="border border-2 my-3 ">
                <div class="p-2">
                <div class="d-flex align-items-center justify-content-between ">
                    <p class="text-dark m-0" style="font-size: 14px;">Apply offer / Voucher</p>
                    <span class="checkout-button" style="color: var(--darkgreen); font-size:12px;">CHECK OFFERS</span>
                </div>
                <div class="d-flex border-2 border-bottom align-items-center justify-content-between  my-1 pb-2">
                    <p class="text-success m-0" style="font-size: 12px;"><span class="" ><i class="fa-solid fa-check" style="font-size: 12px; margin-right:5px;"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <div class="copy-btn" style="font-size:12px; "><i class="fa-solid fa-copy"></i></div>
                </div>

                <div class="text-dark d-flex align-items-center justify-content-between ">  
                    <p class="text-dark m-0 py-2" style="font-size: 12px;"> <span class="" style="margin-right: 5px;"><i class="fa-solid fa-circle-exclamation" style="font-size: 12px"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <div><input type="checkbox"></div>
                </div>
            </div>
                <div>
                    <div>
                        <h6 class="fw-semibold py-2 px-2" style="background:#c8c6c9;">ORDER SUMMARY</h6>
                    </div>
                </div>
                <div>
                    <div class="row p-2">
                        <div class="col-8 py-2" style="font-size: 14px;">Item total</div>
                        <div class="col-4 py-2" style="font-size: 14px;">-&#8377; 46,867.00</div>
                        <div class="col-8 py-2" style="color:var(--darkgreen); font-size: 14px;">Discount(GLOW2024)</div>
                        <div class="col-4 py-2" style="color:var(--darkgreen); font-size: 14px;">-&#8377; 46,867.00</div>
                        <div class="col-8 py-2" style="font-size: 14px;">Sub Total</div>
                        <div class="col-4 py-2" style="font-size: 14px;">-&#8377; 46,867.00</div>
                        <div class="col-8 py-2" style="font-size: 14px;">Insurance(1% of Sub Total)</div>
                        <div class="col-4 py-2">-&#8377; 46,867.00</div>
                        <div class="col-8 py-2" style="background:#c8c6c9; font-weight:800;">Order Total</div>
                        <div class="col-4 py-2" style="background:#c8c6c9; font-weight:800;">-&#8377; 46,867.00</div>
                        <div class="col-8 py-2" style="font-size: 14px;">Your total saving</div>
                        <div class="col-4 py-2" style="color: var(--darkgreen); font-size: 14px;">-&#8377; 46,867.00</div>
                    </div>
                </div>
            </div>
            <div class="border border-2  p-2">
                <div class="">
                    <p class="text-dark m-0 pb-2" style="font-size: 14px;">Have any queries ? Contact us for your asistance</p>
                    <p class="text-dark m-0" style="font-size: 14px;">Call us at <span class=""><a href="" style="font-size: 12px; color:var(--darkgreen);">+91 00000 00000</a></span> or <span><a href="" style="font-size: 12px; color:var(--darkgreen);">+91 00000 00000</a></span></p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
        <div class="container-fluid" style="background:#e8e7e8;">
            <div class="d-lg-flex gap-2 my-3 justify-content-between align-items-center  py-4 px-2" >
                <p class="text-dark m-0 fw-bold fs-5 mb-lg-0 mb-2" style="font-size: 17px;"><img src="{{asset('images/home/trust.png')}}" alt="hello" class="" style="width:50px;">Trust of Oriflamme Jewellers</p> 
                <p class="text-dark m-0 fw-bold fs-5  mb-lg-0 mb-2"><img src="{{asset('images/home/15days.png')}}" alt="hello" class="" style="width:50px;">15 DAYS RETURN</p> 
                <p class="text-dark m-0 fw-bold fs-5  mb-lg-0 mb-2"><img src="{{asset('images/home/exchange-rate.png')}}" alt="hello" class="" style="width:50px;">100% EXCHANGE</p> 
                <p class="text-dark m-0 fw-bold fs-5  mb-lg-0 mb-2"><img src="{{asset('images/home/certificate.png')}}" alt="hello" class="" style="width:50px;">CERTIFIED JEWELLERY</p> 
                <p class="text-dark m-0 fw-bold fs-5  mb-lg-0 mb-2"><img src="{{asset('images/home/lifetime.png')}}   " alt="hello" class="" style="width:50px;">LIFETIME BUYBACK</p> 
            </div>
        </div>
 

@endsection