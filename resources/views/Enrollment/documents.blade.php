@extends('layouts.master')

@section('title', 'Documents Submission')

@section('content')
    <div class="mx-auto d-block col-sm-5" style="margin:3%">
        <form class="needs-validation">
            <div class="mb-3">
                <label for="formFile" class="form-label">Report Card</label>
                <input class="form-control" type="file" id="formFile" required>
            </div>

            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Birth Certificate</label>
                <input class="form-control" type="file" id="formFile" required>
            </div>

            <div class="mb-3">
                <label for="formFileDisabled" class="form-label">Medical Certificate</label>
                <input class="form-control" type="file" id="formFile" required>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection