@extends('layouts.employee')

@section('title', 'Student List')

@section('content')
	<div class="container">
		<div class="card" style="margin-top: 25px">
			<div class="card-header text-white" style="background-color: #e19021">
				Student List
			</div>
			<div class="card-body">
				<table class="table table-responsive table-sm" id="students_table">
					<thead>
						<tr>
							<th scope="col">Student ID</th>
							<th scope="col">Last Name</th>
							<th scope="col">First Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Suffix</th>
                            <th scope="col">Year</th>
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
							<td>Omo</td>
                            <td>momo</td>
							<td></td>
                            <td>4</td>
			
							<td>
								{{-- <a type="button" class="btn btn-info btn-sm" href="{{ route('students.show', $student->id) }}"><i class="bi bi-eye"></i></a> --}}
                                <a type="button" class="btn btn-info btn-sm" data-bs-target="#editStudent"><i class="bi bi-eye"></i></a>

								<button type="button" class="btn btn-success btn-sm"data-bs-toggle="modal" data-bs-target="#editStudent""><i class="bi bi-pencil-square"></i></button>

								<button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#deleteStudent"></i></button>
							</td>
						</tr>
						{{-- @endforeach --}}
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

@section('modals')
    {{-- modal for editing student info --}}
    <div class="modal fade" tabindex="-1" aria-hidden="true" id="editStudent">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" >Edit Student</h5>
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
                    <input idtype="text" class="form-control" name="id" id="editedid" hidden>
                    <label for="exampleFormControlInput1" class="form-label" >Student ID</label>
                    <input idtype="text" class="form-control" name="studentid" required id="editStudentid">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstName" id="editfirstName">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" name="middleName" id="editmiddleName">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastName" id="editlastName">
                </div>
				<div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Suffix</label>
                    <input type="text" class="form-control" name="suffix" id="editsuffix">
                </div>
				<div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Year</label>
                    <input type="text" class="form-control" name="year" id="edityear">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="editaddress" >
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
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
		    $('#students_table').DataTable({
		    	"paging":   true,
		    	"ordering": true
		    });
		} );
	</script>
@endsection