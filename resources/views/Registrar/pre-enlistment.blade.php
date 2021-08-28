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
							<td>
								<a type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
								<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editStatusModal"><i class="bi bi-pencil-square"></i></button>
								<button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

@section('modals')
<!--Edit Modal -->
<div class="modal fade" id="editStatusModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="courseModalLabel">Edit Employee</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST">
						@csrf
						<div class="mb-3">
                            <div><label>Last Name</label></div>
                            <div><input type="text" class="form-control" name="lastname" required></div>
						</div>
                        <div class="mb-3">
                            <div><label>First Name</label></div>
                            <div><input type="text" class="form-control" name="firstname" required></div>
						</div>
                        <div class="mb-3">
                            <div><label>Middle Name</label></div>
                            <div><input type="text" class="form-control" name="middlename" required></div>
						</div>
                        <div class="mb-3">
                            <div><label>Suffix</label></div>
                            <div><input type="text" class="form-control" name="suffix" required></div>
						</div>
                        <div class="mb-3">
                            <div><label>Schedule</label></div>
                            <div>
                                <select id="category" class="form-select" required>
                                    <option></option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div><label>Results</label></div>
                            <div>
                                <select id="dept" class="form-select" required>
                                    <option></option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
						<div class="mb-3">
                            <div><label>Status</label></div>
                            <div>
                                <select id="designation" class="form-select" required>
                                    <option></option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
						<div class="mb-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="lab1">
								<label class="form-check-label" for="inlineCheckbox1">Report Card</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="lab2">
								<label class="form-check-label" for="inlineCheckbox2">Birth Cert</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="lab3">
								<label class="form-check-label" for="inlineCheckbox1">Med Cert</label>
							</div>
						</div>
						<div class="mb-3"></div>
						<div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-custom" id="save">Save</button>
                        </div>
					</form>
				</div>
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