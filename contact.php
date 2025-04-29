<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact - Blood Bank Management System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
</head>

<body style="background-position: 0 -60px;">
    <!-- Navbar -->
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
            <span class="bs-icon-sm bs-icon-circle bs-icon-danger shadow d-flex justify-content-center align-items-center me-2 bs-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-droplet">
                        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                    </svg>
                </span>
                <span>Blood Bank Management System</span>
            </a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">SERVICES</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="donate.php">DONATE</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">CONTACT US</a></li>
                </ul>
                <a class="btn btn-danger shadow" role="button" href="signup.php">REGISTER</a>
             </div>
        </div>
    </nav>

    <!-- Login Form -->
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Please enter your credentials</p>
                    <h2 class="fw-bold">Login to Blood Bank Portal</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div>
                        <form class="p-3 p-xl-4" method="post" action="login.php">
                            <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" required></div>
                            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                            <div><button class="btn btn-danger shadow d-block w-100" type="submit">Log in</button></div>
                        </form>
                    </div>
                </div>

                <!-- Contact Details -->
                <div class="col-md-4 col-xl-4 d-flex justify-content-center justify-content-xl-start">
                    <div class="d-flex flex-wrap flex-md-column align-items-md-start h-100">
                        <div class="d-flex align-items-center p-3">
                            <div class="me-3 text-primary"></div>
                            <div>
                                <h6 class="fw-bold mb-0">Phone</h6>
                                <p class="text-muted mb-0">+91 98765 43210</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div class="me-3 text-primary"></div>
                            <div>
                                <h6 class="fw-bold mb-0">Email</h6>
                                <p class="text-muted mb-0">bloodbank@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div class="me-3 text-primary"></div>
                            <div>
                                <h6 class="fw-bold mb-0">Location</h6>
                                <p class="text-muted mb-0">Health Street, City Hospital, Mumbai</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 text-center">
                    <ul class="list-unstyled">
                        <li><a href="home.php" class="text-white">Home</a></li>
                        <li><a href="donors.php" class="text-white">Donors</a></li>
                        <li><a href="requests.php" class="text-white">Requests</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center">
                    <ul class="list-unstyled">
                        <li><a href="donate.php" class="text-white">Donate</a></li>
                        <li><a href="contact.php" class="text-white">Contact Us</a></li>
                        <li><a href="signup.php" class="text-white">Sign Up</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center align-items-lg-start">
                    <div class="fw-bold d-flex align-items-center mb-2">
                        <span class="me-2"></span><span>Blood Bank Management System</span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">© 2025 Blood Bank Management System</p>
            </div>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
