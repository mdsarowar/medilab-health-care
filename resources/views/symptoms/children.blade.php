@extends('index')
@section('conte')
<link href="{{asset('symptom/css/style.css')}}" rel="stylesheet">
<section id="s" class="appointment section-b">
    <div class="container">
        <div class="hadding">
          
            <!-- <h1><b> Select your problem and match your symptoms , related doctor list are here  </b></h1> -->
            <h1><b><center> Symptoms | Children </center></b></h1>
            <h3><center> Select your Symptoms </center></h2>
            <br><br>
        </div>
        <div class="list">
          <div class="box"><a href="#">Cardiac problem</a></div>
          <div class="box"><a href="#">Gneral problem</a></div>
          <div class="box"><a href="#">Mantal problem</a></div>
          <div class="box"><a href="#">Neonatal problem</a></div>
          <div class="box"><a href="#">Neurological problem</a></div>
          <div class="box"><a href="#">surgical problem</a></div>
     
        </div>
    </div>
</section>
@endsection