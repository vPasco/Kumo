<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <style>
    
  .text-custom{
        color: #0062ff !important;
    }
  .about{
    font-size: 50px;
  }

  .team-container {
    height: 450px;
}


 
  </style>

                
    <div class="container-fluid px-5 pt-5 ">
    <div class="row mb-4">
      <div class="col-lg-5 mx-auto text-center">
        <h2 class="display-4 fw-bold mb-2">Our Services</h2>
      </div>
    </div>

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="2500" >
      <ol class="carousel-indicators">
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
      </ol>
      
       <!-- 1st -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/cb.jpg" class="d-block w-100" alt="Slide 1">
          <div class="carousel-caption d-flex align-items-center" style="height: 90%;">
              <div class="container-fluid ">
                <h1 class="heading1 text-dark fw-bold">Birthdays</h1>
                
                <h4 class="heading1 text-dark mb-5">
                    Join us in celebrating another year of life with a fun-filled birthday bash!
                </h4>

                  <button type="button" class="btnn btn-dark rounded-pill  "> 

                      <a class="nav-link {{request()->is('events') ? 'active' : ''}}" href="/events"><b> Get Started  </b> </a>
    
                  </button>

                
              </div>
            </div>
        </div>

         <!-- 2nd -->

        <div class="carousel-item">
          <img src="/img/birtdey.jpg" class="d-block w-100" alt="Slide 2">
          <div class="carousel-caption d-flex align-items-center" style="height: 90%;">
              <div class="container-fluid ">
                <h1 class="heading1 text-dark fw-bold">Wedding Reception</h1>
                
                <h4 class="heading1 text-dark mb-5">
                    Celebrate the newlyweds with a joyous reception filled with love, laughter, and delicious food.
                </h4>

                  <button type="button" class="btnn btn-dark rounded-pill  "> 

                      <a class="nav-link {{request()->is('events') ? 'active' : ''}}" href="/events"><b> Get Started  </b> </a>
    
                  </button>

                
              </div>
            </div>
        </div>

         <!-- 3rd -->

        <div class="carousel-item">
          <img src="img/cc.jpg " class="d-block w-100" alt="Slide 3">
          <div class="carousel-caption d-flex align-items-center" style="height: 90%;">
              <div class="container-fluid ">
                <h1 class="heading1 text-dark fw-bold">Christening Reception</h1>
                
                <h4 class="heading1 text-dark mb-5">
                    Welcome the newest member of your family with a special celebration that honors their baptism and brings loved ones together.
                </h4>

                  <button type="button" class="btnn btn-dark rounded-pill  "> 

                      <a class="nav-link {{request()->is('events') ? 'active' : ''}}" href="/events"><b> Get Started  </b> </a>
    
                  </button>

                
              </div>
            </div>
        </div>

          <!-- 4th -->

        <div class="carousel-item">
          <img src="img/creu.jpg" class="d-block w-100" alt="Slide 4">
          <div class="carousel-caption d-flex align-items-center" style="height: 90%;">
              <div class="container-fluid ">
                <h1 class="heading1 text-dark fw-bold">Reunion Event</h1>
                
                <h4 class="heading1 text-dark mb-5">
                    Reconnect with old friends and reminisce about the good times with a reunion event that's sure to be unforgettable.
                </h4>

                  <button type="button" class="btnn btn-dark rounded-pill  "> 

                      <a class="nav-link {{request()->is('events') ? 'active' : ''}}" href="/events"><b> Get Started  </b> </a>
    
                  </button>

                
              </div>
            </div>
        </div>

           <!-- 5th -->

        <div class="carousel-item">
          <img src="img/chha.jpg" class="d-block w-100" alt="Slide 5">
          <div class="carousel-caption d-flex align-items-center" style="height: 90%;">
              <div class="container-fluid ">
                <h1 class="heading1 text-dark fw-bold">Charity Event</h1>
                
                <h4 class="heading1 text-dark mb-5">
                    Make a difference in your community and support a worthy cause by attending a charity event that combines entertainment and philanthropy.
                </h4>

                  <button type="button" class="btnn btn-dark rounded-pill  "> 

                      <a class="nav-link {{request()->is('events') ? 'active' : ''}}" href="/events"><b> Get Started  </b> </a>
    
                  </button>

                
              </div>
            </div>
        </div>
      </div>

      <!-- Carousel control buttons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  

<!-- about us new -->





<!-- About Us -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="about fw-bold">About us </h1>
        <p class="lead text-muted mb-0">Welcome to Event Hive, your go-to platform for all your event planning needs. From small gatherings to large-scale conferences, we offer a comprehensive solution to make your event a success.</p>
       
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="img/aaa.jpg" alt="" class="img-fluid"></div>
    </div>
  </div>
</div>

<div class="container py-5 ">
  
    <div class="row align-items-center">
      <div class="col-lg-6 px-5 mx-auto "><img src="img/vv.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h1 class="about fw-bold ">Our Vision</h1>
        <p class="font-italic text-muted mb-4">At Event Hive, our vision is to transform the event planning experience by leveraging the latest technology to streamline processes and enhance engagement. We are committed to delivering exceptional value to our customers by offering a comprehensive suite of features that enable them to plan, promote, and execute successful events effortlessly.</p>
      </div>
    </div>
  </div>
</div>

<x-aboutnew />



<div class=" py-5">
  <div class="container py-5">
    <div class="row mb-4">
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
        <h3 class="h5 mb-1 fw-bold"> Vince Pasco </h3>
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
        <h3 class="h5 mb-1 fw-bold"> William Bagaporo </h3>
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
        <h3 class="h5 mb-1 fw-bold">Topher Querubin</h3>
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
        <h3 class="h5 mb-1 fw-bold"> Trisha Gigantone </h3>
        <p class="mb-0"> 2- BS Information Technology </p>
        <p class="mb-0">UI/UX Designer </p>
        
    </div>
</div>
</div>



</div>

    
  </div>
</div>


