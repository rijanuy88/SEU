<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      .navbar-custom{
        background-color: #6a1717;
      }

      .nav-link{
        color: white;
      }

      .nav-link:hover, .nav-link:active, .nav-link:focus{
        color: #e19021;
      }
      .nav-link-login{
        color: white;
        text-decoration: none;
      }
      .nav-link-login:hover{
        color:#6a1717;
      }
          
      .custom-toggler .navbar-toggler-icon {
        background-image: url(
        "data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
      

      .btn-custom{
        background-color: #e19021;
        color:white;
      }
      
      

    </style>
    <title>South East University | @yield('title')</title>
  
    @yield('styles')
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="/SEU/public/">
          <img src="assets/SEU Mini Logo.png" alt="" width="180" height="50">
        </a>
          <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/SEU/public/">Home</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Enrollment
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/SEU/public/pre-enlistment">Pre-Enlistment Form</a></li>
                  <li><a class="dropdown-item" href="/SEU/public/status">Enrollment Status</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/SEU/public/documents">Documents Submission</a></li>
              </ul>
              </li>
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/SEU/public/apply">Contact Us</a>
              </li>
          </ul>
          <span>
                <a href="/SEU/public/login"><button type="button" class="btn btn-custom">Log in</button></a>
          </span> 
          </div>
      </div>
    </nav>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    @yield('content')
  </body>
</html>