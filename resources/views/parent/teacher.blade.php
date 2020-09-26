@extends('layout.ParentMain')

@section('parentcontent')

@section('title')
Teachers
@endsection

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body teacher_content">
                
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
                <div class="alert-secondary">{{ $errors->first('uploadfile') }}</div>
                    <thead>
                        <tr style="background-color: #313a46; color: #ababab;">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Send File (File Size must be less than 1 MB)</th>
                        </tr>
                    </thead>
                    <tbody id="searchteacher"> 
                    @for($i=0; $i != count($teacher); $i++)
                    <form action="{{asset('/parent/upload')}}/{{$teacher[$i]->teacher_id}}", method="post", enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <tr>
                            <td>{{$teacher[$i]->teachername}}</td>
                            <td>{{$teacher[$i]->teacheremail}}</td>
                            <td>{{$teacher[$i]->teacherdepartment}}</td>
                            <td>{{$teacher[$i]->teacherdesignation}}</td>
                            <td><input class="" type="file" name="uploadfile"/><input class="btn btn btn-secondary" type="submit" value="Upload"/></td>
                        </tr>
                        </form>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
    @endsection