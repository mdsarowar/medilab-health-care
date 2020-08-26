@extends('index')
@section('conte')
<style>

body{
    margin: 0px;
    padding: 0px;
}
#back{
  width: 100%;
    height: 95vh;
    background: url(../img/amb.png) top center;
    background-size: cover;
    position: relative;
    margin-bottom: 33PX;

}
.hadding{
  color:  #082744;
    padding: 2px;
    margin: 5px;
}

li {
  display: grid;
  grid-template-columns: 1fr 1fr;
}
ul{
  /* background-color: aliceblue; */
  /* list-style-type: circle; */
}
a{
    color: #082744;
}
#s{
  overflow: scroll;
  width: 100%;
  height: 95vh;
  background: url(assets/img/hh.jpg) top center;
  
  background-size: cover;
  position: relative;
  margin-bottom: 33PX;
}
.list{
  display: grid;
  grid-template-columns:repeat(auto-fit);
 
}
.container{
  display: grid;
  
  /* margin: 30px;
  justify-items: center; */

}
 .box{
   /* opacity: 0.4; */
   border: 3px solid #a1d4d3;
   margin: 3px;
   padding: 3px;

 }
 .box a{
   padding-left: 30px;
   font-size: 20px;
 }
 .box:hover{
   opacity: 1;
 }


  </style>


<body>
  <section id="s" class="appointment section-b">
    <div class="container">
        <div class="hadding">
          
            <!-- <h1><b> Select your problem and match your symptoms , related doctor list are here  </b></h1> -->
            <h1><b> Select the body part of your problem. </b></h1>
            <br><br>
        </div>
        <div class="list">
          <div class="box"><a href="{{URL('/children')}}">Children Symptoms</a></div>
          <div class="box"><a href="{{URL('/head')}}">Head</a></div>
          <div class="box"><a href="{{URL('/eye')}}">Eye</a></div>
          <div class="box"><a href="{{URL('/tooth')}}">Tooth</a></div>
          <div class="box"><a href="{{URL('ear')}}">Ear/Nose/Throat</a></div>
          <div class="box"><a href="{{URL('/skin')}}">Skin</a></div>
          <div class="box"><a href="{{URL('/chest')}}">Chest</a></div>
          <div class="box"><a href="{{URL('/stomach')}}">Stomach</a></div>
          <div class="box"><a href="{{URL('/hand')}}">Hand /leg</a></div>
          
        </div>
    </div>
</section>
@endsection