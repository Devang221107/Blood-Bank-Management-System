<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "blood_bank_management_system");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donor_name = $_POST["donor_name"]; // Form field
    $age = $_POST["age"]; // Form field
    $blood_group = $_POST["blood_group"]; // Form field
    $contact_number = $_POST["contact_number"]; // Form field
    $donation_date = date("Y-m-d");

    // Insert into the donations table
    $sql = "INSERT INTO donations (donor_name, age, blood_group, contact_number, donation_date)
            VALUES ('$donor_name', '$age', '$blood_group', '$contact_number', '$donation_date')";

    // Execute query
    $message = $conn->query($sql) === TRUE
        ? "Thank you, $donor_name! Your donation has been recorded."
        : "Error: " . $conn->error;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donate - Blood Bank Management System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,600,700&display=swap">
</head>

<body style="background-color: #f8f9fa;">
    <!-- NAVBAR -->
    <nav class="navbar navbar-light navbar-expand-md bg-light fixed-top py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <span class="bs-icon-sm bs-icon-circle bs-icon-danger shadow d-flex justify-content-center align-items-center me-2 bs-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-droplet">
                        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                    </svg>
                </span>
                <span>Blood Bank Management</span>
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">SERVICES</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link active" href="donate.php">DONATE</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT US</a></li>
                </ul>
                <a class="btn btn-danger" href="register.php">Sign Up</a>
            </div>
        </div>
    </nav>

    <!-- DONATION FORM -->
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <h4 class="text-center mb-4">Donate Blood</h4>
                            <?php if (!empty($message)) echo "<div class='alert alert-info'>$message</div>"; ?>
                            <form method="post" action="donate.php">
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Age</label>
                                    <input type="number" name="age" class="form-control" required min="18">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Blood Group</label>
                                    <select name="blood_group" class="form-control" required>
                                        <option value="">-- Select --</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contact Number</label>
                                    <input type="text" name="contact" class="form-control" required>
                                </div>
                                <button class="btn btn-danger w-100" type="submit">Donate</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-light text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; 2025 Blood Bank Management System</p>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
