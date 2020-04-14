@extends('layouts.front')


@section('content')

 <!-- ======= Home Section ======= -->
 <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">{{__('messages.titleplatform')}}</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <span class="icon la la-users"></span>
              </div>
              <h3 class="mb-3">{{__('messages.platform1')}}</h3>

            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <span class="icon la la-toggle-off"></span>
              </div>
              <h3 class="mb-3">{{__('messages.platform2')}}</h3>

            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <span class="icon la la-umbrella"></span>
              </div>
              <h3 class="mb-3">{{__('messages.platform3')}}</h3>

            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="section">

      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade">
          <div class="col-md-6 mb-5">
            <img src="{{asset('img/1.png')}}" alt="Image" class="img-fluid" width="300px" heigth="500px">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="step">
              <span class="number">01</span>
              <h3>{{__('messages.signup')}}</h3>
              <p>{{__('messages.procedure1')}}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">02</span>
              <h3>{{__('messages.form')}}</h3>
              <p>{{__('messages.procedure2')}}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">03</span>
              <h3>{{__('messages.results')}}</h3>
              <p>{{__('messages.procedure3')}}</p>
            </div>
          </div>
        </div>
      </div>

    </section>

      <!-- ======= CTA Section ======= -->
      <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
<h2>{{__('messages.downloadmsg')}}</h2>
          </div>
          <div class="col-md-5 text-center text-md-right">
            <p><a href="#" class="btn"><span class="icofont-brand-apple mr-3"></span>App store</a> <a href="#" class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
          </div>
        </div>
      </div>
      </div>
    </section><!-- End CTA Section -->

@endsection
