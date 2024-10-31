<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid ">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Disabled</a>
              </li>
            </ul>
          </div>
          <div class="px-2 text-white">
            login
          </div>
        </div>
      </nav>
    <!-------------------------------------- main-------------------------------->
 <main class="container p-0 m-0">
    <div class="row">
        <!------------------ side bar----------------------->
       <div class="col-md-2 bg-w container text-bg-light p-3">
            <ul class="navbar-nav p-4">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link icon-link icon-link-hover" href="{{ route('teachers.index') }}">Teacher</a>
              </li>
              <li class="nav-item">
                <a class="nav-link icon-link icon-link-hover" href="{{ route('students.index') }}">Student</a>
              </li>
              <li class="nav-item">
                <a class="nav-link icon-link icon-link-hover" href="{{ route('courses.index') }}">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link icon-link icon-link-hover" href="{{ route('batches.index') }}">Batches</a>
              </li>
              <li class="nav-item">
                <a class="nav-link icon-link icon-link-hover" href="{{ route('enrollments.index') }}">Enrollment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link icon-link icon-link-hover" href="{{ route('payments.index') }}">Payment</a>
              </li>
            </ul>
       </div>
       <!------------- content ----------------->
       <div class="col-md-10 container">
          <h1 class="text-center text-secondary py-5">Student Management Project</h1>
          @yield('content')
       </div>
    </div>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
