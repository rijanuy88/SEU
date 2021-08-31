@extends('layouts.master')

@section('title', 'Undergrad Form')


@section('content')
    <div class="mx-auto d-block col-sm-8" style="margin:3%" >
        <form class="row g-3" method="POST" action="{{ route('undergrad-forms.store')  }}">
        {{-- secure information --}}
        @csrf
        <div class="col-md-2">
        <a href="/SEU/public/pre-enlistment"><button type="button" class="col-12 btn btn-custom " >Back</button></a>        </button>
        </div>

        <div class="col-md-12">
        </div>
            <div class="col-md-4" >
                <label for="exampleFormControlInput1" class="form-label">Applicant Id</label >
                <input type="text" class="form-control" name="applicantID" placeholder="">
            </div>
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
            <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Emergency Contact Name (Parent or Guardian)</label>
                <input type="text" class="form-control" name="emerName">
            </div>
            <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Emergency Contact Relationship </label>
                <select id="emerRel" class="form-select">
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
            <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Birth Date</label>
                <input type="date" class="form-control" name="studBirthDate" id="studBday" onclick = "ageCalculator()">
            </div>
            <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Age</label>
                <input type="text" class="form-control" name="studAge" id="sage" readonly>
            </div>
            <div class="col-md-6">
            <label for="studSHS" class="form-label">Senior High School</label>
                <input type="text" class="form-control" name="studSHS" >
            </div>
            <div class="col-md-4">
                <label for="studYearGrad" class="form-label"> Year Graduated</label>
                <select id="studYearGrad" class="form-select" name="studYearGrad">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="studPrefCourse1" class="form-label">Preferred Course 1</label>
                <select id="studPrefCourse1" class="form-select" name="studCourse1">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="studPrefCourse2" class="form-label">Preferred Course 2</label>
                <select id="studPrefCourse2" class="form-select" name="studCourse2">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="studPrefCourse3" class="form-label">Preferred Course 3</label>
                <select id="studPrefCourse3" class="form-select"
                name="studCourse3">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>

            <div class="col-12" style="padding-top:2%">
                <button type="submit" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick = "ageCalculator()">Submit</button>
                <a href="/SEU/public/status"><button type="button" class="btn btn-dark" disabled>Find Status</button></a>
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

@section('scripts')
<script>
    // random applicant id
    function generateBarcode($user_id) {
        try {
            $user = User::find($user_id);
            $user->barcode = mt_rand(1000000000, 9999999999);
            $user->save();

        } catch (Exception $e) {
            $error_info = $e->errorInfo;
            if($error_info[1] == 1062) {
                generateBarcode($user_id);
            } else {
                // Only logs when an error other than duplicate happens
                Log::error($e);
            }

        }
    }
    // age calculator
    function ageCalculator() {  
    var userinput = document.getElementById("studBday").value;  
    var dob = new Date(userinput);  
    if(userinput==null || userinput=='') {  
    //   document.getElementById("message").innerHTML = "**Choose a date please!";    
      return false;   
    } else {  
      
    //calculate month difference from current date in time  
    var month_diff = Date.now() - dob.getTime();  
      
    //convert the calculated difference in date format  
    var age_dt = new Date(month_diff);   
      
    //extract year from date      
    var year = age_dt.getUTCFullYear();  
      
    //now calculate the age of the user  
    var age = Math.abs(year - 1970);  
      
    //display the calculated age  
    return document.getElementById("sage").innerHTML =age;  
    }  
}  
</script>

@endsection