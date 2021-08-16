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
    
    body {
        background-color: #fbfbfb;
    }
    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
            padding-top: 2%;
        }
    }
    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0;
        /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
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
        "data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    a{
        text-decoration:none;
    }
    #sidebarMenu{
        background-color: #6a1717;
        color:white;
    }
    .list-group-item{
        background-color: #6a1717;
        color:white;
    }
    @media (max-width: 991.98px) {
        .sidebar {
            width: 100%;
        }
    }
</style>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                {{-- <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <span class="fs-4"><strong>mdo</strong></span>
                </a> --}}
                {{-- <hr> --}}
                <ul
                    id="collapseExample1"
                    class="collapse show list-group list-group-flush"
                    >
                <li class="list-group-item py-1">
                    <a href="" class="text-reset">Home</a>
                </li>
                <li class="list-group-item py-1">
                    <a href="" class="text-reset">My Registration</a>
                </li>
                <li class="list-group-item py-1">
                    <a href="" class="text-reset">My Grades</a>
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
    <nav id="main-navbar" class="navbar navbar-expand-lg fixed-top navbar-custom">
        <!-- Container wrapper -->
        <div class="container-fluid">
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="/SEU/public/dashboard">
            <img src="assets/SEU_Mini Logo.png" height="50"
            alt=""
            loading="lazy">
            
        </a>
        {{-- <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto">
            <input
                autocomplete="off"
                type="search"
                class="form-control rounded"
                placeholder='Search (ctrl + "/" to focus)'
                style="min-width: 225px"
                />
            <span class="input-group-text border-0"
                ><i class="fas fa-search"></i
            ></span>
        </form> --}}

        <!-- Right links -->
            {{-- <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                        >
                        <img
                            src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                            class="rounded-circle"
                            height="22"
                            alt=""
                            loading="lazy"
                        />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">My profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul> --}}
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    </header>
<!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px">
    <div class="container pt-4">
        @yield('content')
    </div>
    </main>
<!--Main layout-->