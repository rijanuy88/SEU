
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
<div class="container"></div>

<div class="card w-75 mx-auto">
    <div class="card-header text-white" style="background-color: #e19021; ">
        Breakdown of Fees
    </div>
    <div class="card-body row" style="overflow-x:auto;">
        <div class="col-12">
            <label for="yrLvl" class="form-label">Year</label>
            <select id="yrLvl" class="form-select">
                <option selected>All</option>
                <option>2019-2020</option>
                <option>2020-2021</option>
                <option>2021-2022</option>
                <option>2022-2023</option>
                <option>2023-2024</option>
            </select>
        </div>
    </div>
    <div class = "card-body" style="overflow-x:auto">
        
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">PRICE</th>
                    {{-- <th scope="col">AMOUNT</th> --}}
                    {{-- <th scope="col"></th> --}}
                </tr>
            </thead>    
            
            <tbody>
            <tr >
                <td>Tuition Fee</td>
                <td>5,000.00</td>
                {{-- <td >10,000.00</td> --}}
                {{-- <td></td> --}}
            </tr>
            <tr >
                <td>Laboratory Fee</td>
                <td>10,000.00</td>
                {{-- <td >10,000.00</td> --}}
                {{-- <td></td> --}}
            </tr>

            <tr >
                <td>Medical Fee</td>
                <td>10,000.00</td>
                {{-- <td >10,000.00</td> --}}
                {{-- <td></td> --}}
            </tr>

            <tr >
                <td>Retreat Fee</td>
                <td>15,000.00</td>
                {{-- <td>15,000.00</td> --}}
                {{-- <td></td> --}}
            </tr>

            <tr>
                <td>Graduation Fee</td>
                <td>14,000.00</td>
                {{-- <td >14,000.00</td> --}}
                {{-- <td></td> --}}
            </tr>
        </table>
    </div>
    <div class="card-footer">
        <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#addclassesModal">Add</button>
    </div>
</div>

<div>
       &nbsp
</div>

<!-- <div class="card w-75 mx-auto">
    <div class="card-header text-white" style="background-color: #e19021 ">Edit Breakdown of Fees </div>
    <div class="card-body">

    <span></span>
    <span></span>
    <span></span>
    <span></span>

    <div class="col-6">
	        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editTuition">Edit Tuition</button>
        </div>
        <div class="col-6">
        <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#editMisc">Edit Misc. Fees</button>
    </div>
</div>
    </div>
</div> -->

@endsection

&nbsp

@section('modals')
	<!--Add Modal -->
	<div class="modal fade" id="addclassesModal" tabindex="-1" aria-labelledby="courseModalLabel1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="courseModalLabel1">Add Miscellaneous Fees</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST">
						@csrf
                        <div class="mb-3">
                            <div><label>School Year</label></div>
                            <div><input type="text" class="form-control" name="schoolyear" required></div>
						</div>
						<div class="mb-3">
							<div><label>Fee Description</label></div>
                            <div><input type="text" class="form-control" name="feeDesc" required></div>
						</div>
                        <div class="mb-3">
                            <div><label>Fee Amount</label></div>
                            <div><input type="text" class="form-control" name="feeAmt" required></div>
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

