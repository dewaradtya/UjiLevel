<?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Retrieve the username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lewa Drink & Eatery</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-lKuwvrZotT/ElO5fEZ2WxM4e8xHKuRL8i2NpE2FjM9lF1v57bNp3lY3+jssV9QfN" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="img/4.png">
    <style>
        body {
            background: linear-gradient(to left, #952323, #053B50);
            padding-top: 50px;
        }

        .jumbotron {
            background-image: url('/LEWA/img/');
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 100px 20px;
            margin-bottom: 0;
        }

        .explore-menu-btn {
            background: #176B87;
            transition: background 0.3s ease-in-out;
        }

        .explore-menu-btn:hover {
            background: #144f64;
        }

        h1 {
            font-size: 3.5em;
            font-weight: bold;
        }

        .feature-box {
            background-color: #fff;
            padding: 50px 20px;
            margin-top: -50px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .feature-box h2 {
            color: #053B50;
        }
    </style>
</head>

<body>
    <?php
    include("navbar.php")
    ?>

    <!-- Jumbotron (Hero Section) -->
    <section id="home">
        <div class="jumbotron">
            <h1 class="display-5 mt-5">Welcome to Lewa Drink & Eatery <span id="username"></span></h1>
            <p class="lead">Experience the finest dining with a blend of delicious drinks</p>
            <a class="btn btn-lg text-white mt-4 explore-menu-btn" href="menu.php" role="button" style="border-radius: 20px;">Explore Menu</a>
        </div>
    </section>

    <!-- Feature Section -->
    <section id="kualitas">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <h2>Quality Ingredients</h2>
                        <p>We use only the freshest and finest ingredients in our dishes and drinks.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <h2>Cozy Ambiance</h2>
                        <p>Enjoy your meal in a warm and inviting atmosphere that feels just like home.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <h2>Exceptional Service</h2>
                        <p>Our friendly staff is dedicated to providing you with an exceptional dining experience.</p>
                    </div>
                </div>
            </div>
    </section>

    <section id="menu">
        <div class="container-fluid bg-light mt-4">
            <div class="container">
                <h2 class="text-center mb-4">Top Menu</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/2.png" class="card-img-top" alt="Menu Item Image">
                            <div class="card-body">
                                <h5 class="card-title">Drink</h5>
                                <p class="card-text">Description of the dish goes here.</p>
                                <p class="card-text text-muted">$1.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/1.png" class="card-img-top" alt="Menu Item Image">
                            <div class="card-body">
                                <h5 class="card-title">Food</h5>
                                <p class="card-text">Description of the dish goes here.</p>
                                <p class="card-text text-muted">$1.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="img/3.png" class="card-img-top" alt="Menu Item Image">
                            <div class="card-body">
                                <h5 class="card-title">Snack</h5>
                                <p class="card-text">Description of the dish goes here.</p>
                                <p class="card-text text-muted">$1.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="order.php" style="text-decoration: none;"><button type="button" class="btn btn-outline-primary mb-4">Order Now</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="text-light py-3 mt-" style="background:#053B50;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: info@lewadrinkandeatery.com</p>
                    <p>Phone: (123) 456-7890</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-light">Facebook</a><br>
                    <a href="#" class="text-light">Twitter</a><br>
                    <a href="#" class="text-light">Instagram</a>
                </div>
                <div class="col-md-4">
                    <h5>Location</h5>
                    <p>123 Main Street, Cityville</p>
                    <p>State, 12345, Country</p>
                </div>
            </div>
            <hr class="my-4">
            <p>&copy; 2023 Lewa Drink & Eatery. All rights reserved.</p>
        </div>
    </footer>


    <!-- Add Bootstrap JS and Popper.js links (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>