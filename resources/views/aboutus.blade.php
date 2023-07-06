@extends('layouts.app')

@section('content')



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
  .about {

  font-size: 60px;

  }

  .team-container {
    height: 450px;
}
 
</style>

<div class="container text-center">

<div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="about fw-bold">About us </h1>
        <p class="lead text-dark mb-0">Welcome to Event Hive, your go-to platform for all your event planning needs. From small gatherings to large-scale conferences, we offer a comprehensive solution to make your event a success.</p>
       
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="img/aaa.jpg" alt="" class="img-fluid"></div>
    </div>
  </div>
  

<div class=" py-5">
  
    <div class="row align-items-center">
      <div class="col-lg-6 px-5 mx-auto"><img src="img/vv.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h1 class="fw-bold ">Our Vision</h1>
        <p class="font-italic text-dark mb-4">At Event Hive, our vision is to transform the event planning experience by leveraging the latest technology to streamline processes and enhance engagement. We are committed to delivering exceptional value to our customers by offering a comprehensive suite of features that enable them to plan, promote, and execute successful events effortlessly.</p>
      </div>
    </div>
  </div>
</div>


<x-aboutnew />

<div class=" py-5">
  <div class="container py-5">
    <div class="row mb-4 ">
      <div class="col-lg-5 mx-auto text-center">
        <h2 class="display-4 fw-bold mb-3">Meet Our Team</h2>
        
      </div>
    </div>

    <div class="row mt-n1-9">


                    <div class="col-md-6 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="team-style07 team-container">
                            <div class="team-thumb mb-1-9">
                                <div class="thumb"><img src="img/vince.jpg" class="rounded-circle" alt="..."></div>
                                <div class="team-social">
                                    <ul class="styled-icons">
                                        <li><a class="styled-icons-item" href="https://www.facebook.com/profile.php?id=100008447805637"><i class="bi bi-facebook"></i></a></li>
                                        <li><a class="styled-icons-item" href="https://github.com/vPasco"><i class="bi bi-github"></i></a></li>
                                        <li><a class="styled-icons-item" href="https://www.linkedin.com/in/vince-pasco-924827265/"><i class="bi bi-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="h5 mb-1 fw-bold"><a href="#!">Vince Pasco</a></h3>
                            <p class="mb-0"> 2- BS Information Technology </p>
                            <p class="mb-0">UI/UX Designer</p>
                            <p class="mb-0">Front-End Developer</p>
                            <p class="mb-0">Back-End Developer</p>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="team-style07 team-container">
                            <div class="team-thumb mb-1-9">
                                <div class="thumb"><img src="img/will.jpg" class="rounded-circle" alt="..."></div>
                                <div class="team-social">
                                    <ul class="styled-icons">
                                        <li><a class="styled-icons-item" href="https://www.facebook.com/williamjefferson.bagaporo"><i class="bi bi-facebook"></i></a></li>
                                        <li><a class="styled-icons-item" href="https://github.com/William0021"><i class="bi bi-github"></i></a></li>
                                        <li><a class="styled-icons-item" href="#!"><i class="bi bi-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="h5 mb-1 fw-bold"> <a href="#!">William Bagaporo</a></h3>
                            <p class="mb-0"> 2- BS Information Technology </p>
                           
                            <p class="mb-0">Front-End Developer</p>
                            <p class="mb-0">Back-End Developer</p>
                            
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="team-style07 team-container">
                            <div class="team-thumb mb-1-9">
                                <div class="thumb"><img src="img/tup.png" class="rounded-circle img-fluid" alt="..."></div>
                                <div class="team-social">
                                    <ul class="styled-icons">
                                        <li><a class="styled-icons-item" href="#!"><i class="bi bi-facebook "></i></a></li>
                                        <li><a class="styled-icons-item" href="#!"><i class="bi bi-github"></i></a></li>
                                        <li><a class="styled-icons-item" href="#!"><i class="bi bi-linkedin"></i></a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <h3 class="h5 mb-1 fw-bold"><a href="#!">Topher Querubin</a></h3>
                            <p class="mb-0"> 2- BS Information Technology </p>
                            <p class="mb-0"> Front-End Developer </p>
                            
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="team-style07 team-container">
                            <div class="team-thumb mb-1-9">
                                <div class="thumb"><img src="img/trish3.png" class="rounded-circle" alt="..."></div>
                                <div class="team-social">
                                    <ul class="styled-icons">
                                        <li><a class="styled-icons-item" href="#!"><i class="bi bi-facebook"></i></a></li>
                                        <li><a class="styled-icons-item" href="#!"><i class="bi bi-github"></i></a></li>
                                        <li><a class="styled-icons-item" href="#!"><i class="bi bi-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="h5 mb-1 fw-bold"> <a href="#!">Trisha Gigantone</a></h3>
                            <p class="mb-0"> 2- BS Information Technology </p>
                            <p class="mb-0">UI/UX Designer </p>
                           
                        </div>
                    </div>
                </div>


    
  </div>
  
</div>


<x-footer />


@endsection
