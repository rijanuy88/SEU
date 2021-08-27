<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- favicon --}}

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    

<!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{--tagging --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- <script src="../../js/stud.js"></script> --}}
    
    {{-- <script type="application/javascript">
        $(document).ready(function(){
            $('ul li button').click(function(){
                $('li button').removeClass("active");
                $(this).addClass("active");
            });
        });
    </script> --}}

    <script>
        $( '#sidebarMenu .nav-link button' ).on( 'click', function () {
            $( '#sidebarMenu .nav-link' ).find( 'li.active' ).removeClass( 'active' );
            $( this ).parent( 'li' ).addClass( 'active' );
        });
    </script>

</head>
<style>
    .navbar-custom{
        background-color: #6a1717;
    }
    #main-navbar{
        background-color: whitesmoke;
        height: 11%;
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
    
    .sidebar-nav li button:hover {
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
        background: rgba(255, 255, 255, 0.2);
    }
    
    .sidebar-nav li button:active,
    .sidebar-nav li button:focus {
        text-decoration: none;
        color: #fff;
        background: #5c0d0d
    }
    .list-group-item>button{
        text-decoration:none;
        color: white;
    }

    #sidebarMenu .li:active,
    #sidebarMenu li:focus {
        text-decoration: none;
        color: #fff;
        background: #5c0d0d
    }

    /* .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
        color: #fff;
        background: #5c0d0d
    }
    .list-group-item>a{
        text-decoration:none;
        color: white;
    }
    */
    @media (max-width: 991.98px) {
        .sidebar {
            width: 100%;
        }
    }
    #sidebarMenu li:active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        color: #fff;
        background: #5c0d0d
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

    .btn-custom{
        background-color: #e19021;
        color:white;
    }

	th{
		color:gray;
	}

    .form-check-input::after{
        color:  #e19021;
    }
</style>


<title>SEU Admin Portal | @yield('title')</title>

<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse navbar-custom sidebar-nav">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4 ">
                <a href="/SEU/public/dashboard">
                    {{-- <img src="assets/SEU_Mini Logo.png" alt="" width="200" height="55"> --}}
                    <img src="{{ asset('/assets/SEU_Mini Logo.png') }}" alt="" width="200" height="55">
                </a>
                <hr>
                <ul id="collapseExample1" class=" nav flex-column nav-pills collapse show list-group list-group-flush">
                    <li class="list-group-item py-1">
                        <button onclick="document.location='/SEU/public/admin/employee/home'"class="nav-link active" >Home</button>
                    </li>
                    <li class="list-group-item py-1">
                        <button onclick="document.location='/SEU/public/admin/reg/pre-enlistment'" class="nav-link" data-bs-toggle="pill">Pre-Enlistment</button>
                    </li>
                    <li class="list-group-item py-1">
                        <button onclick="document.location='/SEU/public/admin/reg/curriculum'"class="nav-link" data-bs-toggle="pill">Curriculum</button>
                    </li>
                    <li class="list-group-item py-1">
                    <button onclick="document.location='/SEU/public/admin/reg/class-offerings'"class="nav-link" data-bs-toggle="pill">Class Offerings</button>
                    </li>
                    <li class="list-group-item py-1">
                        <button onclick="document.location='/SEU/public/admin/reg/faculty'"class="nav-link" data-bs-toggle="pill">Faculty List</button>
                    </li>
                    <li class="list-group-item py-1">
                        <button onclick="document.location='/SEU/public/admin/reg/staff'"class="nav-link" data-bs-toggle="pill">Non-Teaching Staff</button>
                    </li>
                    <li class="list-group-item py-1">
                        <button onclick="document.location='/SEU/public/admin/faculty/batch'"class="nav-link" data-bs-toggle="pill">Batch List</button>
                    </li>
                    {{-- <li class="list-group-item py-1">
                        <a href="/SEU/public/admin/faculty/class" class="text-reset">Class List</a>
                    </li> --}}
                    <li class="list-group-item py-1">
                        <button onclick="document.location='/SEU/public/admin/finance/tuition-misc'" class="nav-link" data-bs-toggle="pill">Tuition & Misc. Fees</button>
                    </li>
                    <li class="list-group-item py-1">
                        <button onclick="document.location='/SEU/public/'" class="nav-link" data-bs-toggle="pill" >Log out</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Sidebar --> 

    <!-- Navbar -->
    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg fixed-top navbar-custom">
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
        @yield('modals')
        @yield('scripts')
    </div>
    </main>
<!--Main layout-->


<script type="text/javascript">
    $(function(){
        // $('.sidebar1 a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active'); i have not tried this line
        $('.list-group a').click(function(){
            $(".list-group-item").removeClass('active');
            $(this).addClass('active');          
        })
    })

    $(document).ready(function(){
   $(".text-reset").removeClass("active");
   $(".list-group-item").addClass("active");
});
</script>
