@extends('layouts.app')

@section('content')


<style>
.head1 {

   
   font-size: 50px;
   
   

}
</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />


<div class="head1 fw-bold text-center mb-4 ">  Our Services  </div>
<div class="container bg-dark text-white bg-opacity-50 rounded-2 ">


    <!-- start event block -->
    <div class="row align-items-center event-block no-gutters margin-40px-bottom ">
       
            <div class="col-lg-5 col-sm-12">
            <div class="position-relative ">
                <img src="img/event4.jpg" alt="">
                <div class="image-overlay ">
                <div class="col">
                    
                        <ul>
                            <li> Package Included:</li>
                            <li>- Catering Services</li>
                            <li>- Photobooth</li>
                            <li>- Film Service</li>
                            <li>- Seating Arrangement</li>
                            <li>- Cake</li>
                            <li>- Live Entertainment</li>
                            <li>- Decoration & Centerpieces</li>
                        </ul>
                   
                </div>

                </div>
            </div>
        </div>
   
        <div class="col-lg-7 col-sm-12  ">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all ">
                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color"><b>Birthday</b></b></a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    
                    
                </ul>
                <p>A birthday event is a celebration of a person's birth, typically marked with parties, gifts, and special activities. It can be held at a variety of venues, such as homes, restaurants, or event spaces.</p>
               
                <button type="button" class="btn btn-dark rounded-pill "> 

                <a class="nav-link {{request()->is('events') ? 'active' : ''}}" href="/reservation"><b> Choose Now  </b> </a>
   
                </button>
            </div>
        </div>
        
    </div>
</div>
    <!-- end event block -->

    <!-- start event block -->
<div class="container bg-dark text-white bg-opacity-50 rounded-2 ">
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-7 order-2 order-lg-1">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color"><b>Wedding Reception</b></a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                   
                    
                </ul>
                <p>
                A wedding reception is a celebration held after a marriage ceremony to honor the newlywed couple. It is typically held at a venue such as a hotel, event space, or outdoor location. The reception can be customized to suit the couple's preferences, such as the theme, decor, and entertainment.
                </p>

                <button type="button" class="btn btn-dark rounded-pill "> 

                <a class="nav-link {{request()->is('events') ? 'active' : ''}}" href="#"><b> Choose Now  </b> </a>
   
                </button>


            </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2">
            <div class="position-relative">
                <img src="img/ww.jpg" alt="">
                <div class="image-overlay">

                <div class="col">        
                    <ul>  

                        <li> Package Included:</li>
                        <li>- Catering Services</li>
                        <li>- Photobooth</li>
                        <li>- Film Service</li>
                        <li>- Live Entertainment</li>
                        <li>- Decoration &amp; Centerpieces</li>
                        <li>- Seating Arrangement</li>
                        <li>- Cocktail Package</li>
                       
                    </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
    <!-- end event block -->

    <!-- start event block -->
    <div class="container bg-dark text-white bg-opacity-50 rounded-2">
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-5 col-sm-12">
            <div class="position-relative">
                <img src="img/cc.jpg" alt="">
                <div class="image-overlay">

                <div class="col">
                    <ul>
                    <li> Package Included:</li>
                        <li>- Catering Services</li>
                        <li>- Decoration &amp; Centerpieces</li>
                        <li>- Seating Arrangement</li>
                        <li>- Photobooth</li>
                        <li>- Film Service</li>
                        <li>- Special Request</li>
                    </ul>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="col-lg-7 col-sm-12">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color"><b>Christening Reception</b></a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                  
                </ul>
                <p>
                    A christening reception is a celebration held to welcome a child into the Christian faith, typically following a baptism ceremony. It is a time to gather with family and friends to celebrate the occasion and enjoy good food, drinks, and entertainment. The reception can be held at a venue such as a restaurant, event space, or the family's home.
                </p>
                <button type="button" class="btn btn-dark rounded-pill "> 

                <a class="nav-link {{request()->is('events') ? 'active' : ''}}" href="/login"><b> Choose Now  </b> </a>
   
                </button>
            </div>
        </div>
    </div>
</div>
    <!-- end event block -->

    <!-- start event block -->
    <div class="container bg-dark text-white bg-opacity-50 rounded-2">
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-7 order-2 order-lg-1">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color"><b>Reunion</b></a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                   
                    
                </ul>
                <p>A reunion event is a gathering of people who have a shared history or connection, such as a family, schoolmates, or former colleagues. It is an occasion to catch up, reminisce, and celebrate the bonds that unite them. Reunions can take many forms, from informal picnics to formal banquets, depending on the size and style of the event.
                </p>
                <button type="button" class="btn btn-dark rounded-pill "> 

                <a class="nav-link {{request()->is('events') ? 'active' : ''}}" href="#"><b> Choose Now  </b> </a>

                </button>
            </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2">
            <div class="position-relative ">
                <img src="img/creu.jpg" alt="">
                <div class="image-overlay">

                <div class="col">
                    <ul>

                        <li> Package Included:</li>
                        <li>- Catering Service</li>
                        <li>- Photobooth</li>
                        <li>- Film Service</li>
                        <li>- Live Entertainment</li>
                        <li>- Decoration &amp; Centerpieces</li>
                        <li>- Seating Arrangement</li>
                        <li>- Cocktail Package</li>
                        
                    </ul>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
    <!-- end event block -->

    <!-- start event block -->
    <div class="container bg-dark text-white bg-opacity-50 rounded-2 mb-5">
    <div class="row align-items-center event-block no-gutters">
        <div class="col-lg-5 col-sm-12">
            <div class="position-relative">
                <img src="img/charity.jpg" alt="">
                <div class="image-overlay">

                <div class="col">
                    <ul>
                        <li> Package Included:</li>
                        <li>- Catering Services</li>
                        <li>- Live Entertainment</li>
                        <li>- Photobooth</li>
                        <li>- Film Service</li>
                        <li>- Seating Arrangement</li>
                        <li>- Decoration &amp; Centerpieces</li>
                        <li>- Special Request</li>
                    </ul>

                </div>
                </div>
                
            </div>
        </div>
        <div class="col-lg-7 col-sm-12">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color"><b>Charity Events</b></a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                   
                    
                </ul>
                <p>A charity event is a gathering of people who share the same goal of helping those in need by raising funds and awareness for a particular cause. The event aims to bring together donors, sponsors, volunteers, and supporters to make a positive impact on the community.</p>
                <button type="button" class="btn btn-dark rounded-pill "> 

                <a class="nav-link {{request()->is('events') ? 'active' : ''}}" href="/events"><b> Choose Now  </b> </a>
   
                </button>
            </div>
        </div>
    </div>
</div>
    <!-- end event block -->

</div>

<x-footer />


@endsection
