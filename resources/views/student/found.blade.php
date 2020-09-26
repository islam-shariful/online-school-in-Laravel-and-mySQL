@extends('layout.StudentMain')

@section('studentcontent')
@section('title')
Lost & Found
@endsection
  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body teacher_content">
            <div class="row">
                    <div class=" col-sm-12 col-md-4">
                        <label>Search:</label>
                            <input id="lost" type="text" placeholder="Enter Text" class="form-control form-control-sm" aria-controls="basic-datatable">
                    </div>
                </div><br>
                <div class="items">
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
                    <thead>
                        <tr style="background-color: #313a46; color: #ababab;">
                            <th>Item</th>
                            <th>Description</th>
                            <th>Lost Date</th>
                            <th>Found</th>
                            <th>Received</th>
                        </tr>
                    </thead>
                    <tbody id="lostfound">
                        @for($i=0; $i != count($found); $i++)
                        <tr>
                            <td>{{$found[$i]->lostname}}</td>
                            <td>{{$found[$i]->lostdescription}}</td>
                            <td>{{$found[$i]->lostday}}</td>
                            <td>{{$found[$i]->found}}</td>
                            <td>{{$found[$i]->received}}</td>
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
<script type="text/javascript">

    $('body').on('keyup','#lost',function(){
        var lostfound = $(this).val();
        $.ajax({
            method: 'POST',
            url: '{{ route("student.lostfoundsearch")}}',
            dataType: 'json',
            data: {
                '_token': '{{ csrf_token()}}',
                lostfound: lostfound,
            },
            success: function(res){
                var tableRow ='';
                $('#lostfound').html('');
                $.each(res, function(index, value){
                    tableRow = '<tr><td>'+value.lostname+'</td><td>'+value.lostdescription+'</td><td>'+value.lostday+'</td><td>'+value.found+'</td><td>'+value.received+'</td></tr>';

                    $('#lostfound').append(tableRow);
                });
            }
        });
    });

</script>

@endsection