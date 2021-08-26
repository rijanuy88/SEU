

@extends('layouts.employee')

@section('title', 'Tuition & Misc by Batch')

<style>
</style>

@section('content')


<div class="card  mx-auto">
    <div class="card-header text-white" style="background-color: #e19021">
        Search Batch
    </div>
    <div div class="card-body">
    <form>
 
    <legend></legend>
    <div class="mb-3">
      <label for="classSearch" class="form-label">Batch Name</label>
      <input type="text" id="classSearch" class="form-control" placeholder="ex. BSCS 3">
    </div>
   
    <a href="/SEU/public/admin/finance/tuition-misc-student"> <button type="button" class="btn btn-primary" style="background-color: #e19021 " >Search</button>
   
  
</form>

</div>

@endsection
