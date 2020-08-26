@extends('index')
@section('conte')
    <section id="onlineform" class="appointment section-bg">
        <div class="container">

            <div class="section-title">
            <h2>Write Your Problem</h2>
            <p></p>
            </div>
            <!-- role="form" class="php-email-form" -->
            <form action="{{URL('submit/doctor')}}" method="post"  class="php-email-form">
            @csrf
            <div class="form-row">
               
                
                </div>
                <div class="col-md-3 form-group">
                <label for="">doctor name : </label>  <input type="text" name="name" class="form-control" id="name" placeholder="Name"  "> 
                
                </div>
                <div class="col-md-4 form-group">
                <label for="">doctor Email : </label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" ">
                
                </div>
                <div class="col-md-4 form-group">
                <label for="">phone  number : </label>
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" ">
            </div>
                <div class="col-md-4 form-group">
                
              <select name="depar" id="depar" class="form-control">
                <option value="">Select Department</option>
                <option value="cardiology">cardiology</option>
                <option value="neurology">neurology </option>
                <option value="orthopedic">orthopedic</option>
                <option value="opthalmologist">opthalmologist</option>
                <option value="ent">ent specialist</option>
                <option value="dermatologist">dermatologist</option>
                <option value="medicine">medicine</option>
                <option value="dentist">dentist</option>
              </select>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="detail" rows="5" placeholder="write here doctor details"></textarea>
                <div class="validate"></div>
            </div>
            
            <div class="text-center"><button type="submit">Submit </button></div>
            </form>

        </div>
        </section>
@endsection