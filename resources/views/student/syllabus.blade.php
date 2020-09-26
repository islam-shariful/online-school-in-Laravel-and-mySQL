@extends('layout.StudentMain')

@section('studentcontent')

@section('title')
Syllabus
@endsection

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
					<table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
					  <thead>
						<tr style="background-color: #313a46; color: #ababab;">
							<th></th>
							<th>Title</th>
							<th>Subject</th>
							<th>Download</th>
						</tr>
					  </thead>
					<tbody>
                        @for($i=0; $i != count($syllabus); $i++)
                        <tr>
                        	<td>{{$i+1}}</td>
                            <td>{{$syllabus[$i]->title}}</td>
                            <td>{{$syllabus[$i]->subjectname}}</td>
                            <td><a class="btn btn btn-secondary" href="/student/file/{{$syllabus[$i]->directory}}" download><i class="fa fa-download" style="width:50%"></i> Download</a></td>
						@endfor
						</tr>
							
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