@extends('index')
@section('conte')
<link href="{{asset('symptom/css/style.css')}}" rel="stylesheet">
<section id="s" class="appointment section-b">
    <div class="container">
        <div class="hadding">
          
            <!-- <h1><b> Select your problem and match your symptoms , related doctor list are here  </b></h1> -->
            <h1><b><center> Symptoms | Chest </center></b></h1>
            <h3><center> Match your Symptoms and see doctors  </center></h2>
            <br><br>
        </div>
        <div class="list">
          <div class="box"><a href="#">Breast lumps</a>
           <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Breast rash </a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>  
          <div class="box"><a href="#">Chest tightness with breathlessness</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Chest tightness with chest pain</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Choking</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Cough</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Coughing up blood</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Discharge from nipple</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Heartburn</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Irregular heartbeat</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>  
          <div class="box"><a href="#">Pain or discomfort in brest women/men</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Pain or discomfort in chest</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Pain or discomfort in chest with difficulty in swallowing</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Pain or discomfort in chest/lungs with cough & breathlessness</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Palpitations(fluttering in chest)</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Pounding heart(pulse)</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Pressure or heaving of chest</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Rapid/Deep breathing</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>  
          <div class="box"><a href="#">Shortness of breath</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Slow heart rate (pulse)</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Wheezing</a>
          <a href="{{URL('showdoctorlist'.'medicine')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>          
        </div>
    </div>
</section>

@endsection