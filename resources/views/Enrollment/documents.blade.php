{{-- file upload documents --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">South East University</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Enrollment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
            </ul>
            <span class="navbar-text">
            Log in
            </span>
        </div>
    </nav>

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
    
    
</body>

</html>