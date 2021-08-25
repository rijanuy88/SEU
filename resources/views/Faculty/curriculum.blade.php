
{{-- @extends('layouts.Studtabs') --}}
@extends('layouts.employee')

@section('title', 'stud-dashboard')

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
<div class="card w-75 mx-auto">
    <div class="card-header text-white" style="background-color: #e19021">
        CURRICULUM EXPLORER
    </div>
    <div div class="card-body" style="overflow-x:auto;">
      <div class="col-6">
        <label for="yrLvl" class="form-label">Year Level</label>
        <select id="yrLvl" class="form-select">
          <option selected>All</option>
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
          <option selected>All</option>
          <option>1</option>
          <option>2</option>
        </select>
      </div>
    </div>
    
    <div div class="card-body" style="overflow-x:auto;">
      <table class="table " style="test-align: center" style="overflow-x:auto;">
        <tbody style="overflow-x:auto;">
          <thead>
              <tr>
                  <th scope="col" style="color:gray">YEAR LEVEL</th>
                  <th scope="col" style="color:gray">SEMESTER</th>
                  <th scope="col" style="color:gray">SUBJECT NAME</th>
                  <th scope="col" style="color:gray">SUBJECT CODE</th>
                  <th scope="col" style="color:gray">PRE-REQUISITE</th>
                  <th scope="col" style="color:gray">CREDITS</th>
                  <th scope="col" style="color:gray">GRADE</th>
              </tr>
          </thead>

          <tr >
              <td>1st Year</td>
              <td>1st Semester</td>
              <td>Intro to Computing</td>
              <td>CS 1001</td>
              <td></td>
              <td>3.0</td>
              <td>A</td>
          </tr>

          <tr>
              <td>1st Year</td>
              <td>2nd Semester</td>
              <td> Math in the Modern World</td>
              <td> GE 1108</td>
              <td></td>
              <td>3.0</td>
              <td>A</td>
          </tr>

          <tr>
              <td>2nd Year</td>
              <td>1st Semester</td>
              <td>Object-Oriented Programming</td>
              <td>CS 2314</td>
              <td>CS 1001</td>
              <td>3.0</td>
              <td>A</td>
          </tr>

          <tr>
              <td>2nd Year</td>
              <td>2nd Semester</td>
              <td>Software Engineering 1</td>
              <td>CS 2316</td>
              <td>CS 2314</td>
              <td>5.0</td>
              <td>A</td>
          </tr>

          <tr id = "yr3">
              <td>3rd Year</td>
              <td>1st Semester</td>
              <td>Software Engineering 2</td>
              <td>CS 2317</td>
              <td>CS 2316</td>
              <td>5.0</td>
              <td>A</td>
          </tr>

        </tbody>
      </table>
    </div>
</div>

<div>
       &nbsp
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