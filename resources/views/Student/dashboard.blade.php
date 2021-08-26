{{-- @extends('layouts.Studtabs') --}}
@extends('layouts.stud')

@section('title', 'Dashboard')

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
<div class="card  mx-auto">
    <div class="card-header text-white" style="background-color: #e19021">
        Academic Information
    </div>
    <div div class="card-body" style="overflow-x:auto;">
    <span></span>
        <img src="assets/icon.png" alt="" width="100" height="100" class="rounded-circle me-2">
        <span></span>
        <span>  
            <ul>
                <li style="color:gray">STUDENT NAME</li>
                <li><h6>Sy, Angela Rizza Lorraine G. III</h6></li>
                <li style="color:gray">STUDENT ID</li>
                <li><h6>12345678</h6></li>
            </ul>
        </span>
        <span></span>
        <span>
            <ul>
                <li style="color:gray">COURSE</li>
                <li><h6>BS Computer Science</h6></li>
                <li style="color:gray">SECTION</li>
                <li><h6>ComSci 3-A</h6></li>
            </ul>
        </span>
        <span></span>
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
@endsection

