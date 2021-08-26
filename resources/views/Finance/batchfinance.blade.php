
@extends('layouts.employee')

@section('title', 'Batch Finance')

<style>
    .card-body{
        display: flex;
    }

    span{
        margin-right: 5%;
    }

    ul{
        list-style-type: none;
    }
</style>

@section('content')
<div class="card  mx-auto ">
    <div class="card-header text-white" style="background-color: #e19021"> Batch Information</div>

    <div class="card-body" style="overflow-x:auto;">
        <input type="text" class="form-control" name="id" required placeholder="Batch Search (ex. BSCS 3)">
        &nbsp
        <button type="submit" class="btn btn-custom" name="idSubmit" >Search </button>
    </div>

   
    <div div class="card-body" style="overflow-x:auto;">

    <span> </span>
        <span >  
            <ul>
                <li style="color:gray">SCHOOL</li>
                <li><h6>Science and Technology</h6></li>
                <li style="color:gray">DEPARTMENT</li>
                <li><h6>Computer Sciences</h6></li>
            </ul>
        </span>
    <span> </span>
        <span>
            <ul>
                <li style="color:gray">COURSE</li>
                <li><h6>BS Computer Science</h6></li>
                <li style="color:gray">YEAR LEVEL</li>
                <li><h6>3</h6></li>
            </ul>
        </span>
        <span> </span>

        <span>
            <ul>
                <li style="color:gray">ACADEMIC PERIOD</li>
                <li><h6>A.Y. 2021-2022, 1st Semester</h6></li>
                <li style="color:gray">NUMBER OF STUDENTS</li>
                <li><h6>21</h6></li>
            </ul>
        </span>
        <span> </span>
        <span>
            <ul>
                <li style="color:gray">NUMBER OF SCHOLARS</li>
                <li><h6>8</h6></li>
                <li style="color:gray">NUMBER OF OUTSTANDING BALANCES</li>
                <li><h6>7</h6></li>
            </ul>
        </span>
    </div>
</div>

&nbsp

	<div class="container">
		<div class="card mx-auto">
			<div class="card-header text-white" style="background-color: #e19021">
				Batch Finances
			</div>
			<div class="card-body" style="overflow-x:auto">
				<table class="table table-responsive table-sm" style="vertical-align:middle" id="students_table">
					<thead>
						<tr>
							<th scope="col">STUDENT ID</th>
                            <th scope="col">LAST NAME</th>
							<th scope="col">FIRST NAME</th>
							<th scope="col">MIDDLE INITIAL</th>
							<th scope="col">AMOUNT DUE</th>
                            <th scope="col">SCHOLAR STATUS</th>
							<th scope="col">ACCOUNT STATUS</th>
						</tr>
					</thead>
					<tbody>
						<tr>
                            <td>12345678</td>
                            <td>Sy</td>
                            <td>Angela Rizza Lorraine</td>
                            <td>G</td>
                            <td>700.00</td>
                            <td>Active</td>
                            <td>Paid</td>
                            <td>
								<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editclassModal"><i class="bi bi-pencil-square" ></i></button>
								{{-- <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button> --}}
							</td>
						</tr>
					</tbody>
				</table>
			</div>
            {{-- <div class="card-footer">
                <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#addcoursesModal">Add</button>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#clearallModal">Clear</button>
            </div> --}}
		</div>
	</div>
@endsection

@section('modals')
	<!--Edit Modal -->
	<div class="modal fade" id="editclassModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="courseModalLabel">Edit Student Accounts</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST">
						@csrf
						<div class="col-12">
                            <div><label>Student ID</label></div>
                            <div><input type="text" class="form-control" name="studid" readonly></div>
						</div>
						<div class="col-12">
							<div><label>Last Name</label></div>
                            <div><input type="text" class="form-control" name="lname" readonly></div>
						</div>
                        <div class="col-12">
                            <div><label>First Name</label></div>
                            <div><input type="text" class="form-control" name="fname" readonly></div>
						</div>
                        <div class="col-12">
                            <div><label>Amount Due</label></div>
                            <div><input type="text" class="form-control" name="amtdue" ></div>
						</div>
						<div class="col-12">
                            <div><label>Scholar Status</label></div>
                            <select class="col-12">
									<option value=""></option>
									<option value="Active">Active</option>
									<option value="Probationary">Probationary</option>
									<option value="N/A">N/A</option>
							</select>
                            
						</div>
						<div class="col-12">
                            <div><label>Account Status</label></div>
                            <select class="col-12">
									<option value=""></option>
									<option value="Paid">Paid</option>
									<option value="Outstanding">Outstanding Balance</option>
									
							</select>
						</div>
						<div class="col-3"></div>
						<div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-custom" id="add">Save</button>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
