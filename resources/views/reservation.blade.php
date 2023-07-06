@extends('layouts.app')


@section('content')

  
<div class="container px-2 my-2 mb-5">
  <div class="row justify-content-center">
    <div class="col-xl-10">
      <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
        <div class="card-body p-0">
          <div class="row g-0">
            <div class="col-sm-6 d-none d-sm-block bg-image "> </div>
            
            <div class="col-sm-6 p-4">
              <div class="text-center">
                <div class="h3 fw-light">Reservation Form</div>
                <p class="mb-4 text-muted">Complete the form with your information to secure your booking</p>
              </div>

            
              
                @if(Session::has('success'))
                                  <div class="alert alert-success">
                                      {{Session::get('success')}}
                                  </div>
                @endif


                <form method="POST" action="{{ route('reservation.store') }}" >
              {{ csrf_field() }}

                <!-- Name Input -->
                <div class="form-floating mb-3">
                  <input class="form-control" name="name" type="text" placeholder="Name" value="{{ old('name') }}" />
                  <label for="name">Full Name</label>
                  @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name') }}</span>
                      @endif
                </div>

                <!-- Email Input -->
                <div class="form-floating mb-3">
                  <input class="form-control" name="email" type="email" placeholder="Email " value="{{ old('email') }}" />
                  <label for="email">Email Address</label>
                  @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                      @endif
                </div>

                <!-- Type of Event --> 
                <div class="form-floating mb-3">
                  <input class="form-control" name="event_type" type="text" placeholder="Event Type" value="{{ old('event_type') }}" />
                  <label for="event_type">Type of Event</label>
                  @if ($errors->has('event_type'))
                          <span class="text-danger">{{ $errors->first('event_type') }}</span>
                      @endif
                </div>

                 <!-- Preffered date and time -->
                 <div class="form-floating mb-3">
                  <input class="form-control" name="date_time" type="text" placeholder="Date and Time" value="{{ old('date_time') }}" />
                  <label for="date_time">Preferred date (MM-DD-YYYY)</label>
                  @if ($errors->has('date_time'))
                          <span class="text-danger">{{ $errors->first('date_time') }}</span>
                      @endif
                </div>

                <!-- Theme -->
                <div class="form-floating mb-3">
                  <input class="form-control" name="theme" type="text" placeholder="Theme" value="{{ old('theme') }}" />
                  <label for="theme">Theme</label>
                  @if ($errors->has('theme'))
                          <span class="text-danger">{{ $errors->first('theme') }}</span>
                      @endif
                </div>

                   <!-- Estimated Pax -->
                <div class="form-floating mb-3">
                  <input class="form-control" name="estimated_pax" type="text" placeholder="Estimated Pax" value="{{ old('estimated_pax') }}" />
                  <label for="estimated_pax">Estimated Pax</label>
                  @if ($errors->has('estimated_pax'))
                          <span class="text-danger">{{ $errors->first('estimated_pax') }}</span>
                      @endif
                </div>

                <!-- Message Input -->
                <div class="form-floating mb-3">
                  <textarea class="form-control" name="message" type="text" placeholder="Message" style="height: 10rem;" value="{{ old('message') }}"></textarea>
                  <label for="message">Message</label>
                  @if ($errors->has('message'))
                          <span class="text-danger">{{ $errors->first('message') }}</span>
                      @endif
                </div>

                <!-- Submit success message -->
                <div class="d-none" id="submitSuccessMessage">
                  <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                  </div>
                </div>

                <!-- Submit error message -->
                <div class="d-none" id="submitErrorMessage">
                  <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>

                <!-- Submit button -->
                <div class="d-grid">
                  <button class="btn btn-primary btn-lg rounded-pill" id="submitButton" type="submit">Submit</button>
                </div>
              </form>
            </div>
              <!-- End of contact form -->

            </div>
          </div>    

        </div>
      </div>
    </div>
  </div>
</div>

<!-- CDN Link to SB Forms Scripts -->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>





<x-footer />


@endsection
