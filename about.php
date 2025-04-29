<?php
// about-us.php for Blood Bank Management System
$page_title = "About Us - Blood Bank Management System";
$active_page = "about-us";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&display=swap">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

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
                <li class="nav-item"><a class="nav-link" href="donors.php">SERVICES</a></li>
                <li class="nav-item"><a class="nav-link active" href="about.php">ABOUT US</a></li>
                <li class="nav-item"><a class="nav-link" href="donate.php">DONATE</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT US</a></li>
            </ul>
            <a class="btn btn-danger shadow" role="button" href="singup.php">REGISTER</a>
        </div>
    </div>
</nav>

<!-- Team Section -->
<section class="py-5 mt-5">
    <div class="container py-5">
        <h2 class="text-center mb-5">Meet Our Team</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
            <div class="col">
                <div class="card h-100 shadow-sm border-0 text-center">
                <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top rounded-top" alt="Michael Chen - Blood Specialist">
                <div class="card-body">
                        <span class="badge bg-danger mb-2">Director</span>
                        <h4 class="fw-bold">Dr. John Smith</h4>
                        <p class="text-muted">MD in Hematology with over 15 years of experience in blood bank management.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm border-0 text-center">
                    <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top rounded-top" alt="Michael Chen - Blood Specialist">
                    <div class="card-body">
                        <span class="badge bg-danger mb-2">Head Technician</span>
                        <h4 class="fw-bold">Michael Chen</h4>
                        <p class="text-muted">Certified blood bank specialist with 10 years of technical experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blood Donation Stats -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="text-danger">10,000+</h3>
                        <p class="mb-0">Successful Donations</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="text-danger">5,000+</h3>
                        <p class="mb-0">Lives Saved</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="text-danger">50+</h3>
                        <p class="mb-0">Hospital Partners</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Mission -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Our Mission</h2>
                <p>To ensure safe and adequate blood supply to all healthcare institutions through efficient collection, testing, storage and distribution of blood and blood components.</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check text-danger me-2"></i> Maintain highest standards of safety</li>
                    <li class="mb-2"><i class="fas fa-check text-danger me-2"></i> Promote voluntary blood donation</li>
                    <li class="mb-2"><i class="fas fa-check text-danger me-2"></i> Implement cutting-edge technology</li>
                </ul>
            </div>
            <div class="col-lg-6">
            
            </div>
        </div>
    </div>
</section>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/fontawesome.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
