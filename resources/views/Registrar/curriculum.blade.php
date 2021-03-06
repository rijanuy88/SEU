@extends('layouts.employee')

@section('title', 'Curriculum')



@section('content')
<div class="container">
	<div class="card  mx-auto">
		<div class="card-header text-white" style="background-color: #e19021">
			Search Program and Year
		</div>
			<div div class="card-body">
					<div class="mb-3">
					<label for="progYearSearch" class="form-label">Search Program and Year</label>
					<input type="text" id=" progYearSearch" class="form-control" placeholder="ex. BS Computer Science 2019">
					&nbsp
					<div>
					<button type="button" class="btn btn-primary" style="background-color: #e19021 " >Search</button>
					</div>
				</div>
			</div>
	</div>
</div>
&nbsp

<div class="container">	
		<div class="card">
			<div class="card-header text-white" style="background-color: #e19021">
				Curriculum 
			</div>
			
			<div class="card-body" style="overflow-x:auto">
				<table class="table table-responsive table-sm" style="vertical-align:middle" id="faculty_table">
					<thead>
						<tr>
							<th scope="col">YEAR LEVEL</th>
							<th scope="col">SEMESTER</th>
							<th scope="col">COURSE NAME</th>
							<th scope="col">COURSE CODE</th>
							<th scope="col">PRE-REQUISITE</th>
							<th scope="col">UNITS</th>
							<th scope="col">YEAR</th>
							<th scope="col">ACTION</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1st Year</td>
							<td>1st Semester</td>
							<td>Intro to Computing</td>
							<td>CS 1001</td>
							<td></td>
							<td>3.0</td>
							<td>2019</td>
							<td>
								<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editcurriculumModal"><i class="bi bi-pencil-square"></i></button>
								<button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
            <div class="card-footer">
                <button type="button" class="btn btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#addcurriculumModal">Add</button>
            </div>
		</div>
	</div>
@endsection

@section('modals')
	<!--Confirm Modal -->
	<div class="modal fade" tabindex="-1" aria-hidden="true" id="success">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					Successfully sent!
				</div>
			</div>
    	</div>
    </div>

  <!--Edit Modal -->
  <div class="modal fade" id="editcurriculumModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="courseModalLabel">Edit Course</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST">
						@csrf
						<div class="mb-3">
              <div><label>Year Level</label></div>
              <div><input type="text" class="form-control" name="yearlvl" required></div>
						</div>
						<div class="mb-3">
							<div><label>Semester</label></div>
              <div><input type="text" class="form-control" name="semester" required></div>
						</div>
            <div class="mb-3">
              <div><label>Course Name</label></div>
              <div><input type="text" class="form-control" name="coursename" required></div>
						</div>
            <div class="mb-3">
              <div><label>Course Code</label></div>
              <div><input type="text" class="form-control" name="coursecode" required></div>
						</div>
						<div class="mb-3">
              <div><label>Pre-Requisite</label></div>
              <div><input type="text" class="form-control" name="prerequisite"></div>
			  <input type="text" value="" data-role="tagsinput" placeholder="Add tags" />
						</div>
						<div class="mb-3">
			  <div><label>Units</label></div>
              <div><input type="text" class="form-control" name="units" required></div>
						</div>
						<div class="mb-3"></div>
			  <div><label>Implementation Year</label></div>
              <div><input type="text" class="form-control" name="impYear" required></div>
						</div>
						<div class="mb-3"></div>
						<div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-custom" id="add">Save</button>
            </div>
					</form>
				</div>
			</div>
		</div>
	</div>

  <!--Add Modal -->
  <div class="modal fade" id="addcurriculumModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="courseModalLabel">Add Course</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST">
						@csrf
						<div class="mb-3">
              				<div><label>Year Level</label></div>
              				<div><input type="text" class="form-control" name="yearlvl" required></div>
						</div>
						<div class="mb-3">
							<div><label>Semester</label></div>
              <div><input type="text" class="form-control" name="semester" required></div>
						</div>
            <div class="mb-3">
              <div><label>Course Name</label></div>
              <div><input type="text" class="form-control" name="coursename" required></div>
						</div>
            <div class="mb-3">
              <div><label>Course Code</label></div>
              <div><input type="text" class="form-control" name="coursecode" required></div>
						</div>
						<div class="mb-3">
              <div><label>Pre-Requisite</label></div>
              <div><input type="text" class="form-control" name="pre" required></div>
						</div>
						<div class="mb-3">
							<div><label>Units</label></div>
              <div><input type="text" class="form-control" name="units" required></div>
						</div>
						<div class="mb-3"></div>
						<div class="form-check form-switch" >
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							<label class="form-check-label" for="flexSwitchCheckDefault">Laboratory</label>
						</div>
			  <div class="mb-3"></div>
			  <div><label>Implementation Year</label></div>
              <div><input type="text" class="form-control" name="impYear" required></div>
						</div>
						<div class="mb-3"></div>
						<div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-custom" id="add">Save</button>
            </div>
					</form>
				</div>
			</div>
		</div>
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
?????? //empty Chapters dropdown
?????? semSel.length = 1;
    //display correct values
    var z = subjectObject[yrLvlSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      semSel.options[semSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>

<script>
//     $(".js-example-tokenizer").select2({
//         tags: true,
//         tokenSeparators: [',', ' ']
//     }) 

// 	$('select').select2({
// 		createTag: function (params) {
// 			var term = $.trim(params.term);

// 			if (term === '') {
// 			return null;
// 			}

// 			return {
// 			id: term,
// 			text: term,
// 			newTag: true // add additional parameters
// 			}
// 		}
// 		});

// 		$('select').select2({
//   createTag: function (params) {
//     // Don't offset to create a tag if there is no @ symbol
//     if (params.term.indexOf('@') === -1) {
//       // Return null to disable tag creation
//       return null;
//     }

//     return {
//       id: params.term,
//       text: params.term
//     }
//   }
// });

// $('select').select2({
//   insertTag: function (data, tag) {
//     // Insert the tag at the end of the results
//     data.push(tag);
//   }
// });

</script>
@section('scripts')
	<script src="../../js/sidebar.js"></script>
@endsection

@section('styles')
	<link rel="stylesheet" href="../../css/tags.css">
@endsection