<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
</head>

<body>
    <div class="wrapper">
        <div class = "container-fluid d-flex justify-content-center">
            @auth
            <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <span class="text-primary hello-message font-weight-bold">Hello {{auth()->user()->firstName}}</span>
            @else
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            @endauth
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto order-1">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/documents">Documents</a>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline" method="POST" action=/logout>
                            @csrf
                            <button id="logout-btn" class="btn pt-2" type="submit">Logout</button>
                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/signup">Sign up</a>
                    </li>
                    @endauth
                    </ul>
                </div>
            </nav>
        </div>
        <main>
            {{$slot}}
        </main>
        <div class="container-fluid" id="footer">
            <div class="row p-4">
                <div class="col d-flex justify-content-end">
                    <p class="p-1">
                        <b>Contact</b><br>
                        (437)-779-2203<br>
                        razielmartinezcastillo@gmail.com</p>
                </div>
                <div class="col d-flex justify-content-start">
                    <p class="pl-5">
                        <b>Links</b><br>
                        <a href="github.com/razielmtz" class="footer-link">Github <i class="fa-brands fa-github"></i></a><br>
                        <a href="https://mx.linkedin.com/in/raziel-nicol%C3%A1s-mart%C3%ADnez-castillo-83b32b176" class="footer-link">LinkedIn <i class="fa-brands fa-linkedin"></i></a><br>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center p-2">
                © 2022 Raziel Martinez - Web Application
            </div>
        </div>
    </div>
</body>

</html>