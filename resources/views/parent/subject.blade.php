@extends('layout.ParentMain')

@section('parentcontent')

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

                        @for($i=0; $i != count($subject->result); $i++)
                        <tr>
                            <td>{{$subject->result[$i]->subject_id}}</td>
                            <td>{{$subject->result[$i]->subjectname}}</td>
                            <td>{{$subject->result[$i]->teachername}}</td>
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