@extends('layouts.master')

@section('title', 'Welcome')

<style>
    .bg-custom{
        background-color: #5c0d0d;
    }

    input{
        height:5%
    }
</style>


@section('content')
<div class="bg-custom mh-100vh">
    <div class="container-fluid" style="padding-bottom: 3%">

        <img class="mx-auto d-block col-sm-3 img-fluid" src="assets/SEU_Big Logo.png" alt="logo" >

        <div class="login_fields mx-auto d-block col-sm-3 col-md" >
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>    
            <a style="text-decoration: none" href="/SEU/public/dashboard"><button type="button" class="btn btn-custom mx-auto d-block p-2 col-md-8">Log in</button></a>
    </div>
</div>
@endsection