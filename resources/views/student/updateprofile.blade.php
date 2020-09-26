@extends('layout.StudentMain')

@section('studentcontent')

@section('title')
Manage Profile
@endsection
<div class="row">
    <div id = "profile_content" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="row justify-content-md-center">
    <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Update Profile</h4>
                
                <form method="POST" class="col-12 " action="{{route('student.updateprofile')}}">
        
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="col-12">
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="">Student ID </label>
                            <div class="col-md-9">
                                <input type="text" id="" name="" class="form-control"  value="{{$student->student_id}}" readonly>
                                <!-- <div class="alert-secondary">{{ $errors->first('name') }}</div> -->
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="name"> Name</label>
                            <div class="col-md-9">
                                <input type="text" id="name" name="name" class="form-control"  value="{{$student->studentname}}" >
                                <div class="alert-secondary">{{ $errors->first('name') }}</div>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="email">Email</label>
                            <div class="col-md-9">
                                <input type="email" id="email" name="email" class="form-control"  value="{{$student->studentemail}}" >
                                <div class="alert-secondary">{{ $errors->first('email') }}</div>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="fathername">Father Name</label>
                            <div class="col-md-9">
                                <input type="text" id="name" name="fathername" class="form-control"  value="{{$student->studentfathername}}" >
                                <div class="alert-secondary">{{ $errors->first('fathername') }}</div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="mothername"> Mother Name</label>
                            <div class="col-md-9">
                                <input type="text" id="name" name="mothername" class="form-control"  value="{{$student->studentmothername}}" >
                                <div class="alert-secondary">{{ $errors->first('mothername') }}</div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="phone"> Phone</label>
                            <label class="col-md-0.7 col-form-label" for="phone"> +880</label>
                            <div class="col-md-8.3">
                                <input type="text" id="phone" name="phone" class="form-control"  value="{{$student->guardiannumber}}">
                                <div class="alert-secondary">{{ $errors->first('phone') }}</div>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="address"> Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="address" name = "address" rows="5" value="{{$student->studentaddress}}">{{$student->studentaddress}}</textarea>
                                <div class="alert-secondary">{{ $errors->first('address') }}</div>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-secondary col-xl-4 col-lg-4 col-md-12 col-sm-12">Update Profile</button>
                        </div>
                    </div>
                    
                </form>
                        
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection