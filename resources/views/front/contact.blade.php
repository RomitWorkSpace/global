@extends('layout.front')
@section('title')
    Contact Us | Global Testing Solution
@endsection

@section('content')

<style>
   .contact-wrap{
      box-shadow:1px 1px 6px rgba(0,0,0,0.3);
   }
   input[type="text"]{
      border-radius:0px;
      height:55px;
   }
   input[type="number"]{
      border-radius:0px;
      height:55px;
   }
   .custom-btn{
    padding:8px;
    color:#eee;
    width:280px;
    font-size:32px;
   }

</style>

<div class="container-fluid p-0">
   <img src="blod/sd.jpg" width="100%">
</div>
<div class="container mt-50">
   <div class="row">
      <div class="col-md-4 mb-30">
         <div class="contact-wrap p-40 text-center">
            <i class="fa fa-mobile clr" style="font-size:80px;"></i>
            <p style="font-size:20px;">+91 98450-23340</p>
         </div>
      </div>
      <div class="col-md-4 mb-30">
         <div class="contact-wrap p-40 text-center">
            <i class="fa fa-home clr" style="font-size:80px;"></i>
            <p style="font-size:20px;">4730 Crystal Springs Dr, Los Angeles, CA 90027</p>
         </div>
      </div>
      <div class="col-md-4 mb-30">
         <div class="contact-wrap p-40 text-center">
            <i class="fa fa-message clr" style="font-size:80px;"></i>
            <p style="font-size:20px;">mail@gotolobaltesting.in</p>
         </div>
      </div>
   </div>
</div>

<div class="container mt-60">
   <div class="row">
      <div class="col-md-3">
         <span class="teko" style="font-size:60px;">GET IN TOUCH</span>
      </div>
      <div class="col-md-9 pt-30">
         <p style="font-size:18px;">If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
      </div>
   </div>
</div>

<div class="container mb-80">
   <form action="/contact/submit" method="post">
      @csrf
      <div class="row">
         <div class="col-md-4">
            <div class="form-group">
               <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               <input type="text" class="form-control" name="email" placeholder="E-mail">
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               <input type="number" class="form-control" name="phone" placeholder="Phone">
            </div>
         </div>
      </div>
      <div class="form-group mt-20">
         <textarea type="text" class="form-control" name="message" rows="10" style="border-radius:0px;" placeholder="Message..."></textarea>
      </div>
      <button type="submit" class="custom-btn bg-clr teko mt-20" style="color:#000;">SEND MESSAGE</button>
   </form>
</div>
@endsection