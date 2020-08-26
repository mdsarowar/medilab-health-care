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
    background-color: #1977cc;
    font-size: 20px;
     border: solid #1977cc;
}
#bmi{
  overflow:scroll;
}
h5{
  color:red;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
                <h1>your Ideal body weight is : {{$sar ?? '00'}} kg</h1>
                
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
              <h3>Ideal Body Weight (IBW): {{$sarr ?? '00'}} kg/m<sup>2</sup> </h3>
          </div>
        </div>
        <div class="table">
        <h5>The standard weight status categories associated with BMI ranges for adults are shown in the following table . </h5>
        <table>
          <tr>
            <th><b>BMI</b></th>
            <th><b>Weight Status</b></th>
          </tr>
          <tr>
            <td>Below 18.5</td>
            <td>Underweight</td>
            
          </tr>
          <tr>
            <td>18.5 - 24.9 </td>
            <td>Normal or Healthy Weight</td>
            
          </tr>
          <tr>
            <td>25.0 - 29.9</td>
            <td>Overweight</td>
          </tr>
          <tr>
            <td>30.0 and Above</td>
            <td>Obese</td>
            
          </tr>
          
        </table>
        
        </div>
        
    </div>
</section>

@endsection