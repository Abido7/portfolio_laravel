<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    @yield('styles')
    @yield($title ?? "Portfolio")
</head>

<body>
    <!-- ================================================== start navbar =============================================== -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <div class="container">
            <div class="logo">
                <a class="navbar-brand" href="#"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">about <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">team <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">services <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#works">works <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">pricing <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">contact <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
            <div class="social">
                <ul
                    class="list-unstyled d-flex flex-row justify-content-center align-items-center position-relative m-0">
                    <li>
                        <a href="#" class="fab fa-facebook-f text-decoration-none pr-2"></a>
                    </li>
                    <li>
                        <a href="#" class="fab fa-twitter text-decoration-none pr-2"></a>
                    </li>
                    <li>
                        <a href="#" class="fab fa-instagram-square text-decoration-none pr-2"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')


    <!-- ================================================== start script links ====================================== -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    @yield('scripts')
</body>

</html>
