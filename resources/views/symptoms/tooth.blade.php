@extends('index')
@section('conte')
<link href="{{asset('symptom/css/style.css')}}" rel="stylesheet">
<section id="s" class="appointment section-b">
    <div class="container">
        <div class="hadding">
          
            <!-- <h1><b> Select your problem and match your symptoms , related doctor list are here  </b></h1> -->
            <h1><b><center> Symptoms | Tooth </center></b></h1>
            <h3><center> Match your Symptoms and see doctors </center></h3>
            <br><br>
        </div>
        <div class="list">
          <div class="box"><a href="#">Any kind of tooth problem</a>
           <a href="{{URL('showdoctorlist'.'dentist')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
                  
        </div>
    </div>
</section>
@endsection