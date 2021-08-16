{{-- @extends('layouts.Studtabs') --}}
@extends('layouts.stud')

@section('title', 'stud-balance')

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
<div class="card w-75 mx-auto">
    <div class="card-header text-white" style="background-color: #e19021">
        MY ACCOUNT BALANCE
    </div>
    <div div class="card-body" style="overflow-x:auto;">
        <img src="assets/icon.png" alt="" width="100" height="100" class="rounded-circle me-2">
        <span>  
            <ul>
                <li style="color:gray">STUDENT NAME</li>
                <li><h6>Sy, Angela Rizza Lorraine G. III</h6></li>
                <li style="color:gray">STUDENT ID</li>
                <li><h6>12345678</h6></li>
            </ul>
        </span>
        <span>
            <ul>
                <li style="color:gray">COURSE</li>
                <li><h6>BS Computer Science</h6></li>
                <li style="color:gray">SECTION</li>
                <li><h6>ComSci 3-A</h6></li>
            </ul>
        </span>
        <span>
            <ul>
                <li style="color:gray">ACADEMIC PERIOD</li>
                <li><h6>A.Y. 2021-2022, 1st Semester</h6></li>
                <li style="color:gray">STATUS</li>
                <li><h6>Enrolled</h6></li>
            </ul>
        </span>
    </div>
    {{-- contents --}}
        {{-- BALANCE --}}
        <div class="container " style="margin-Top:2%">
            <div class="row" style="color:#6a1717">
                <div class="col-8">
                    <h2>BALANCE:</h2>
                </div>
                <div class="col-4" >
                    <h2>Total: 1,000,000.00</h2>
                </div>
            </div>

            <hr>

            <div class="container heading">
                <div class="row">
                    <div class="col-8">
                        <h5><strong>Description</strong></h5>
                    </div>
                    <div class="col-4">
                        <h5><strong>Amount</strong></h5>
                    </div>
                </div>
            </div>

            <div class="container tuition">
                <div class="row">
                        <div class="col-8">
                                <h5><strong>Tuition</strong></h5>
                        </div>
                        <div class="col-4">
                            <h6>1500</h6>
                        </div>
                </div>
                {{-- sub contents per main fee --}}
                <div class="col">
                    {{-- for loop data --}}
                    <div class="row">
                        <div class="col-6">
                            <h5>&nbsp Lab fees</h5>
                        </div>
                        <div class="col-2">
                            <h6>1000</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <h5>&nbsp Lab fees</h5>
                        </div>
                        <div class="col-2">
                            <h6>1000</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <h5>&nbsp Lab fees</h5>
                        </div>
                        <div class="col-2">
                            <h6>500</h6>
                        </div>
                    </div>

                </div>
            </div>
            
            <hr>

            <div class="container misc">
                <div class="row">
                    <div class="col-8">
                        <h5><strong>Miscellaneous Fees:</strong></h5>
                    </div>
                    <div class="col-4">
                        <h6>15000</h6>
                    </div>
                </div>

                <div class="col">
                    {{-- for loop data --}}
                        <div class="row">
                            <div class="col-6">
                                <h5>&nbsp Lab fees</h5>
                            </div>
                            <div class="col-2">
                                <h6>100</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <h5>&nbsp Lab fees</h5>
                            </div>
                            <div class="col-2">
                                <h6>100</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            {{-- PAYMENTS --}}
            <div class="container" style="margin-Top:2%">
                <div class="row" style="color:green">
                    <div class="col-8">
                        <h2>PAYMENTS & CREDITS:</h2>
                    </div>
                    <div class="col-4">
                        <h2>Total: 1,000.00</h2>
                    </div>
                </div>

                <hr>

                <div class="container heading">
                    <div class="row">
                        <div class="col-6">
                            <h5><strong>Description</strong></h5>
                        </div>
                        <div class="col-2">
                            <h5><strong>Due</strong></h5>
                        </div>
                        <div class="col-2">
                            <h5><strong>Payments</strong></h5>
                        </div>
                    </div>
                </div>

                <div class="container tuition">
                    <div class="row">
                        <div class="col-6">
                            <h5><strong>Prelim</strong></h5>
                        </div>
                        <div class="col-2">
                            <h6>1500</h6>
                        </div>
                        <div class="col-2">
                            <h6>1500</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <h5><strong>Midterms</strong></h5>
                        </div>
                        <div class="col-2">
                            <h6>1500</h6>
                        </div>
                        <div class="col-2">
                            <h6>1500</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <h5><strong>Finals</strong></h5>
                        </div>
                        <div class="col-2">
                            <h6>1500</h6>
                        </div>
                        <div class="col-2">
                            <h6>1500</h6>
                        </div>
                    </div>

                </div>
                
                <hr>

                
            </div>


            
        </div>
</div>
@endsection

