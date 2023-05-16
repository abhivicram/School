@extends('layouts.master')




@section('content')


	<div class="container">
		<table class="table">
			<thead>
				<tr>
			
					<td>Name of Student</td>
					<td>Parent Name</td>
					<td>Opted Courses</td>
					<td>Enable or Disable</td>

				</tr>
			</thead>
			<tbody>

				@foreach($student as $key)
				<tr>
			
					<td>{{ $key->Name }}</td>
					<td>{{ $key->tbl__parents_Name }}</td>
					<td>{{ ($key->tbl__courses_Course__Name) }}</td>
					<td><input  class="toggle-class" type="checkbox" d data-toggle="toggle" data-style="slow" data-on="Enabled" data-off="Disabled"> 
					</td>

				</tr>
				@endforeach
			</tbody>
		</table>
	</div>



@endsection


@push('scripts')

<script>
  $(function() {
    $('toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })
</script>

<!-- <script>

	$(function() {
	$('.toggle-class').on('change', function()
	{
		var status = $(this).prop('checked') == true ? 1:0;
		var key_id = $(this).data('id');
		$.ajax({
			type:"GET",
			dataType: "json",
			url: '/changeStatus',
			data: {'status': status, 'key_id': key_id},
			success: function(data){
				console.log('Success')
			}

		});
		

	});

	});

</script> -->


@endpush