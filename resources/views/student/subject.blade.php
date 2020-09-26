@extends('layout.StudentMain')

@section('studentcontent')

@section('title')
Subjects
@endsection


  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body teacher_content">
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
                    <thead>
                        <tr style="background-color: #313a46; color: #ababab;">
                            <th>Subject Code</th>
                            <th>Subject Name</th>
                            <th>Teacher Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i != count($subject); $i++)
                        <tr>
                            <td>{{$subject[$i]->subject_id}}</td>
                            <td>{{$subject[$i]->subjectname}}</td>
                            <td>{{$subject[$i]->teachername}}</td>
                        </tr>
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