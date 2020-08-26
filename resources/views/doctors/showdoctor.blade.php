@extends('index')
@section('conte')

<div class="row justify-content-center">
    <div class="appoinment_form_section lite_bg">
        <table class="table table-responsive">
        <br>
<br>
<br>
        <tr>
        <br>
<br>
<br>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Details</th>
            <th>Department</th>
            
        </tr>
        <tr>
        @foreach($res as $row)
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->phone}}</td>
            <td>{{$row->details}}</td>
            <td>{{$row->department}}</td>
            <td>
            <!-- <a href="" class="btn btn-sm btn-info">edit</a>
            <a href="" class="btn btn-sm btn-denger">delet</a> -->
            <!-- <a href="" class="btn btn-sm btn-success">view</a> -->
          
            </td>
        </tr>
        @endforeach
        </table>

    </div>
</div>
@endsection