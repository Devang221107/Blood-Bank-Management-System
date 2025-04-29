<?php
$page_title = "Blood Bank Management System";
$active_page = "home";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&display=swap">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <span class="bs-icon-sm bs-icon-circle bs-icon-danger shadow d-flex justify-content-center align-items-center me-2 bs-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-droplet">
                    <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                    <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                </svg>
            </span>
            <span>BLOOD BANK MANAGEMENT SYSTEM</span>
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="home.php">HOME</a></li>
                <li class="nav-item"><a class="nav-link active" href="services.php">SERVICES</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">ABOUT US</a></li>
                <li class="nav-item"><a class="nav-link" href="donate.php">DONATE</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT US</a></li>
            </ul>
            <a class="btn btn-danger shadow" role="button" href="signup.php">REGISTER</a>
        </div>
    </div>
</nav>

<header class="bg-danger-gradient pt-5 mt-5">
    <div class="container pt-4 pt-xl-5">
        <h2 class="text-center mb-4 text-white">Our Services</h2>
        <div class="row g-4">

            <!-- Blood Donation -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Blood Donation</h5>
                        <p class="card-text">Register and donate blood to help save lives. Walk-in and scheduled donations available.</p>
                    </div>
                </div>
            </div>

            <!-- Blood Request -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Blood Request</h5>
                        <p class="card-text">Request blood units online through our portal. Quick and verified response guaranteed.</p>
                    </div>
                </div>
            </div>

            <!-- Emergency Supply -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Emergency Supply</h5>
                        <p class="card-text">Fast-track service for emergency cases. Call us for immediate help at +91-XXXXXXXXXX.</p>
                    </div>
                </div>
            </div>

            <!-- Health Checkups -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Free Health Checkups</h5>
                        <p class="card-text">Free health screening for all donors. Includes blood pressure, hemoglobin, and more.</p>
                    </div>
                </div>
            </div>

            <!-- Blood Group Identification -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Blood Group Identification</h5>
                        <p class="card-text">Know your blood group through a quick and reliable test at our center.</p>
                    </div>
                </div>
            </div>

            <!-- Awareness Programs -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Awareness Programs</h5>
                        <p class="card-text">Join our events and seminars to spread awareness about blood donation and its importance.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; <?php echo date("Y"); ?> Blood Bank Management System. All Rights Reserved.</p>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
