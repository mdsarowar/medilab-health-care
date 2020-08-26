@extends('index')
@section('conte')
<link href="{{asset('symptom/css/style.css')}}" rel="stylesheet">
<section id="s" class="appointment section-b">
    <div class="container">
        <div class="hadding">
          
            <!-- <h1><b> Select your problem and match your symptoms , related doctor list are here  </b></h1> -->
            <h1><b><center> Symptoms | Eye </center></b></h1>
            <h3><center>  Match your Symptoms and see doctors </center></h2>
            <br><br>
        </div>
        <div class="list">
          <div class="box"><a href="#">Any kind of eye problem</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Blurred vision</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Crusting & mattering of the lashes</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Decrease vision</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Difficulty with night vision</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Double vision</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Eye discharge</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Eye itching/itchy eyes</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Eyeache</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Foreign body sensation</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Light sensitivity (Photophobia)</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Occular (eye) irritation</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Pain in the eyes</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Redness of eye</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Swelling of eyelid</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Tearing / watering from eye</a>
           <a href="{{URL('showdoctorlist'.'opthalmologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div> 
        </div>
    </div>
</section>
@endsection