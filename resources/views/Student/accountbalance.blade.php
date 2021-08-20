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
</div>

<div class = "col-12 w-75 mx-auto" style ="text-align: center" >
    &nbsp
    <table class = "table " >
        <tr>
            <td> 
                <div style ="text-align: center"  >
                    <h1 style = "color: #6a1717">700.00</h1>
                    <h5 style = "color: gray">Balance</h5>
                </div>
            </td>
            <td>
                <div style ="text-align: center" >
                <h1 >700.00</h1>
                <h5 style = "color: gray">Current Due</h5>
            </td>
    </tr>
    </table>
    &nbsp
</div>

{{-- contents --}}
{{-- BALANCE --}}
<div class="card w-75 mx-auto">
    <div class="card-header text-white" style="background-color: #e19021">
        PAYMENTS & DUE
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

<div class="card w-75 mx-auto">
    <div class="card-header text-white" style="background-color: #e19021 ">BREAKDOWN </div>
    <div class="card-body">

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
                <td class="text-right">35,000.00</td>
            </tr>
            {{-- category --}}
            <tr>
                <td>Miscellaneous Fees</td>
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
@endsection


<script>
    // returns year= &sem= & in php
var yearObject = {
  "1": {
    "1","2"
  },
  "2": {
    "1","2"
  },
  "3": {
    "1","2"
  },
  "4": {
    "1","2"
  },
  "5": {
    "1","2"
  },
}
window.onload = function() {
  var yrLvlSel = document.getElementById("yrLvl");
  var semSel = document.getElementById("sem");
  for (var x in subjectObject) {
    yrLvlSel.options[yrLvlSel.options.length] = new Option(x, x);
  }

  topicSel.onchange = function() {
    //empty Chapters dropdown
    semSel.length = 1;
    //display correct values
    var z = subjectObject[yrLvlSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      semSel.options[semSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>