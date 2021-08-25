@extends('layouts.employee')

@section('title', 'Class Offerings')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header text-white" style="background-color: #e19021">
				Class Offerings
			</div>
			<div class="card-body">
				<table class="table table-responsive table-sm" id="students_table">
					<thead>
						<tr>
							<th scope="col">Course Code</th>
                            <th scope="col">Subject Name</th>
							<th scope="col">Description</th>
							<th scope="col">Department</th>
							<th scope="col">Schedule</th>
							<th scope="col">Teacher</th>
                            <th scope="col">Slots</th>
							<th scope="col">Section/s</th>
                            <th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr style="vertical-align:middle">
                            <td>4-301</td>
                            <td>CS 1130</td>
                            <td>Introduction to Computing</td>
                            <td>CS</td>
                            <td>MW 7:40AM-9:10AM F610</td>
                            <td>Freires, Stony</td>
                            <td>40</td>
                            <td>ComSci 1-A</td>
                            <td>
								<button type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
								<button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
            <div class="card-footer">
                <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#addcoursesModal">Add</button>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#clearallModal">Clear</button>
            </div>
		</div>
	</div>
@endsection

@section('modals')
	<!--Add Modal -->
	<div class="modal fade" id="addcoursesModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="courseModalLabel">Add Course</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST">
						@csrf
						<div class="mb-3">
                            <div><label>Course Code</label></div>
                            <div><input type="text" class="form-control" name="code" required></div>
						</div>
						<div class="mb-3">
							<div><label>Subject Name</label></div>
                            <div><input type="text" class="form-control" name="subj" required></div>
						</div>
                        <div class="mb-3">
                            <div><label>Description</label></div>
                            <div><input type="text" class="form-control" name="desc" required></div>
						</div>
                        <div class="mb-3">
                            <div><label>Department</label></div>
                            <div>
								<form>
                                <select id="dept" class="form-control" required>
                                    <option></option>
                                    <option>...</option>
                                </select>
								</form>
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
