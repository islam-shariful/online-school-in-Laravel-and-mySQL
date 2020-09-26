@extends('layout.StudentMain')

@section('studentcontent')

@section('title')
Class Routine
@endsection

<div class="row" >
	<div class="col-12">
		<div class="card">
			<div class="card-body"id="html-2-pdfwrapper">
					<table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
					  <thead>
						<tr style="background-color: #313a46; color: #ababab;">
							<th>Day/Time</th>
							<th>9AM-10AM</th>
							<th>10AM-11AM</th>
							<th>11AM-12AM</th>
							<th>1PM-2PM</th>
						</tr>
					  </thead>
					<tbody>
				     	<tr>
							<td>Saturday</td>
							@for($i=0; $i != count($saturday); $i++)
							<td><b>Subject: </b>{{$saturday[$i]->subjectname}}<br>
								<b>Teacher: </b>{{$saturday[$i]->teachername}}
							</td>
							@endfor
						</tr>
						<tr>
							<td>Sunday</td>
							@for($i=0; $i != count($sunday); $i++)
							<td><b>Subject: </b>{{$sunday[$i]->subjectname}}<br>
								<b>Teacher: </b>{{$sunday[$i]->teachername}}
							</td>
							@endfor
						</tr>
						<tr>
							<td>Monday</td>
						    @for($i=0; $i != count($monday); $i++)
							<td><b>Subject: </b>{{$monday[$i]->subjectname}}<br>
								<b>Teacher: </b>{{$monday[$i]->teachername}}
							</td>
							@endfor
						</tr>
						<tr>
							<td>Tuesday</td>
							@for($i=0; $i != count($tuesday); $i++)
							<td><b>Subject: </b>{{$tuesday[$i]->subjectname}}<br>
								<b>Teacher: </b>{{$tuesday[$i]->teachername}}
							</td>
							@endfor
						</tr>
						<tr>
							<td>Wednesday</td>
							@for($i=0; $i != count($wednesday); $i++)
							<td><b>Subject: </b>{{$wednesday[$i]->subjectname}}<br>
								<b>Teacher: </b>{{$wednesday[$i]->teachername}}
							</td>
							@endfor
						</tr>
						<tr>
							<td>Thursday</td>
							@for($i=0; $i != count($thursday); $i++)
							<td><b>Subject: </b>{{$thursday[$i]->subjectname}}<br>
								<b>Teacher: </b>{{$thursday[$i]->teachername}}
							</td>
							@endfor
						</tr>
						<tr>
							<td>Friday</td>
							<td>Weekly Off Day</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
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