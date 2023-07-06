@extends('layouts.app')

@section('content')


<style>
.btnn {

   width: 180px;
   font-size: 18px;
   padding: 20px 0;
   border: 0;

}


.banner .waves {
    position: absolute;
    bottom: 0;
    width: 100;
    left: 0;
  
}
.hero{
   width:100%;
   height: 80vh; 
   background: linear-gradient(to right,  #F3C622, #7FFF00);
   
}
body{
    background: #fff;
}

</style>
<section class="banner">
<svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,224L34.3,224C68.6,224,137,224,206,186.7C274.3,149,343,75,411,80C480,85,549,171,617,197.3C685.7,224,754,192,823,160C891.4,128,960,96,1029,101.3C1097.1,107,1166,149,1234,149.3C1302.9,149,1371,107,1406,85.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</section>
<body id="homepage">

<div class="hero px-5 mb-5" >
    <div class="h-100 d-flex align-items-center " style="height: 90%;">
        <div class="container-fluid">
            <h2 class="heading1 text-white"> Streamline your event planning process with <b>Event Hive </b> </h1>
            <h1 class="heading1 fw-bold fs-1 col-6 mt-2 mb-3"> The online booking system designed to make your life easier</h1>
             
                <button type="button" class="btnn btn-dark rounded-pill  "> 

                <a class="nav-link {{request()->is('events') ? 'active' : ''}}" href="/events"><b> Get Started  </b> </a>
                   
                </button>
            
        </div>
    </div>
</div>

<x-about-home></x-product-list>

<x-footer />

@endsection
