@extends('layouts.front')


@section('content')

<section class="section">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>{{ __('messages.about') }}</h2>
            <p class="mb-0">{{ __('messages.welcomeform') }}</p>
          </div>

        </div>

        <div class="row">


          <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up">

          {!! Form::open(array('route' => 'fiches.store','method'=>'POST')) !!}

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">{{ __('messages.nomform') }}</label>
                  <input type="text" name="nom" class="form-control" id="nom" data-rule="minlen:4"  required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <label for="name">{{ __('messages.teleform') }}</label>
                  <input type="text" name="tele" class="form-control" id="tele" data-rule="minlen:4"  required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">{{ __('messages.cinform') }}</label>
                  <input type="text" class="form-control" name="cin" id="cin" data-rule="minlen:4"  required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">{{ __('messages.emailform') }}</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" required/>
                  <div class="validate"></div>
                </div>

                <div class="col-md-12 form-group">
                  <label for="name">{{ __('messages.sexeform') }}</label>
                  <select class="form-control" name="sexe" id="sexe" required>
                       <option value=""></option>
                        <option value="M">{{ __('messages.sexeMform') }}</option>
                        <option value="F">{{ __('messages.sexeFform') }}</option>
                        </select>
                  <div class="validate"></div>
                </div>

                <div class="col-md-12 form-group">
                  <label for="name">{{ __('messages.ageform') }}</label>
                  <input type="text" class="form-control" name="age" id="age"  required/>
                  <div class="validate"></div>
                </div>

                <div class="col-md-12 form-group">
                <legend class="col-form-label col-sm-10 pt-0">{{ __('messages.q1') }}</legend>
                <fieldset class="form-group">
                    <div class="row">

                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadiosq1" id="gridRadiosq11" value="1">
                        <label class="form-check-label" for="gridRadios1">
                        {{ __('messages.ch11') }}
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadiosq1" id="gridRadiosq12" value="2">
                        <label class="form-check-label" for="gridRadios2">
                        {{ __('messages.ch12') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadiosq1" id="gridRadiosq13" value="3">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch13') }}
                        </label>
                        </div>

                        <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadiosq1" id="gridRadiosq14" value="4">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch14') }}
                        </label>
                        </div>
                    </div>
                    </div>
                </fieldset>
                </div>

                <div class="col-md-12 form-group">
                <fieldset class="form-group">
                <legend class="col-form-label col-sm-10 pt-0">{{ __('messages.q2') }}</legend>
                    <div class="row">

                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadiosq2" id="gridRadiosq21" value="1">
                        <label class="form-check-label" for="gridRadios1">
                        {{ __('messages.ch21') }}
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadiosq2" id="gridRadiosq22" value="2">
                        <label class="form-check-label" for="gridRadios2">
                        {{ __('messages.ch22') }}
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadiosq2" id="gridRadiosq23" value="3">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch22') }}
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadiosq2" id="gridRadiosq24" value="3">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch24') }}
                        </label>
                        </div>
                    </div>
                    </div>
                </fieldset>
                </div>

                <div class="col-md-12 form-group">
                <legend class="col-form-label col-sm-10 pt-0">{{ __('messages.q3') }}</legend>
                <fieldset class="form-group">
                    <div class="row">

                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq3[]" id="gridRadios1" value="1">
                        <label class="form-check-label" for="gridRadios1">
                        {{ __('messages.ch31') }}
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq3[]" id="gridRadios2" value="2">
                        <label class="form-check-label" for="gridRadios2">
                        {{ __('messages.ch32') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq3[]" id="gridRadios3" value="3">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch33') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq3[]" id="gridRadios3" value="4">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch34') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq3[]" id="gridRadios3" value="5">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch35') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq3[]" id="gridRadios3" value="6">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch36') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq3[]" id="gridRadios3" value="7">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch37') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq3[]" id="gridRadios3" value="8">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch38') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq3[]" id="gridRadios3" value="9">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch39') }}
                        </label>
                        </div>
                    </div>
                    </div>
                </fieldset>
                </div>

                <div class="col-md-12 form-group">
                <fieldset class="form-group">
                <legend class="col-form-label col-sm-10 pt-0">{{ __('messages.q4') }}</legend>
                    <div class="row">

                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq4[]" id="gridRadios1" value="1">
                        <label class="form-check-label" for="gridRadios1">
                        {{ __('messages.ch41') }}
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq4[]" id="gridRadios2" value="2">
                        <label class="form-check-label" for="gridRadios2">
                        {{ __('messages.ch42') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq4[]" id="gridRadios3" value="3">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch43') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq4[]" id="gridRadios3" value="4">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch44') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq4[]" id="gridRadios3" value="5">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch45') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq4[]" id="gridRadios3" value="6">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch46') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq4[]" id="gridRadios3" value="7">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch47') }}
                        </label>
                        </div>

                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq4[]" id="gridRadios3" value="8">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch48') }}
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="gridRadiosq4[]" id="gridRadios3" value="9">
                        <label class="form-check-label" for="gridRadios3">
                        {{ __('messages.ch49') }}
                        </label>
                        </div>
                    </div>
                    </div>
                </fieldset>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">{{ __('messages.qtemps') }}</label>
                  <input type="text" class="form-control" name="dureet" id="dureet"  required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="submit" class="btn btn-primary d-block w-100" value="{{ __('messages.okform') }}">
                </div>
              </div>


              {!! Form::close() !!}
          </div>

        </div>
      </div>
    </section>

@endsection
