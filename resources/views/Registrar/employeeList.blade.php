@extends('layouts.employee')

@section('title', 'Faculty')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header text-white" style="background-color: #e19021">
				Employee List
			</div>
			<div class="card-body" style="overflow-x:auto">
				<table class="table table-responsive table-sm" style="vertical-align:middle" id="faculty_table">
					<thead>
						<tr>
							<th scope="col">LAST NAME</th>
                            <th scope="col">FIRST NAME</th>
							<th scope="col">MIDDLE INITIAL</th>
							<th scope="col">SUFFIX</th>
                            <th scope="col">CATEGORY</th>
							<th scope="col">DEPARTMENT</th>
							<th scope="col">DESIGNATION</th>
                            <th scope="col">ACTION</th>
						</tr>
					</thead>
					<tbody>
						<tr>
                            <td>Freires</td>
							<td>Jose Mari</td>
							<td>V.</td>
							<td></td>
                            <td>Teaching</td>
                            <td>Information Systems</td>
                            <td>Department Chair</td>
                            <td>
							<a type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
								<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi bi-pencil-square"></i></button>
								<button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
            <div class="card-footer">
                <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">Add</button>
            </div>
		</div>
	</div>
@endsection

@section('modals')
	<!--Edit Modal -->
	<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
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
                            <div><label>Category</label></div>
                            <div>
                                <select id="category" class="form-select" required>
                                    <option></option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div><label>Department</label></div>
                            <div>
                                <select id="dept" class="form-select" required>
                                    <option></option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
						<div class="mb-3">
                            <div><label>Designation</label></div>
                            <div>
                                <select id="designation" class="form-select" required>
                                    <option></option>
                                    <option>...</option>
                                </select>
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
	<!--Add Modal -->
	<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="courseModalLabel">Add Employee</h5>
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
                            <div><label>Category</label></div>
                            <div>
                                <select id="category" class="form-select" required>
                                    <option></option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div><label>Department</label></div>
                            <div>
                                <select id="dept" class="form-select" required>
                                    <option></option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
						<div class="mb-3">
                            <div><label>Designation</label></div>
                            <div>
                                <select id="designation" class="form-select" required>
                                    <option></option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
						<div class="mb-3"></div>
						<div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-custom" id="add">Add</button>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
