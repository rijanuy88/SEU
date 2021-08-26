
{{-- @extends('layouts.Studtabs') --}}
@extends('layouts.stud')

@section('title', 'Class Offerings')

<style>
</style>

@section('content')


<div class="card  mx-auto">
    <div class="card-header text-white" style="background-color: #e19021">
        Search Class Offerings
    </div>
    <div div class="card-body">
    <form>
 
    <legend></legend>
    <div class="mb-3">
      <label for="classSearch" class="form-label">Class Code</label>
      <input type="text" id="classSearch" class="form-control" placeholder="ex. GE, GE 1108, 16-812">
    </div>
   
    
    <button type="button" class="btn btn-primary" style="background-color: #e19021 ">Search</button>
  
</form>

</div>

@endsection

