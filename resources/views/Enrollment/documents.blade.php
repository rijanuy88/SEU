@extends('layouts.master')

@section('title', 'Documents Submission')

@section('content')
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="formFile" class="form-label">Report Card</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Birth Certificate</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <div class="mb-3">
                <label for="formFileDisabled" class="form-label">Medical Certificate</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <div class="mb-3">
                <label for="formFileSm" class="form-label">Waiver Upload</label>
                <input class="form-control " type="file" id="formFileSm">
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
    </div>
@endsection