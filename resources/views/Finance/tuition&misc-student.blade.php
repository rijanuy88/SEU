
@extends('layouts.employee')

@section('title', 'Tuition & Misc.')

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
<div class="card ">
    <div class="card-header text-white" style="background-color: #e19021"> Batch Information</div>
   
    <div div class="card-body" style="overflow-x:auto">
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

<div class="card" style="align: center">
    <div class="card-header text-white" style="background-color: #e19021"> Student Information</div>

    <div class="card-body" style="overflow-x:auto;">
        <input type="text" class="form-control" name="id" required placeholder="Student ID ">
        &nbsp
        <button type="submit" class="btn btn-custom" name="idSubmit" >Search </button>
    </div>

   
    <div div class="card-body" style="overflow-x:auto;">
    <span> </span>
    
    <img src="{{ asset('/assets/icon.png') }}" alt="" width="100" height="100" class="rounded-circle me-2">
    <span> </span>
         <span>  
            <ul>
                <li style="color:gray">STUDENT NAME</li>
                <li><h6>Sy, Angela Rizza Lorraine G. III</h6></li>
                <li style="color:gray">STUDENT ID</li>
                <li><h6>12345678</h6></li>
            </ul>
        </span>
        <span> </span>
        <span>
            <ul>
                <li style="color:gray">COURSE</li>
                <li><h6>BS Computer Science</h6></li>
                <li style="color:gray">SECTION</li>
                <li><h6>ComSci 3-A</h6></li>
            </ul>
        </span>
        <span> </span>
        <span>
            <ul>
                <li style="color:gray">ACADEMIC PERIOD</li>
                <li><h6>A.Y. 2021-2022, 1st Semester</h6></li>
                <li style="color:gray">STATUS</li>
                <li><h6>Enrolled</h6></li>
            </ul>
        </span>
    </div>
</div>



&nbsp
<div class="card">
    <div class="card-header text-white" style="background-color: #e19021">
        Payments & Due
    </div>
    <div div class="card-body" style="overflow-x:auto;">
        <div class="col-6">
            <label for="yrLvl" class="form-label">Year Level</label>
            <select id="yrLvl" class="form-select">
            <option selected>Latest</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            </select>
        </div>
        <div class="col-6">
            <label for="sem" class="form-label">Semester</label>
            <select id="sem" class="form-select">
                <option selected>Latest</option>
                <option>1</option>
                <option>2</option>
            </select>
        </div>
    </div>

    <table class="table table-borderless  " style="test-align: center">
        <tbody>
            <thead>
                <tr>
                    <th scope="col" style="color:gray">DESCRIPTION</th>
                    <th scope="col" style="color:gray">DUE</th>
                    <th scope="col" style="color:gray">AMOUNT</th>
                </tr>
            </thead>

            <tr >
                <td>Prelim</td>
                <td>15,000.00</td>
                <td>16,000.00</td>
            </tr>

            <tr>
                <td>Midterms</td>
                <td>14,000.00</td>
                <td >15,000.00</td>
            </tr>

            <tr >
                <td>Finals</td>
                <td>10,000.00</td>
                <td >8,000.00</td>
            </tr>
        </tbody>

        <tr>
            <th scope="row">PAYMENTS & CREDITS</th>
            <td></td>
            <th scope="row">39,000.00</th>
        </tr>

    </table>
</div>

<div>
       &nbsp
</div>

<div class="card ">
    <div class="card-header text-white" style="background-color: #e19021 ">Breakdown of Fees </div>
    <div class="card-body" style="overflow-x:auto;">

        <table class="table table-borderless " style="test-align: center">
        <tbody>
            <thead>
                <tr>
                    <th scope="col" style="color:gray">DESCRIPTION</th>
                    <th scope="col" style="color:gray">AMOUNT</th>
                </tr>
            </thead>

            <tr >
                <td>Tuition Fees</td>
                <td class="text-right">39,000.00</td>
            </tr>
            {{-- category --}}
            <tr>
                <td>Miscellaneous Fees (Final Year)</td>
                <td class="text-right">15,000.00</td>
            </tr>
            {{-- sub --}}
            <tr >
                <td>&nbsp Medical Fee</td>
                <td>200.00</td>
            </tr>
            <tr >
                <td>&nbsp Lab Fee</td>
                <td>3,000.00</td>
            </tr>
            <tr >
                <td>&nbsp Retreat Fee</td>
                <td>1,500.00</td>
            </tr>
            <tr >
                <td>&nbsp Graduation Fee</td>
                <td>5,000.00</td>
            </tr>
        </tbody>

        <tr>
            <th scope="row">TOTAL AMOUNT DUE</th>
            <th scope="row">39,700.00</th>
        </tr>
        
    </table>
</table>
</div>


<td>
	<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editclassModal"><i class="bi bi-pencil-square" ></i></button>
	{{-- <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button> --}}
</td>



@endsection

&nbsp

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

						<div class="mb-3">
                        <div><label>STUDENT INFO </label></div>
                            <div><label>Student ID</label></div>
                            <div><input type="text" class="form-control" name="studid" readonly></div>
                            &nbsp
							<div><label>Last Name</label></div>
                            <div><input type="text" class="form-control" name="lname" readonly></div>
                            &nbsp
                            <div><label>First Name</label></div>
                            <div><input type="text" class="form-control" name="fname" readonly></div>
                            &nbsp
                        </div>

                            &nbsp
						<div class="mb-3">
                            <div><label>MISCELLANEOUS FEES</label></div>
                            <div><label>Laboratory Fee</label></div>
                            <div><input type="text" class="form-control" name="labfee" ></div>
                            &nbsp
                            <div><label>Medical Fee</label></div>
                            <div><input type="text" class="form-control" name="medfee" ></div>
                            &nbsp
                            <div><label>Retreat Fees (if applicable)</label></div>
                            <div><input type="text" class="form-control" name="retreatfee" ></div>
                            &nbsp
                            <div><label>Graduation Fees (if applicable)</label></div>
                            <div><input type="text" class="form-control" name="gradfee" ></div>
                            &nbsp
						</div>
                            &nbsp
                        <div class="mb-3">
                            <div><label>TRANSACTION UPDATES</label></div>
                            <div><label>Payments Made</label></div>
                            <div><input type="text" class="form-control" name="paymade" ></div>
						    &nbsp
                            <div><label>Amount Due</label></div>
                            <div><input type="text" class="form-control" name="amtdue" readonly></div>
                            &nbsp
                            <div><label>Account Status</label></div>
                            <select class="col-12">
									<option value=""></option>
									<option value="Paid">Paid</option>
									<option value="Outstanding">Outstanding Balance</option>
									
							</select>
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
   
@endsection
