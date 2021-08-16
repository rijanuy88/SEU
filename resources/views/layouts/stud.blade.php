<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
        

<!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="../../js/stud.js"></script>
</head>
<style>
    .navbar-custom{
        background-color: #6a1717;
    }
    #main-navbar{
        background-color: whitesmoke;
        height: 10%;
        width: 100%;
        z-index: 10;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }
    .list-group-item{
        background-color: #6a1717;
        color:white;
    }
    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }
    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
    }
    a{
        text-decoration:none;
    }
    @media (max-width: 991.98px) {
        .sidebar {
            width: 100%;
        }
    }
    .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }
    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }    
    .custom-toggler .navbar-toggler-icon {
        background-image: url(
        "data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }
</style>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse navbar-custom">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="/SEU/public/dashboard">
                    <img src="assets/SEU_Mini Logo.png" alt="" width="200" height="55">
                </a>
                <hr>
                <ul id="collapseExample1" class="collapse show list-group list-group-flush">
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Home</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">My Registration</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="/SEU/public/my-grades" class="text-reset">My Grades</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="/SEU/public/account-balance" class="text-reset">My Account Balance</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="/SEU/public/curriculum" class="text-reset">My Curriculum</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Class Offerings</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="/SEU/public/" class="text-reset">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
     <!-- Navbar -->
     <nav id="main-navbar" class="navbar navbar-expand-lg fixed-top navbar-custom mx-3">
        <!-- Container wrapper -->
        <div class="container-fluid " >
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            
        </a>
        </div>
    </nav>
</header>

<!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 10%">
    <div class="container pt-4">
        @yield('content')
    </div>
    </main>
<!--Main layout-->