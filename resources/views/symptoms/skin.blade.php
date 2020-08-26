@extends('index')
@section('conte')
<link href="{{asset('symptom/css/style.css')}}" rel="stylesheet">
<section id="s" class="appointment section-b">
    <div class="container">
        <div class="hadding">
          
            <!-- <h1><b> Select your problem and match your symptoms , related doctor list are here  </b></h1> -->
            <h1><b><center> Symptoms | stomach </center></b></h1>
            <h3><center> Match your Symptoms and see doctors </center></h2>
            <br><br>
        </div>
        <div class="list">
          <div class="box"><a href="#">Any kind of skin problem .</a>
           <a href="{{URL('showdoctorlist'.'dermatologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Dry skin </a>
          <a href="{{URL('showdoctorlist'.'dermatologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>  
          <div class="box"><a href="#">Flaking skin</a>
          <a href="{{URL('showdoctorlist'.'dermatologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Hair loss</a>
          <a href="{{URL('showdoctorlist'.'dermatologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Hot , Dry skin</a>
          <a href="{{URL('showdoctorlist'.'dermatologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Hot Dry skin due to sun exposer</a>
          <a href="{{URL('showdoctorlist'.'dermatologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Itching or burning</a>
          <a href="{{URL('showdoctorlist'.'dermatologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Itchy skin</a>
          <a href="{{URL('showdoctorlist'.'dermatologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Peeling skin</a>
          <a href="{{URL('showdoctorlist'.'dermatologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Skin Peeling  , cracking or scaling</a>
          <a href="{{URL('showdoctorlist'.'dermatologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>  
          <div class="box"><a href="#">Under-eye circles</a>
          <a href="{{URL('showdoctorlist'.'dermatologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">White ptech on skin</a>
          <a href="{{URL('showdoctorlist'.'dermatologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
         
        </div>
    </div>
</section>
@endsection