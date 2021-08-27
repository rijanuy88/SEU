
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

    <div class = "card-body" style="overflow-x:auto">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">PRICE</th>
                    {{-- <th scope="col">AMOUNT</th> --}}
                    <th scope="col"></th>
                </tr>
            </thead>    
            
            <tbody>
            <tr>
                <th scope="row">Unit Price</th>
                <td>1,000.00</td>
                {{-- <td>28,000.00</td> --}}
                <td>
                <button type="button" class="btn btn-success btn-sm"data-bs-toggle="modal" data-bs-target="#editTuition"><i class="bi bi-pencil-square"></i></button>
                </td>
            </tr>
            
            <tr>
                <th scope="row">Miscellaneous Fees</th>
                <td></td>
                {{-- <td></td> --}}
                <td>
                    <button type="button" class="btn btn-success btn-sm"data-bs-toggle="modal" data-bs-target="#editMisc"><i class="bi bi-pencil-square"></i></button>
                </td>
            </tr>

            <tr >
                <td>Laboratory Fee</td>
                <td>10,000.00</td>
                {{-- <td >10,000.00</td> --}}
                <td></td>
            </tr>

            <tr >
                <td>Medical Fee</td>
                <td>10,000.00</td>
                {{-- <td >10,000.00</td> --}}
                <td></td>
            </tr>

            <tr >
                <td>Retreat Fee</td>
                <td>15,000.00</td>
                {{-- <td>15,000.00</td> --}}
                <td></td>
            </tr>

            <tr>
                <td>Graduation Fee</td>
                <td>14,000.00</td>
                {{-- <td >14,000.00</td> --}}
                <td></td>
            </tr>
        
        </table>

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
	<!--Edit Modal -->
	<div class="modal fade" id="editTuition" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="courseModalLabel">Edit Tuition</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST">
						@csrf

						<div class="mb-3">
                            <div><label>Price per Unit</label></div>
                            <div><input type="text" class="form-control" name="unitPrice" ></div>
                            &nbsp
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
   

    <!--Edit Modal -->
	<div class="modal fade" id="editMisc" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="courseModalLabel">Edit Miscellaneous Fees</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST">
                    @csrf

                    <div class="mb-3">                            
                        <div><label>Laboratory Fee</label></div>
                        <div><input type="text" class="form-control" name="labfee" ></div>
                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="lab1">
                            <label class="form-check-label" for="inlineCheckbox1">1st Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="lab2">
                            <label class="form-check-label" for="inlineCheckbox2">2nd Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="lab3">
                            <label class="form-check-label" for="inlineCheckbox1">3rd Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="lab4">
                            <label class="form-check-label" for="inlineCheckbox2">4th Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="lab5">
                            <label class="form-check-label" for="inlineCheckbox1">5th Yr</label>
                        </div> 
                    </div>

                    <div class="mb-3">
                        <div><label>Medical Fee</label></div>
                        <div><input type="text" class="form-control" name="medfee" ></div>
                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="med1">
                            <label class="form-check-label" for="inlineCheckbox1">1st Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="med2">
                            <label class="form-check-label" for="inlineCheckbox2">2nd Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="med3">
                            <label class="form-check-label" for="inlineCheckbox1">3rd Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="med4">
                            <label class="form-check-label" for="inlineCheckbox2">4th Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="med5">
                            <label class="form-check-label" for="inlineCheckbox1">5th Yr</label>
                        </div> 
                    </div>
        
                    <div class="mb-3">
                        <div><label>Retreat Fee</label></div>
                        <div><input type="text" class="form-control" name="retfee" ></div>
                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="retreat1" disabled>
                            <label class="form-check-label" for="inlineCheckbox1">1st Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="retreat2" disabled>
                            <label class="form-check-label" for="inlineCheckbox2">2nd Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="retreat3" disabled>
                            <label class="form-check-label" for="inlineCheckbox1">3rd Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="retreat4">
                            <label class="form-check-label" for="inlineCheckbox2">4th Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="retreat5">
                            <label class="form-check-label" for="inlineCheckbox1">5th Yr</label>
                        </div> 
                    </div>
                    
                    <div class="mb-3">
                        <div><label>Graduation Fee</label></div>
                        <div><input type="text" class="form-control" name="gradfee" ></div>
                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="grad1" disabled> 
                            <label class="form-check-label" for="inlineCheckbox1">1st Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="grad2" disabled>
                            <label class="form-check-label" for="inlineCheckbox2">2nd Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="grad3" disabled>
                            <label class="form-check-label" for="inlineCheckbox1">3rd Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="grad4">
                            <label class="form-check-label" for="inlineCheckbox2">4th Yr</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="grad5">
                            <label class="form-check-label" for="inlineCheckbox1">5th Yr</label>
                        </div> 
                    </div>
                    <div class="mb-3">
                        <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-custom" id="add">Save</button>
                        </div>
                </div>

    				</form>
				</div>
			</div>
		</div>
	</div>
   
@endsection

