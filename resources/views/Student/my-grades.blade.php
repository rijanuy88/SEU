
{{-- @extends('layouts.Studtabs') --}}
@extends('layouts.stud')

@section('title', 'Grades')

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
        Academic Information
    </div>
    <div div class="card-body">
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
        <table class = "table" >
            <tr>
                <td> 
                    <div style ="text-align: center"  >
                        <h1 style = "color: green">3.80</h1>
                        <h5 style = "color: gray">ANNUAL QPI</h5>
                    </div>
                </td>
                <td>
                    <div style ="text-align: center" >
                    <h1>14.0</h1>
                    <h5 style = "color: gray">TOTAL CREDITS</h5>
                </td>
        </div>
        </tr>
        </table>
        &nbsp
    </div>


<div class="card w-75 mx-auto">
    <div class="card-header text-white" style="background-color: #e19021 ">Report Card </div>
    <div class="card-body">

    <table class="table" style="text-align: center">
        <thead>
            <tr>
                <th scope="col" style="color:gray">CLASS CODE</th>
                <th scope="col" style="color:gray">SUBJECT CODE</th>
                <th scope="col" style="color:gray">SUBJECT NAME</th>
                <th scope="col" style="color:gray">PRELIM</th>
                <th scope="col" style="color:gray">MIDTERM</th>
                <th scope="col" style="color:gray">FINALS</th>
                <th scope="col" style="color:gray">CREDITS</th>
                <th scope="col" style="color:gray">FINAL GRADE</th>
            </tr>
        </thead>

            <tr >
                <td>12-783</td>
                <td>CS 1001</td>
                <td>Intro to Computing</td>
                <td></td>
                <td></td>
                <td></td>
                <td>3.0</td>
                <td>A</td>
            </tr>

            <tr>
                <td>3-8912</td>
                <td>CS 4312</td>
                <td>Intro to Programming</td>
                <td></td>
                <td></td>
                <td></td>
                <td>3.0</td>
                <td>A</td>
            </tr>

            <tr >
                <td>16-616</td>
                <td>GE 1104</td>
                <td>Life and Works of Rizal</td>
                <td></td>
                <td></td>
                <td></td>
                <td>3.0</td>
                <td>B+</td>
            </tr>
 
            
            <tr >
                <td>16-319</td>
                <td>GE 1102</td>
                <td>purposive Communication</td>
                <td></td>
                <td></td>
                <td></td>
                <td>3.0</td>
                <td>A</td>
            </tr>
            
            <tr >
                <td>16-716</td>
                <td>PE 3</td>
                <td>PE 3: Basketball</td>
                <td></td>
                <td></td>
                <td></td>
                <td>2.0</td>
                <td>D</td>
            </tr>

           
  </tbody>
             <tr >
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th scope="row">14.0</td>
                <th scope="row">B+</td>
            </tr>
</table>


</div>
</div>

</div>

@endsection

