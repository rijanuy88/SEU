@extends('layouts.employee')

@section('title', 'Batch List')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header text-white" style="background-color: #e19021">
				Batch List
			</div>
            <div class="card-body row" style="overflow-x:auto;">
                <div class="col-12">
                    <label for="yrLvl" class="form-label">Year Level</label>
                    <select id="yrLvl" class="form-select">
                        <option selected>All</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
			<div class="card-body" style="overflow-x:auto">
				<table class="table table-responsive table-sm" id="students_table">
					<thead>
						<tr>
							<th scope="col">STUDENT ID</th>
							<th scope="col">LAST NAME</th>
							<th scope="col">FIRST NAME</th>
                            <th scope="col">MIDDLE NAME</th>
                            <th scope="col">SUFFIX</th>
                            <th scope="col">YEAR</th>
                            <th scope="col">COURSE</th>
                            <th scope="col">SECTION</th>
							<th scope="col">ACTION</th>
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
                            <td>BS Computer Science</td>
                            <td>CS 4A</td>
			
							<td>
								{{-- <a type="button" class="btn btn-info btn-sm" href="{{ route('students.show', $student->id) }}"><i class="bi bi-eye"></i></a> --}}
                                {{-- <a type="button" class="btn btn-info btn-sm" data-bs-target="#editStudent"><i class="bi bi-eye"></i></a> --}}

								<button type="button" class="btn btn-success btn-sm"data-bs-toggle="modal" data-bs-target="#editStudent""><i class="bi bi-pencil-square"></i></button>

								<button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#deleteStudent"></i></button>
							</td>
						</tr>
						{{-- @endforeach --}}
                        <tr>
                            <th scope="row">TOTAL STUDENTS</th>
                            <th scope="row">18</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                        </tr>
					</tbody>
				</table>
                <td>
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#report">Report</button>
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
{{-- modal for REPORT student info --}}
    <div class="modal fade" tabindex="-1" aria-hidden="true" id="report">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" >Total Students</h5>
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
                    <label for="exampleFormControlInput1" class="form-label">1st Year</label>
                    <input type="text" class="form-control" name="firstyr" id="editfirstyr" placeholder="10" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">2nd Year</label>
                    <input type="text" class="form-control" name="secondyear" id="editsecondyr" placeholder="3" readonly>
                </div>
				<div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">3rd Year</label>
                    <input type="text" class="form-control" name="thirdyear" id="editthirdyr" placeholder="3" readonly>
                </div>
				<div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">4th Year</label>
                    <input type="text" class="form-control" name="fourthyear" id="editfourthyr" placeholder="2" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">5th Year</label>
                    <input type="text" class="form-control" name="fifthyear" id="editfifthyr" placeholder="8" readonly>
                </div>
                {{-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Total Students</label>
                    <input idtype="text" class="form-control" name="totStud" required id="totStud" placeholder="20" readonly>
                </div> --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success" data-bs-dismiss="modal">Send</button>
                </div>
            </form>
            {{-- @endif --}}
        </div>
        </div>
    </div>
    </div>
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
                    <label for="exampleFormControlInput1" class="form-label">Course</label>
                    <input type="text" class="form-control" name="year" id="edityear">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Section</label>
                    <input type="text" class="form-control" name="year" id="edityear">
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