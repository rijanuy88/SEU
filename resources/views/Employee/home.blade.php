
@extends('layouts.employee')

@section('title', 'Home')

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

    .odd{
        background-color: #e09f46;
    }
</style>

@section('content')
<div class="card mx-auto">
    <div class="card-header text-white" style="background-color: #e19021">
        Employee Information
    </div>
    <div div class="card-body" style="overflow-x:auto;">
    <span></span>
        <img src="{{ asset('/assets/icon.png') }}" alt="zoom 80%" width="100" height="100" class="rounded-circle me-2">
        <span></span>
        <span>  
            <ul>
                <li style="color:gray">EMPLOYEE NAME</li>
                <li><h6>Davidson, George Henry</h6></li>
                <li style="color:gray">EMPLOYEE ID</li>
                <li><h6>312345</h6></li>
            </ul>
        </span>
        <span></span>
        <span>
            <ul>
                <li style="color:gray">EMPLOYEE TYPE</li>
                <li><h6>Non-teaching</h6></li>
                <li style="color:gray">DEPARTMENT</li>
                <li><h6>Finance</h6></li>
            </ul>
        </span>
        <span></span>
        <span>
            <ul>
                <li style="color:gray">ACADEMIC PERIOD</li>
                <li><h6>A.Y. 2021-2022, 1st Semester</h6></li>
                <li style="color:gray">STATUS</li>
                <li><h6>Regular</h6></li>
            </ul>
        </span>
    </div>
</div>

<div>
       &nbsp
</div>
<div class="card mx-auto">
    <div class="card-header text-white" style="background-color: #e19021">
        Announcements and Memoranda
    </div>
    <div div class="card-body" style="overflow-x:auto;">
        <span>  
            <ul>
                
            </ul>
        </span>
       
    </div>
</div>

@endsection


<script>
 
</script>