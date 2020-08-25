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
.hadding h1{
  text-align: center;
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
.calculation{
  /* overflow: scroll; */
  width: 100%;
  height: 95vh;
  background-size: cover;
  position: relative;
  margin-bottom: 33PX;
  background-color: azure;
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
  /* border: 3px solid #a1d4d3; */
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
.box span{
    color: #b34545;
    font-weight: bold;
    font-size: 30px;
    /* border: solid forestgreen 2px; */
    /* margin-top: 5px; */
    /* margin: 20px; */
}
.box p{
    /* color: #b34545; */
    /* font-weight: bold; */
    font-size: 20px;
    /* border: solid forestgreen 2px; */
    /* margin-top: 5px;
    margin: 20px; */
}
form{
    text-align: center;
}
form button{
    border-radius: 47px;
    color: #d8ded8;
    font-weight: bold;
    background-color: #498421;
    font-size: 20px;
    border: solid #60c515;
}

</style>


   <section id="ibw" class="calculation">
    <div class="container">
        <div class="hadding"><br><br><br>
            <h1> Ideal Body Weight (IBW)| Calculation</h1>
            <br><br>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

          <form method="post" action="{{route('ibwcalcu')}}" >
            @csrf
                
                <label> Select Your Gender : </label> <br><br>
                
                
                <input type="radio" name="gender" value="Male">
                <label>Male</label>
                <input type="radio" name="gender" value="Female">
                <label>Female</label><br><br>

                <label> Enter Your Height : </label> <br><br>
                <label>Feet : </label>
                
                <input type="text" name="feet" placeholder="feet"><br><br>
                <label>Inch : </label>
                <input type="text" name="inches" placeholder="Inch"><br><br>
                <button type="submit">Calculate</button>

                <div>
                <br><br>
                <h1>your Ideal body weight is : {{$sar ?? 'sarowar'}} KG</h1>
                
                </div>
            </form>   
        </div>
       

        
    </div>
    
</section>

<section id="bmi" class="calculation">
    <div class="container">
        <div class="hadding">
            <h1> Body Mass Index (BMI)</h1>
            <br><br>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('bmicalu')}}"method="post">
            @csrf
              <label> Select Your Gender : </label><br><br>
              <input type="radio" name="gender" value="Male">
              <label>Male</label>
              <input type="radio" name="gender" value="Female">
              <label>Female</label><br><br>

              <label> Enter Your Height : </label><br><br>
              <label>Feet : </label>
              <input type="text" name="ft" placeholder="feet"><br><br>
              <label>Inch : </label>
              <input type="text" name="inc" placeholder="Inch"><br><br>
              <label>Enter Your Weight (Kg):  </label> <br><br>
              <input type="text" name="wt" placeholder="Weight"><br><br>
              <button type="submit">Calculate</button>
          </form>
          <div class="result">
              <h3>Ideal Body Weight (IBW): {{$sarr ?? ''}} KG</h3>
          </div>
        </div>
        
    </div>
</section>

@endsection