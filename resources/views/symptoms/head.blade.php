@extends('index')
@section('conte')
<link href="{{asset('symptom/css/style.css')}}" rel="stylesheet">
<section id="s" class="appointment section-b">
    <div class="container">
        <div class="hadding">
          
            <!-- <h1><b> Select your problem and match your symptoms , related doctor list are here  </b></h1> -->
            <h1><b><center> Symptoms | Head </center></b></h1>
            <h3><center> Match your Symptoms and see doctors </center></h3>
            <br><br>
        </div>
        <div class="list">
          <div class="box"><a href="#">Agitation</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Anxiety</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Apathy</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Bald spots (hair)</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Blackouts (memory time loss)</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Bleeding</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Bleeding from nose</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Blue colored skin </a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Brittle hair</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Broken bone (single fracture)</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Broken bones (multiple fractures)</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Bruising or discoloration</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Cold hands</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Color change</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Coma</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Compulsive behavior</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
          <div class="box"><a href="#">Confusion</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Crawling sensation</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Depressed mood</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Difficult to wake from sleep</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Difficult concentration</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Difficult falling asleep</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Difficult learning new things</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Difficult sleeping</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Difficult solving problems</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Difficult staying asleep</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Difficult staying awake during day</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Disorientation</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Dizziness</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Drainage or pus</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Drowsiness</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Easily distracted</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Emotional detachment</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Eye problems (anykind)</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Fainting</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Fear of air</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Fear of gaining weight</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Fear of water</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Feeling of being detached from reality</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Feeling smothered</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Feeling something moving on scalp</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Flashbacks</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div> 
           <div class="box"><a href="#">Forgetfulness</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Frightening dreams</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Frightening thoughts</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Headache</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Headache with eye problem</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Hearing voices</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Impaired color vision</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Impaired judgment</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Impaired social skills</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Inappropriate behavior</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Involuntary movements (picking,lip smacking etc)</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Lack of emotion</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Lack of motivation</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Lack of pleasure</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Lightheadedness</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Loss of consciousness</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Lump or bulge</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Memory problems</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Mood swings</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Multiple bruises of different ages</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">muscle cramps or spasms (painful)</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Muscle twitching (painless)</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Numbness or tingling</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">pain or discomfort</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">pain or discomfort in head</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">pain or discomfort in head with cold allergies</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Personality changes</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Poor concentration</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Pulling out hair</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Punching or kicking in sleep</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Repetitive behaviors</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Restless (tossing and turning) sleep</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Sadness</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Shaking hands or tremor</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Skin irritation</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Sleeping walking</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Slow thinking</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Spinning sensation</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Swelling</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Tenderness</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Tenderness to touch</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Unable to grip (hands)</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Unusual behavior</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Visible deformity</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">Warm to touch</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
           <div class="box"><a href="#">White specks on scalp or hair</a>
           <a href="{{URL('showdoctorlist'.'neurology')}} " id="but" class="btn btn-sm btn-success">Doctor</a>
          </div>
        </div>
    </div>
</section>

@endsection