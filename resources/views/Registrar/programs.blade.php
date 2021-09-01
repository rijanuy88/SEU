@extends('layouts.employee')

@section('title', 'Batch List')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header text-white" style="background-color: #e19021">
				Programs Offered
			</div>
            <div class="card-body row" style="overflow-x:auto;">
                <div class="col-12">
                    <label for="yrLvl" class="form-label">Program Degree</label>
                    <select id="yrLvl" class="form-select">
                        <option selected>All</option>
                        <option>Undergrad</option>
                        <option>Graduate </option>
                        <option>PostGrad</option>
                    </select>
                </div>
            </div>
			<div class="card-body" style="overflow-x:auto">
				<table class="table table-responsive table-sm" id="students_table">
					<thead>
						<tr>
							<th scope="col">Division</th>
							<th scope="col">Program Name</th>
                            <th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						{{-- @foreach($students as $student) --}}
						<tr>
							{{-- <td>{{ $student->student_id }}</td>
							<td>{{ $student->last_name }}</td>
							<td>{{ $student->first_name }}</td> --}}

                            <td>8881111</td>
							<td>Won</td>
			
							<td>
								{{-- <a type="button" class="btn btn-info btn-sm" href="{{ route('students.show', $student->id) }}"><i class="bi bi-eye"></i></a> --}}
                                {{-- <a type="button" class="btn btn-info btn-sm" data-bs-target="#editStudent"><i class="bi bi-eye"></i></a> --}}

								<button type="button" class="btn btn-success btn-sm"data-bs-toggle="modal" data-bs-target="#editStudent""><i class="bi bi-pencil-square"></i></button>

								<button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#deleteStudent"></i></button>
							</td>
						</tr>
						{{-- @endforeach --}}
					</tbody>
				</table>
                <td>
                    <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#addProgram">Add</button>
                </td>
			</div>
		</div>
	</div>
@endsection

@section('modals')
{{-- modal for success sent --}}
    <div class="modal fade" tabindex="-1" aria-hidden="true" id="success">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
            Successfully sent!
        </div>
        </div>
    </div>
    </div>
{{-- modal for ADD program --}}
    <div class="modal fade" id="addProgram" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="courseModalLabel">Add Course</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST">
						@csrf
						<div class="mb-3">
              			    <div><label>Division</label></div>
              				<div><input type="text" class="form-control" name="addDiv" required></div>
						</div>
						<div class="mb-3">
							<div><label>Program Name</label></div>
                            <div><input type="text" class="form-control" name="addProgName" required></div>
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
    {{-- modal for editing program info --}}
    <div class="modal fade" tabindex="-1" aria-hidden="true" id="editStudent">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" >Edit Program</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{-- <form method="POST" action={{ route('students.store') }}> --}}
            {{-- @if (isset($student))     --}}
            {{-- <form method="POST" action="students/{{ $student->studentid }}">                 --}}
			<form>  
                {{-- immediately after form tag add csrf to secure data being submitted to the database --}}
                @csrf
                {{-- overide post method --}}
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Division</label>
                    <input type="text" class="form-control" name="firstName" id="editDiv">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Program Name</label>
                    <input type="text" class="form-control" name="middleName" id="editProgName">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
            {{-- @endif --}}
        </div>
        </div>
    </div>
    </div>

    {{-- Delete Modal --}}
    <div class="modal fade" tabindex="-1" aria-hidden="true" id="deleteStudent">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Program</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{-- <form method="POST" action={{ route('students.store') }}> --}}
            {{-- @if (isset($student))    --}}
            {{-- <form method="POST" action="students/{{ $student->studentid }}">                 --}}
			<form>
                {{-- immediately after form tag add csrf to secure data being submitted to the database --}}
                @csrf
                {{-- overide post method --}}
                @method('DELETE')
                <div class="mb-3">
                    <input idtype="text" class="form-control" name="id" id="deleteid" hidden>
                    <label for="exampleFormControlInput1" class="form-label" >Student ID</label>
                    <input idtype="text" class="form-control" name="studentid" required id="deleteStudentId">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
            {{-- @endif --}}
        </div>
        </div>
    </div>
    </div>


@endsection

@section('scripts')
	<script type="text/javascript">
		$(document).ready( function () {
		    $('#courselist_table').DataTable({
		    	"paging": true,
		    	"searching": true,
		    	"ordering": true,
		    	"info": false,
		    	"language": {"zeroRecords": "No matching courses found"}
		    });
		} );
	</script>
@endsection