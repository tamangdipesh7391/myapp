@extends('frontend/main')
@section('content')
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Display Student Table</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li> Display Student </li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
<hr>
<div class="container">
    
    @if($studentData->count() > 0)
    <div class="col-md-12">
        <input type="search" class="form-control" id="table_search"> <br>
        <table class="table table-bordered">
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>gender</th>
                <th>City</th>
                <th>country</th>
                <th>email</th>
                <th>phone</th>
                <th>status</th>
               
            </tr>
            @foreach($studentData as $key => $data)
    
            <tr>
                <td>{{++$key}}</td>
                <td>{{$data->fname}} {{$data->mname}} {{$data->lname}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->city}}</td>
                <td>{{$data->country}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>
                    @if($data->status == 1)
                   
                    <a  class="btn-sm btn btn-success">Active</a>
                    @else
                   
                    <a  class="btn-sm btn btn-danger">Inactive</a>
                    @endif
                </td>
               
            </tr>
            @endforeach
    
        </table>
      
      
    </div>
    @else
    <p style="color:red;">No data avilable.</p>
    @endif
</div>
@endsection