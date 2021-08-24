@extends('layouts.stud')

@section('title', 'Pre-Enlistment')

<style>
	.checkbox{
		vertical-align: middle;
		text-align:center;
	}
</style>

@section('content')
	<div class="container">
		<div class="card" style="margin-top: 25px">
			<div class="card-header text-white" style="background-color: #e19021">
				Pre-Enlistment
			</div>
			<div class="card-body">
				<table class="table table-responsive table-sm" id="students_table">
					<thead>
						<tr>
							<th scope="col">Last Name</th>
							<th scope="col">First Name</th>
							<th scope="col">Middle Initial</th>
							<th scope="col">Suffix</th>
							<th scope="col">Schedule</th>
							<th scope="col">Results</th>
							<th scope="col">Status</th>
							<th scope="col">Report Card</th>
							<th scope="col">Birth Cert</th>
							<th scope="col">Med Cert</th>	
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