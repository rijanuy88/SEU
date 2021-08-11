@extends('layouts.master')

@section('title', 'pre-enlistment')


@section('content')
    <div class="mx-auto d-block col-sm-8" style="margin:3%" >
        <form class="row g-3">
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="studLastNname" >
            </div>
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">First Name</label>
                <input type="text" class="form-control" name="studFirstName">
            </div>
            <div class="col-md-2">
                <label for="exampleFormControlInput1" class="form-label">Middle Name</label>
                <input type="text" class="form-control" name="studMiddleName">
            </div>
            <div class="col-md-2">
                <label for="exampleFormControlInput1" class="form-label">Suffix</label>
                <input type="text" class="form-control" name="studSuffix">
            </div>
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Landline</label>
                <input type="text" class="form-control" name="studLandline">
            </div>
            <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" name="studMobileNumber">
            </div>
            <div class="col-12">
            <label for="exampleFormControlInput1" class="form-label">Address</label>
                <input type="text" class="form-control" name="studAddress">
            </div>
            <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Birth Date</label>
                <input type="date" class="form-control" name="studBirthDate">
            </div>
            <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Age</label>
                <input type="text" class="form-control" name="studAge">
            </div>
            <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" name="studAge">
            </div>
            <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" name="studPass">
            </div>
            <div class="col-md-6">
            <label for="studSHS" class="form-label">Senior High School</label>
                <input type="text" class="form-control" name="studSHS">
            </div>
            <div class="col-md-4">
                <label for="studYearGrad" class="form-label"> Year Graduated</label>
                <select id="studYearGrad" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="studPrefCourse1" class="form-label">Preferred Course 1</label>
                <select id="studPrefCourse1" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="studPrefCourse2" class="form-label">Preferred Course 2</label>
                <select id="studPrefCourse2" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="studPrefCourse3" class="form-label">Preferred Course 3</label>
                <select id="studPrefCourse4" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>

            <div class="col-12" style="padding-top:2%">
                <button type="button" onclick ="alert('Data Submitted!')" class="btn btn-custom">Submit</button>
                <a href="/SEU/public/status"><button type="button" class="btn btn-dark" disabled>Find Status</button></a>
            </div>
        </form>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
   
@endsection