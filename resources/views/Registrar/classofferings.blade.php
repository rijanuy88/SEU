@extends('layouts.employee')

@section('title', 'Class Offerings')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header text-white" style="background-color: #e19021">
				Class Offerings
			</div>
			<div class="card-body" style="overflow-x:auto">
				<table class="table table-responsive table-sm" style="vertical-align:middle" id="students_table">
					<thead>
						<tr>
							<th scope="col">COURSE CODE</th>
                            <th scope="col">SUBJECT CODE</th>
							<th scope="col">SUBJECT NAME</th>
							<th scope="col">DIVISION</th>
							<th scope="col">SCHEDULE</th>
							<th scope="col">TEACHER</th>
                            <th scope="col">SLOTS</th>
							<th scope="col">SECTION/S</th>
                            <th scope="col">ACTION</th>
						</tr>
					</thead>
					<tbody>
						<tr>
                            <td>4-301</td>
                            <td>CS 1130</td>
                            <td>Introduction to Computing</td>
                            <td>CS</td>
                            <td>MW 7:40AM-9:10AM F610</td>
                            <td>Freires, Stony</td>
                            <td>40</td>
                            <td>ComSci 1-A</td>
                            <td>
								<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editclassModal"><i class="bi bi-pencil-square" ></i></button>
								<button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
            <div class="card-footer">
                <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#addclassesModal">Add</button>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#clearallModal">Clear</button>
            </div>
		</div>
	</div>
@endsection

@section('modals')
	<!--Edit Modal -->
	<div class="modal fade" id="editclassModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="courseModalLabel">Edit Class</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST">
						@csrf
						<div class="mb-3">
                            <div><label>Course Code</label></div>
                            <div><input type="text" class="form-control" name="coursecode" required></div>
						</div>
						<div class="mb-3">
							<div><label>Subject Code</label></div>
                            <div><input type="text" class="form-control" name="subjcode" required></div>
						</div>
                        <div class="mb-3">
                            <div><label>Subject Name</label></div>
                            <div><input type="text" class="form-control" name="subjcode" required></div>
						</div>
                        <div class="mb-3">
                            <div><label>Division</label></div>
							<div>
                                <select id="division" class="form-select" required>
                                    <option></option>
                                    <option>...</option>
                                </select>
                            </div>
						</div>
						<div class="mb-3">
                            <div><label>Teacher</label></div>
                            <div><input type="text" class="form-control" name="teacher" readonly></div>
						</div>
						<div class="mb-3">
							<div><label>Schedule</label></div>
                            <div><input type="text" class="form-control" name="sched" readonly></div>
						</div>
                        <div class="mb-3">
                            <div><label>Room</label></div>
                            <div><input type="text" class="form-control" name="room" readonly></div>
						</div>
                        <div class="mb-3">
                            <div><label>Slots</label></div>
                            <div><input type="number" class="form-control" name="slots" required></div>
						</div>
						<div class="mb-3">
                            <div><label>Section/s</label></div>
                            <div><input type="text" class="form-control" name="section" required></div>
						</div>
						<div class="mb-3"></div>
						<div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-custom" id="add">Save</button>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--Add Modal -->
	<div class="modal fade" id="addclassesModal" tabindex="-1" aria-labelledby="courseModalLabel1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="courseModalLabel1">Add Class</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST">
						@csrf
						<div class="mb-3">
                            <div><label>Course Code</label></div>
                            <div><input type="text" class="form-control" name="coursecode" required></div>
						</div>
						<div class="mb-3">
							<div><label>Subject Code</label></div>
                            <div><input type="text" class="form-control" name="subjcode" required></div>
						</div>
                        <div class="mb-3">
                            <div><label>Subject Name</label></div>
                            <div><input type="text" class="form-control" name="subjcode" required></div>
						</div>
                        <div class="mb-3">
                            <div><label>Division</label></div>
                            <div>
                                <select id="division" class="form-select" required>
                                    <option></option>
                                    <option>...</option>
                                </select>
                            </div>
						</div>
						<div class="mb-3">
                            <div><label>Slots</label></div>
                            <div><input type="number" class="form-control" name="slots" required></div>
						</div>
						<div class="mb-3">
                            <div><label>Section/s</label></div>
                            <div><input type="text" class="form-control" name="section" required></div>
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