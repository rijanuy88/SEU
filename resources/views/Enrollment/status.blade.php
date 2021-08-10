@extends('layouts.master')

@section('title', 'Enrollment Status')

@section('content')
    <!-- Enrollment Status Card -->
    <div class="card mx-auto d-block col-sm-6" style="margin:3%">
        <div class="card-header">
            <h5><b>Enrollment Status</b></h5>
        </div>
        <div class="card-body">
        <!-- Personal Info Table -->
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th width="25%">Applicant Number</th>
                    <td>123456</td>
                </tr>
                <tr>
                    <th>Applicant Name</th>
                    <td>Seuss, Jacob L.</td>
                </tr>
            </tbody>
        </table>
        <table class ="table table-bordered">
                <tr>
                    <th>Preferred Program</th>
                    <th>Schedule of Exam</th>
                    <th>Status</th>
                    <th>Remarks</th>
                </tr>
            <tbody>
                <tr>
                    <td>BS Computer Science</td>
                    <td>December 21, 2012</td>
                    <td>Passed</button>
                    <td><a href="/SEU/public/documents"><button type="button" class="btn btn-dark">Submit Documents</button></a></td>
                </tr>
            </tbody>
             
        </table>
        <!-- Status -->

    </div>
@endsection
