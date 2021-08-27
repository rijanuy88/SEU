@extends('layouts.employee')

@section('title', 'Pre-Enlistment')

<style>
	.checkbox{
		vertical-align: middle;
		text-align:center;
	}
</style>

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header text-white" style="background-color: #e19021">
				Pre-Enlistment
			</div>
			<div class="card-body" style="overflow-x:auto">
				<table class="table table-responsive table-sm" style="vertical-align:middle" id="students_table">
					<thead>
						<tr>
							<th scope="col">LAST NAME</th>
                            <th scope="col">FIRST NAME</th>
							<th scope="col">MIDDLE INITIAL</th>
							<th scope="col">SUFFIX</th>
                            <th scope="col">SCHEDULE</th>
							<th scope="col">RESULTS</th>
							<th scope="col">STATUS</th>
                            <th scope="col">REPORT CARD</th>
							<th scope="col">BIRTH CERT</th>
							<th scope="col">MED CERT</th>	
							<th scope="col">ACTION</th>	
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Sy</td>
							<td>Angela Rizza Lorraine</td>
							<td>G</td>
							<td>III</td>
							<td>05/13/21</td>
							<td>Passed</td>	
							<td>Waiting</td>
							<td>Yes</td>
							<td>Yes</td>
							<td>Yes</td>
							<td><button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editcurriculumModal"><i class="bi bi-pencil-square"></i></button>
								<button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection


@section('scripts')
	<script type="text/javascript">
		$(document).ready( function () {
		    $('#students_table').DataTable({
		    	"paging": false,
		    	"searching": false,
		    	"ordering": false,
		    	"info": false,
		    	"language": {"zeroRecords": "No enrolled courses"}
		    });
		} );
	</script>
@endsection