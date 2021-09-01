@extends('layouts.master')

@section('title', 'contact-us')


@section('content')
<div class="mx-auto d-block col-sm-8" style="margin:3%" >
        <form class="row g-3" method="POST" action="{{ route('undergrad-forms.store')  }}">
        {{-- secure information --}}
        @csrf
        <div class="col-md-2">
        <a href="/SEU/public/pre-enlistment"><button type="button" class="col-12 btn btn-custom " >Back</button></a>        </button>
        </div>

        <div>
            <b><h1 style="color:#6a1717">Application Form</h1></b>
            <h5>Faculty and Non-Teaching Staff</h5>
        </div>
        <hr>

        <div class="col-md-12">
        </div>
            {{-- <div class="col-md-4" hidden>
                <label for="exampleFormControlInput1" class="form-label">Applicant Id</label >
                <input type="text" class="form-control" name="applicantID" placeholder="">
            </div> --}}
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="studLastName" required >
            </div>
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">First Name</label>
                <input type="text" class="form-control" name="studFirstName" required>
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
                <input type="text" class="form-control" name="studMobileNumber" >
            </div>
            <div class="col-12">
            <label for="exampleFormControlInput1" class="form-label">Address</label>
                <input type="text" class="form-control" name="studAddress">
            </div>
            {{-- <form class="row g-3" method="POST" action="{{ route('undergrad-forms.store')  }}"> --}}
            <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Emergency Contact Name (Parent or Guardian)</label>
                <input type="text" class="form-control" name="emerName">
            </div>
            <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Emergency Contact Relationship </label>
                <select id="emerRel" class="form-select" name="emerRel">
                <option selected>Choose...</option>
                <option>Parent</option>
                <option>Guardian</option>
                <option>Other</option>
                </select>
            </div>
            <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Emergency Contact Number </label>
                <input type="text" class="form-control" name="emerNum">
            </div>
            <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Emergency Contact Address </label>
                <input type="text" class="form-control" name="emerAdd">
            </div>
            {{-- </form> --}}
            <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Birth Date</label>
                <input type="date" class="form-control" name="studBirthDate" id="studBday">
            </div>
            <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Age</label>
                <input type="text" class="form-control" name="studAge" id="sage" readonly>
            </div>
            <div class="col-md-6">
            <label for="studSHS" class="form-label">Senior High School</label>
                <input type="text" class="form-control" name="studSHS" >
            </div>
            <div class="col-md-6">
                <label for="studYearGrad" class="form-label"> Year Graduated</label>
                <select id="studYearGrad" class="form-select" name="studYearGrad">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-12" style="padding-top:2%">
                <button type="submit" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
            </div>
        </form>
    </div>
    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Submission Notification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
        </button>
      </div>
      <div class="jumbotron mx-auto d-block col-sm-12" style="margin:3%; text-align: center">
        <h1 class="display-4">Your response has been recorded!</h1>
        <p class="lead">Kindly review your enrollment status in the Enrollment Status tab after five (5) working days.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
    
@endsection