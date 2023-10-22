<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IPT2 Midterm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9T0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lobster&display=swap">
    <style>
        .container {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body style="background-image: url('https://lacucinaportdouglas.com.au/wp-content/uploads/2022/02/AdobeStock_280790880-scaled.jpeg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    @if (auth()->check())
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm ml-4">
        <!-- Food Icon and Brand -->
        <a class="navbar-brand" href="#">
            <i class="fas fa-utensils"></i> <!-- Food Icon -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/foods') }}">
                        <i class="fas fa-hamburger"></i> Foods
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/logs') }}">
                        <i class="fas fa-clipboard-list"></i> Logs
                    </a>
                </li>
            </ul>
        </div>
        <form action="{{ url('/logout') }}" method="POST" class="form-inline my-2 my-lg-0">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-outline-light my-2 my-sm-0">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </nav>
    @endif
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
