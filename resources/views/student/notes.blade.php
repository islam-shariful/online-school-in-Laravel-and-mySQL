@extends('layout.StudentMain')

@section('studentcontent')
@section('title')
Notes
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
							<th>Date</th>
							<th>Download</th>
						</tr>
					  </thead>
					<tbody>
                        @for($i=0; $i != count($notes); $i++)
                        <tr>
                        	<td width="1%">{{$i+1}}</td>
                            <td width="25%">{{$notes[$i]->filename}}</td>
							<td width="25%">{{$notes[$i]->subjectname}}</td>
							<td width="25%">{{$notes[$i]->date}}</td>
                            <td width="24%"><a class="btn btn btn-secondary" href="/student/file/{{$notes[$i]->directory}}" download><i class="fa fa-download" style="width:50%"></i> Download</a></td>
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