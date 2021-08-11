@extends('layouts.master')

@section('title', 'Welcome')

<style>
    .bg-custom{
        background-color: #6a1717;
    }
</style>


@section('content')
<div class="bg-custom text-white mh-100vh">
    <div class="container-fluid" style="padding-bottom: 3%">

        <img class="mx-auto d-block col-sm-3 img-fluid" src="assets/SEU_Big Logo.png" alt="logo" >

        <div class="login_fields mx-auto d-block col-sm-3" >
            <div class="mb-3">
                <input type="text" class="form-control" name="username" required placeholder="Username">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="password" placeholder="Password">
            </div>
            <a style="text-decoration: none" href="/SEU/public/dashboard"><button type="button" class="btn btn-custom mx-auto d-block">Log in</button></a>
        </div>
        

    </div>
@endsection