@extends('layouts.master')

@section('title', 'Enrollment Status')

@section('content')
<div class="jumbotron mx-auto d-block col-sm-6" style="margin:3%">
    <h1 class="display-4">Hello, applicant!</h1>
    <p class="lead">Kindly provide below your last name and the applicant code provided upon pre-enlistment.</p>
    <hr class="my-4">
    <div class="input-group">
        <input type="text" aria-label="Last Name" class="form-control" placeholder="Last Name">
        <input type="text" aria-label="Applicant Code" class="form-control" placeholder="Applicant Code">
        <div class="col-sm-3">
            <a href="/SEU/public/status"><button type="button" class="btn btn-custom">Search</button></a>
        </div>
    </div>
</div>
@endsection
