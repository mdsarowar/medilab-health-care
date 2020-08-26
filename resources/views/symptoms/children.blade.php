@extends('index')
@section('conte')
<link href="{{asset('symptom/css/style.css')}}" rel="stylesheet">
<section id="s" class="appointment section-b">
    <div class="container">
        <div class="hadding">
          
            <!-- <h1><b> Select your problem and match your symptoms , related doctor list are here  </b></h1> -->
            <h1><b><center> Symptoms | Children </center></b></h1>
            <h3><center> Match your Symptoms and see doctors  </center></h2>
            <br><br>
        </div>
        <div class="list">
          <div class="box"><a href="#">Cardiac problem</a>
           <a href="{{URL('showdoctorlist'.'cardiology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Gneral problem</a>
           <a href="{{URL('showdoctorlist'.'dermatologist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Mantal problem</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Neonatal problem</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Neurological problem</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">surgical problem</a>
           <a href="{{URL('showdoctorlist'.'cardiology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
     
        </div>
    </div>
</section>
@endsection