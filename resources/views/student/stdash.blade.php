@extends('layout.StudentMain')

@section('studentcontent')

@section('title')
Dashboard
@endsection

<div class="row">
    <div class="col-12 event_calendar_content">
        <div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
              <div class="items">
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
                  <thead>
                    <tr style="background-color: #313a46; color: #ababab;">
                      <th></th>
                      <th>Notices</th>
                    </tr>
                  </thead>
                  <tbody>
                    @for($i=0; $i != count($notice); $i++)
						<tr>
							<td>{{$i+1}}</td>
							<td><b>Date & Time:  </b>{{$notice[$i]->noticedate}}<br><br>
								<b>Subject:  </b>{{$notice[$i]->subjectname}}<br><br>
								 {{$notice[$i]->description}}

							</td>
				    @endfor
                  </tbody>
                </table>
              </div>      
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="items">
					<table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
					  <thead>
						<tr style="background-color: #313a46; color: #ababab;">
							<th>Event Title</th>
							<th>From</th>
							<th>To</th>
						</tr>
					  </thead>
					<tbody>
						@for($i=0; $i != count($event); $i++)
						<tr>
							<td>{{$event[$i]->title}}</td>
							<td>{{$event[$i]->starting}}</td>
							<td>{{$event[$i]->ending}}</td>
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
</div>
</div>

@endsection