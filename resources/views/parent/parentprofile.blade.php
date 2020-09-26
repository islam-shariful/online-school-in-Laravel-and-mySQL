@extends('layout.ParentMain')

@section('parentcontent')
@section('title')
My profile
@endsection
<div class="row">
    <div id = "profile_content" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="row justify-content-md-center">
    <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title"> Profile</h4>
                <form class="col-12 profileAjaxForm" >
                    
                    <div class="col-12">
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label"> Name</label>
                            <div class="col-md-9">
                                <label class="col-md-3 col-form-label" >{{$parent->parentname}}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <label class="col-md-6 col-form-label">{{$parent->parentemail}}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label"> Relation</label>
                            <div class="col-md-9">
                                <label class="col-md-3 col-form-label">{{$parent->parentrelation}}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label"> Phone:</label>
                            <div class="col-md-9">
                                <label class="col-md-6 col-form-label">+880{{$parent->parentphone}}</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{route('parent.updateprofile')}}"class="button btn btn-secondary col-xl-4 col-lg-4 col-md-12 col-sm-12">Update Profile</a>
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