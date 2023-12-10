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
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #053B50;
        }

        .jumbotron {
            background-color: #fff;
            color: #053B50;
            padding: 100px 20px;
            margin-bottom: 0;
        }

        h1 {
            font-size: 3.5em;
            font-weight: bold;
        }

        .menu-section {
            background-color: #176B87;
            padding: 40px 20px;
            margin-top: -20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .menu-item {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: 20px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .menu-item:hover {
            transform: scale(1.05);
        }

        .menu-item img {
            max-width: 100%;
            height: auto;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            display: block;
            margin: 0 auto;
            /* Center the image horizontally */
        }

        .menu-details {
            padding: 20px;
        }

        .menu-title {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .menu-description {
            color: #6c757d;
            margin-bottom: 10px;
        }

        .menu-price {
            font-size: 1.25em;
            font-weight: bold;
            color: #053B50;
        }

        .order-now-btn {
            background: #952323;
            transition: background 0.3s ease-in-out;
        }

        .order-now-btn:hover {
            background: #A73121;
        }
    </style>
</head>

<body>
    <?php
    include("navbar.php")
    ?>

    <!-- Jumbotron (Hero Section) -->
    <div class="jumbotron text-center">
        <h1 class="display-4 mt-5">Explore Our Menu</h1>
        <p class="lead">Delight your taste buds with our exquisite offerings.</p>
    </div>

    <!-- Menu Section -->
    <div class="container menu-section">
        <div class="row">
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="img/1.png" alt="Menu Item 1" class="mt-2">
                    <div class="menu-details">
                        <h3 class="menu-title">Special Dish 1</h3>
                        <p class="menu-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="menu-price">$1.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="img/2.png" alt="Menu Item 2" class="mt-2">
                    <div class="menu-details">
                        <h3 class="menu-title">Special Dish 2</h3>
                        <p class="menu-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="menu-price">$1.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="img/3.png" alt="Menu Item 3" class="mt-2">
                    <div class="menu-details">
                        <h3 class="menu-title">Special Dish 3</h3>
                        <p class="menu-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="menu-price">$1.00</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="img/1.png" alt="Menu Item 1" class="mt-2">
                    <div class="menu-details">
                        <h3 class="menu-title">Special Dish 1</h3>
                        <p class="menu-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="menu-price">$1.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="img/2.png" alt="Menu Item 2" class="mt-2">
                    <div class="menu-details">
                        <h3 class="menu-title">Special Dish 2</h3>
                        <p class="menu-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="menu-price">$1.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="img/3.png" alt="Menu Item 3" class="mt-2">
                    <div class="menu-details">
                        <h3 class="menu-title">Special Dish 3</h3>
                        <p class="menu-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="menu-price">$1.00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-lg text-white mt-4 order-now-btn" href="order.php" role="button" style="border-radius: 20px;">Order Now</a>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="text-light py-3 mt-2" style="background:#053B50;">
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