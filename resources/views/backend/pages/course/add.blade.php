@extends('backend/main')
@section('content')
<div class="container">
<div class="col-md-12">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif

    @if(Session::has('error'))
        <div class="alert alert-danger">
            {{Session::get('error')}}
        </div>
    @endif
      <h1 class="mt-2"><i class="fa fa-user"></i> Add Course</h1>
        <div class="col-md-12">
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="fname">Course Name </label>
                       <input id="fname" type="text" class="form-control" name="title" value="{{old('cname')}}">
               </div>
                  </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="price">Price</label>
                 <input type="number"  class="form-control" name="price">
             </div>     
         </div>  
         <div class="col-md-4">
            <div class="form-group">
                <label for="Duration">Duration</label>
                 <input type="number" class="form-control" name="duration">
             </div>     
         </div>        
         </div>

<button class="btn btn-info">Add Course</button>

</form>
</div>    
</div>   

@endsection
