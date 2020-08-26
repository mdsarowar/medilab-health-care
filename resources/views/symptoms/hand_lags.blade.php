@extends('index')
@section('conte')
<link href="{{asset('symptom/css/style.css')}}" rel="stylesheet">
<section id="s" class="appointment section-b">
    <div class="container">
        <div class="hadding">
          
            <!-- <h1><b> Select your problem and match your symptoms , related doctor list are here  </b></h1> -->
            <h1><b><center> Symptoms | hand/lag </center></b></h1>
            <h3><center>Match your Symptoms and see doctors </center></h2>
            <br><br>
        </div>
        <div class="list">
          <div class="box"><a href="#">Blue Colored Skin</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Broken Bone (single fracture)</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Bruising or discoloration</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Burning feet</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Cold feet</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Color Change </a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Drainage or Pus</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Lump or Bulge</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Muscle cramps or spasms (painful)</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Night lag cramps</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">less </a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Numbness or tingling</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Pain or discomfort</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Shuffling gait (feet)</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Stiffness or decreased movement</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Swelling due to injury</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Swelling of the legs </a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Tenderness of the legs</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Unable to bear touch</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Weakness</a>
           <a href="{{URL('showdoctorlist'.'orthopedic')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
         
        </div>
    </div>
</section>
@endsection