
@extends('backend/main')
@section('content')
        <div class="col-md-12">
            <h1 class="mt-2"><i class="fa fa-user"></i> Edit Student</h1>
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
        </div>
        <div class="col-md-12">
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fname">First Name </label>
                            <input id="fname" type="text" class="form-control" name="fname" value="{{$editData->fname}}">
                       
                        <a style="color:red;">
                            @error('fname')
                                {{ $message }}
                            @enderror
                        </a>
                     </div>
                     </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Middle Name</label>
                            <input type="text" class="form-control" name="mname" value="{{$editData->mname}}">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="lname" value="{{$editData->lname}}">
                            <a style="color:red;">
                                @error('lname')
                                    {{ $message }}
                                @enderror
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Gender</label>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="male">
                                    <input type="radio" id="male" name="gender" value="male" 
                                    @if ($editData->gender == 'male' )
                                        {{"checked"}}
                                    @endif
                                   
                                   
                                    >Male
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="female">
                                    <input type="radio" 
                                    @if ($editData->gender == 'female' )
                                    {{"checked"}}
                                @endif
                                    id="female" name="gender" value="female">Female
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="others">
                                    <input type="radio" 
                                    @if ($editData->gender == 'others' )
                                    {{"checked"}}
                                @endif
                                 id="others" name="gender" value="others">Others
                                </label>
                            </div>
                            <a style="color:red;">
                                @error('gender')
                                    {{ $message }}
                                @enderror
                            </a>
                        </div>


                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" class="form-control" name="city" value="{{$editData->city}}">
                            <a style="color:red;">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Country</label>
                            <select name="country" id="" class="form-control select2Dropdown">
                                <option selected disabled>Choose Country</option>
                                <option 
                                
                                @if ($editData->country == 'nepal' )
                                    {{"selected"}}
                                @endif
                                value="nepal">Nepal</option>
                                <option value="china"
                                
                                @if ($editData->country == 'china' )
                                {{"selected"}}
                            
                                @endif
                                >China</option>
                                <option value="india"
                                @if ($editData->country == 'india' )
                                {{"selected"}}
                            @endif
                                >India</option>
                                <option 
                                @if ($editData->country == 'usa' )
                                    {{"selected"}}
                                @endif
                                 @if ($editData->country == 'usa' )
                                    {{"selected"}}
                                @endif value="usa" 
                                >USA</option>
                                <option 
                                @if ($editData->country == 'uk' )
                                {{"selected"}}
                            @endif
                                value="uk">UK</option>

                            </select>
                       
                        <a style="color:red;">
                            @error('country')
                                {{ $message }}
                            @enderror
                        </a>
                     </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{$editData->phone}}">
                            <a style="color:red;">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$editData->email}}">
                            <a style="color:red;">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </a>
                        </div>
                    </div>
                </div>

                <button class="btn btn-info">Update Student</button>

            </form>
        </div>

@endsection
