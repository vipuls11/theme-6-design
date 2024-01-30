@extends('layout')
@section('content')
 <style>
  .social-media{
    color:var(--darkgreen);
    margin-right: 5px;
  }
  .fa-regular{
    cursor: pointer;
  }

  .btn{
    border: 1px solid var(--darkgreen);
  }
  .btn:hover{
    background: var(--darkgreen); 
    border: 1px solid var(--darkgreen);
  }
 </style>
  <div class="container pt-3">
    <h4 class="fw-bold fs-3 text-center " style="color:var(--black);">Wishlist</h4>
   <div class="wishlist_card my-5 ">
    <div>
        <label for="" class="fs-5 fw-semibold">Social Media :</label>
        <a href="" style=";"><i class="social-media fa-brands fa-instagram fs-4 fw-semibold"></i></a>
       <a href=""><i class="social-media fa-brands fa-facebook fs-4 fw-semibold"></i></a> 
       <a href=""><i class="social-media fa-brands fa-whatsapp fs-4 fw-semibold"></i></a>
    </div>
  <table class="table table-success table-hover table-striped text-center  border-0">
  <thead class="">
    <tr class="">
    <th scope="col ">Product Image</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Add to Card</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
  <tbody class="">
    <tr class="">
      <td scope="row" class=" align-middle">
    <img src="{{asset('images/home/Emerald.jpg')}}" alt="helloo" class="img-thumbnail rounded" style="width:100px; height: 100px;"></td>
      <td  class=" align-middle">Lorem ipsum, dolor sit amet consectetur adipisicing elit</td>
      <td style="font-weight: 600;" class=" align-middle">&#8377; 5000 <del class="text-danger " style="font-size: 10px;;">&#8377; 6000</del></td>
      <td class="align-middle"><a href="{{('checkout')}}"><button type="text" class="btn btn-success" style="font-size: 10px;">Add to Cart</button></a></td>
      <td class=" align-middle"><i class="fa-regular fa-circle-xmark"></i><br><span class="" style="font-size: 12px;">Remove from Wishlist</span></td>
    </tr>
    <tr class="">
      <td scope="row" class=" align-middle">
    <img src="{{asset('images/home/Emerald.jpg')}}" class="img-thumbnail rounded" alt="helloo" style="width:100px; height: 100px;"></td>
      <td  class=" align-middle">Lorem ipsum, dolor sit amet consectetur adipisicing elit</td>
      <td style="font-weight: 600;" class=" align-middle">&#8377; 5000 <del class="text-danger " style="font-size: 10px;;">&#8377; 6000</del></td>
      <td class="align-middle"><button type="text" class="btn btn-success" style="font-size: 12px;">Add to Cart</button></td>
      <td class=" align-middle"><i class="fa-regular fa-circle-xmark"></i><br><span class="" style="font-size: 12px;">Remove from Wishlist</span></td>
    </tr>
    <tr class="">
      <td scope="row" class=" align-middle">
    <img src="{{asset('images/home/Emerald.jpg')}}" class="img-thumbnail rounded" alt="helloo" style="width:100px; height: 100px;"></td>
      <td  class=" align-middle">Lorem ipsum, dolor sit amet consectetur adipisicing elit</td>
      <td style="font-weight: 600;" class=" align-middle">&#8377; 5000 <del class="text-danger " style="font-size: 12px;;">&#8377; 6000</del></td>
      <td class="align-middle"><button type="text" class="btn btn-success" style="font-size: 12px;">Add to Cart</button></td>
      <td class=" align-middle"><i class="fa-regular fa-circle-xmark"></i><br><span class="" style="font-size: 12px;">Remove from Wishlist</span></td>
    </tr>
  </tbody>
</table>



   </div>
  </div>
@endsection