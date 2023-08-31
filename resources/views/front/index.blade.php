@extends('layout.front')
@section('title')
    Home
@endsection

@section('content')

<style>
   .service-wrap, .testimonial-wrap, .blog-wrap{
     box-shadow:1px 1px 9px rgba(0,0,0,0.3);
     padding:15px;
     text-align:center;
   }
   
   .bg-cover{
    background-image:url('https://livedemo00.template-help.com/wt_prod-19216/images/bg-cta-5.jpg');
    background-size:cover;
    background-position:center;
   }
   .bg-cover1{
    background-image:url('https://livedemo00.template-help.com/wt_prod-19216/images/bg-forms.jpg');
    background-size:cover;
    background-position:center;
   }
</style>

<div class="owl-carousel-1col">
   <div class="item">
      <div class="container-fluid p-0">
         <img src="{{asset('front_assets/images/slider/air quality dk.jpg')}}" width="100%">
      </div>
   </div>
   <div class="item">
      <div class="container-fluid p-0">
         <img src="{{asset('front_assets/images/slider/noise level dk.jpg')}}" width="100%">
      </div>
   </div>
   <div class="item">
      <div class="container-fluid p-0">
         <img src="{{asset('front_assets/images/slider/waste water dk.jpg')}}" width="100%">
      </div>
   </div>
   <div class="item">
      <div class="container-fluid p-0">
         <img src="{{asset('front_assets/images/slider/Water testing dk.jpg')}}" width="100%">
      </div>
   </div>
</div>
<div class="container pt-70 pb-70">
   <div class="row">
      <div class="col-md-4 mb-20">
        <div class="service-wrap">
          <img src="https://icon-library.com/images/settings-icon-flat/settings-icon-flat-7.jpg" width="35%">
          <p style="font-size:22px;"><b>MAP & DIRECTIONS</b></p>
          <p style="font-size:17px;">Our hostel is located in the downtown and not too far from airport and bus station so it is quite easy to find us wherever you come from.</p>
        </div>
      </div>
      <div class="col-md-4 mb-20">
        <div class="service-wrap">
          <img src="https://icon-library.com/images/settings-icon-flat/settings-icon-flat-7.jpg" width="35%">
          <p style="font-size:22px;"><b>ACCOMMODATION SERVICES</b></p>
          <p style="font-size:17px;">Our hostel is located in the downtown and not too far from airport and bus station so it is quite easy to find us wherever you come from.</p>
        </div>
      </div>
      <div class="col-md-4 mb-20">
        <div class="service-wrap">
          <img src="https://icon-library.com/images/settings-icon-flat/settings-icon-flat-7.jpg" width="35%">
          <p style="font-size:22px;"><b>GREAT EXPERIENCE</b></p>
          <p style="font-size:17px;">Our hostel is located in the downtown and not too far from airport and bus station so it is quite easy to find us wherever you come from.</p>
        </div>
      </div>
   </div>
</div>

<div class="container mt-20">
   <div class="row">
      <div class="col-md-6 mb-20">
         <img src="https://livedemo00.template-help.com/wt_prod-19216/images/index-3-556x382.jpg" width="100%">
      </div>
      <div class="col-md-6">
         <h1 class="teko">BEST CITY HOSTEL</h1>
         <h2 class="teko">ABOUT US</h2>
         <p style="font-size:17px;">Our hostel was founded in 2008 to provide travelers on a budget from all over the world with affordable yet highly comfortable accommodation that they could enjoy.</p>
         <div class="bg-clr text-center p-15" style="width:40%;">
           <span class="teko" style="font-size:25px;color:#fff;">GET IN TOUCH</span>
         </div>
      </div>
   </div>
</div>

<div class="container pt-50 mt-30">
    <h1 class="teko text-center">WHAT WE OFFER</h1>
   <div class="row mt-50">
      <div class="col-md-3 mb-20 text-center">
         <img src="https://static.vecteezy.com/system/resources/previews/003/303/663/original/sticker-design-with-empty-tea-cup-isolated-free-vector.jpg" width="30%">
         <h3 class="teko">TEA & COFFEE</h3>
         <p style="font-size:17px;">You can always have some hot coffee & tea in our kitchen, available to all our clients.</p>
      </div>
      <div class="col-md-3 mb-20 text-center">
         <img src="https://static.vecteezy.com/system/resources/previews/003/303/663/original/sticker-design-with-empty-tea-cup-isolated-free-vector.jpg" width="30%">
         <h3 class="teko">TEA & COFFEE</h3>
         <p style="font-size:17px;">You can always have some hot coffee & tea in our kitchen, available to all our clients.</p>
      </div>
      <div class="col-md-3 mb-20 text-center">
         <img src="https://static.vecteezy.com/system/resources/previews/003/303/663/original/sticker-design-with-empty-tea-cup-isolated-free-vector.jpg" width="30%">
         <h3 class="teko">TEA & COFFEE</h3>
         <p style="font-size:17px;">You can always have some hot coffee & tea in our kitchen, available to all our clients.</p>
      </div>
      <div class="col-md-3 mb-20 text-center">
         <img src="https://static.vecteezy.com/system/resources/previews/003/303/663/original/sticker-design-with-empty-tea-cup-isolated-free-vector.jpg" width="30%">
         <h3 class="teko">TEA & COFFEE</h3>
         <p style="font-size:17px;">You can always have some hot coffee & tea in our kitchen, available to all our clients.</p>
      </div>
   </div>
</div>

<div class="container-fluid p-60 mt-60 bg-cover text-center">
    <p class="teko" style="color:#fff;font-size:60px;">SAVE CASH FOR FUN</p>
    <p style="font-size:17px;color:#fff;">With our hostel, you can save a lot of money on accommodation <br>throughout the year to enjoy your stay at our city.</p>
    <div class="bg-clr p-10" style="width:230px; margin:auto;">
       <span style="color:#fff;font-size:30px;" class="teko">LEARN MORE</span>
    </div>
</div>

<div class="container pt-70 mt-20 pb-30">
   <h1 class="teko text-center">OUR PRODUCTS</h1>
   <div class="row mt-50" style="border:1px solid #ddd;">
      <div class="col-md-6">
         <img src="https://livedemo00.template-help.com/wt_prod-19216/images/product-big-1-600x366.jpg" width="100%">
      </div>
      <div class="col-md-6 p-40">
         <h2 class="teko">DOUBLE ROOM (PRIVATE)</h2>
         <p style="font-size:17px;text-align:justify;">Our hostel was founded in 2008 to provide travelers on a budget from all over the world with affordable yet highly comfortable accommodation that they could enjoy.</p>
         <div class="text-center p-10" style="border:3px solid #000;width:50%;">
            <span class="teko" style="font-size:30px;color:#000;">KNOW MORE</span>
         </div>
      </div>
   </div>
   <div class="row mt-50" style="border:1px solid #ddd;">
      <div class="col-md-6">
         <img src="https://livedemo00.template-help.com/wt_prod-19216/images/product-big-1-600x366.jpg" width="100%">
      </div>
      <div class="col-md-6 p-40">
         <h2 class="teko">DOUBLE ROOM (PRIVATE)</h2>
         <p style="font-size:17px;text-align:justify;">Our hostel was founded in 2008 to provide travelers on a budget from all over the world with affordable yet highly comfortable accommodation that they could enjoy.</p>
         <div class="text-center p-10" style="border:3px solid #000;width:50%;">
            <span class="teko" style="font-size:30px;color:#000;">KNOW MORE</span>
         </div>
      </div>
   </div>
</div>

<div class="container-fluid pt-70 pb-90 mt-60" style="background-color:#f7f7f7;">
   <h1 class="text-center teko">WHAT PEOPLE SAY</h1>
   <div class="container pt-40">
   <div class="row">
      <div class="col-md-4">
         <div class="testimonial-wrap text-center pt-30">
            <p style="font-size:17px;">The staff was wonderful! We had a very fun time in the city. I can't say enough nice things about the staff. They were all very pleasant and accommodating. We look forward to coming back here again.</p>
            <span class="teko clr" style="font-size:30px;">JANE WOOD</span>
         </div>
       </div>
       <div class="col-md-4">
         <div class="testimonial-wrap text-center pt-30">
            <p style="font-size:17px;">The staff was wonderful! We had a very fun time in the city. I can't say enough nice things about the staff. They were all very pleasant and accommodating. We look forward to coming back here again.</p>
            <span class="teko clr" style="font-size:30px;">JANE WOOD</span>
         </div>
       </div>
       <div class="col-md-4">
         <div class="testimonial-wrap text-center pt-30">
            <p style="font-size:17px;">The staff was wonderful! We had a very fun time in the city. I can't say enough nice things about the staff. They were all very pleasant and accommodating. We look forward to coming back here again.</p>
            <span class="teko clr" style="font-size:30px;">JANE WOOD</span>
         </div>
       </div>
   </div>
  </div>
</div>

<div class="container-fluid p-60 text-center bg-cover1">
   <p class="teko text-center" style="color:#fff;font-size:60px;">SIGN UP FOR 25% DISCOUNT</p>
   <p style="color:#fff;font-size:17px;">Want to get an instant discount for your stay at our hostel? Leave your<br> email and sign up for our newsletter with 25% off all our rooms.</p>
</div>

<div class="container-fluid pt-70 pb-70">
    <h1 class="text-center teko">LATEST BLOG POSTS</h1>
   <div class="container mt-40">
      <div class="row">
         <div class="col-md-4 mb-30">
            <div class="blog-wrap">
              <img src="https://livedemo00.template-help.com/wt_prod-19216/images/product-big-1-600x366.jpg" width="100%">
              <div class="p-10">
                 <h2 class="teko">Comfortable Accommodation That They Could Enjoy</h2>
                 <p style="font-size:17px;">The staff was wonderful! We had a very fun time in the city. I can't say enough nice things about the staff. </p>
                 <div class="p-5 bg-clr" style="width:150px;margin:auto;">
                    <span class="teko" style="color:#fff;font-size:27px;">READ MORE</span>
                 </div>
              </div>
            </div>
         </div>
         <div class="col-md-4 mb-30">
            <div class="blog-wrap">
              <img src="https://livedemo00.template-help.com/wt_prod-19216/images/product-big-1-600x366.jpg" width="100%">
              <div class="p-10">
                 <h2 class="teko">Comfortable Accommodation That They Could Enjoy</h2>
                 <p style="font-size:17px;">The staff was wonderful! We had a very fun time in the city. I can't say enough nice things about the staff. </p>
                 <div class="p-5 bg-clr" style="width:150px;margin:auto;">
                    <span class="teko" style="color:#fff;font-size:27px;">READ MORE</span>
                 </div>
              </div>
            </div>
         </div>
         <div class="col-md-4 mb-30">
            <div class="blog-wrap">
              <img src="https://livedemo00.template-help.com/wt_prod-19216/images/product-big-1-600x366.jpg" width="100%">
              <div class="p-10">
                 <h2 class="teko">Comfortable Accommodation That They Could Enjoy</h2>
                 <p style="font-size:17px;">The staff was wonderful! We had a very fun time in the city. I can't say enough nice things about the staff. </p>
                 <div class="p-5 bg-clr" style="width:150px;margin:auto;">
                    <span class="teko" style="color:#fff;font-size:27px;">READ MORE</span>
                 </div>
              </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection