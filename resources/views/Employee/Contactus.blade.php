@extends('layouts.master')

@section('title', 'contact-us')


@section('content')
    <div class="mx-auto d-block col-sm-8" style="margin:3%" >
        <form class="row g-3">
            <div class="col-md-4">
                <label for="inputLastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName">
            </div>
            <div class="col-md-4">
                <label for="inputFirstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName">
            </div>
            <div class="col-md-2">
                <label for="inputMiddleName" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middleName">
            </div>
            <div class="col-md-2">
                <label for="inputSuffix" class="form-label">Suffix</label>
                <input type="text" class="form-control" id="suffix">
            </div>
            <div class="col-md-3">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="col-md-3">
                <label for="inputPassword4" class="form-label">Landline</label>
                <input type="text" class="form-control" id="password">
            </div>
            <div class="col-md-3">
                <label for="inputPassword4" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="mobileNum">
            </div>
            <div class="col-md-3">
                <label for="inputPassword4" class="form-label">Birthdate</label>
                <input type="date" class="form-control" id="birthdate">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <select id="department" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="state" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="zip">
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">Last School Attended</label>
                <input type="text" class="form-control" id="lastSchool">
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">Year Graduated</label>
                <input type="text" class="form-control" id="yearGraduated">
            </div>
            {{-- <div class="col-4">
                <label for="inputAddress2" class="form-label">Specialization</label>
                <select id="specialization" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div> --}}
            {{-- <div class="col-4">
                <label for="inputAddress2" class="form-label">Department</label>
                <select id="department" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-4">
                <label for="inputAddress2" class="form-label">Office</label>
                <select id="office" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div> --}}
            <div class="col-12">
                <button type="submit" class="btn btn-custom">Submit</button>
            </div>
        </form>
    </div>
    
@endsection