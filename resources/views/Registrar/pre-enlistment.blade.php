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
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Sy</td>
							<td>Angela Rizza Lorraine</td>
							<td>G</td>
							<td>III</td>
							<td>05/13/21</td>
							<td class="dropdown">
								<select>
									<option value=""></option>
									<option value="Accepted">Accepted</option>
									<option value="Rejected">Rejected</option>
									<option value="Waiting">Waiting</option>
								</select>
							</td>	
							<td class="dropdown">
								<select>
									<option value=""></option>
									<option value="Waiting for Confirmation">Waiting for Confirmation</option>
									<option value="Enrollment Verified">Enrollment Verified</option>
								</select>
							</td>
							<td class='checkbox'><input type="checkbox" name="reportcard"></td>
							<td class='checkbox'><input type="checkbox" name="birthcert"></td>
							<td class='checkbox'><input type="checkbox" name="medcert"></td>
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