@extends('layouts.master')

@section('title', 'pre-enlistment')


@section('content')
    <div class="mx-auto d-block col-sm-8" style="margin:3%" >
        <form class="row g-3">
            <div class="col-12" style="padding-top:2%">
            <h1 style = "text-align: center">What student are you?</h1>
            <h2 style = "text-align: center">Select your academic category to access specific pre-enlistment forms. </h2>
               
                &nbsp
                <a href="/SEU/public/undergrad-forms"><button type="button" class="col-12 btn btn-custom " >Undergrad Form</button></a>
                &nbsp
                <a href="/SEU/public/gradschool-forms"><button type="button" class="col-12 btn btn-custom" >Grad School Form</button></a>
                &nbsp
                <a href="/SEU/public/postgrad-forms"><button type="button" class=" col-12 btn btn-custom" >Post Grad Form</button></a>
           
            </div>
            
        </form>
    </div>
 
@endsection
