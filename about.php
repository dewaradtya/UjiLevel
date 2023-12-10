<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lewa Drink & Eatery</title>
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
            color: #053B50;
            padding: 100px 20px;
            margin-bottom: 0;
            text-align: center;
        }

        h1 {
            font-size: 3.5em;
            font-weight: bold;
        }

        .about-section {
            background-color: #fff;
            padding: 40px 20px;
            margin-top: -40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .mission-vision {
            background-color: #053B50;
            color: #fff;
            padding: 40px 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php
    include("navbar.php")
    ?>

    <!-- Jumbotron (Hero Section) -->
    <div class="jumbotron">
        <h1 class="display-4 mt-5">About Lewa Drink & Eatery</h1>
        <p class="lead">Discover the story behind our passion for delicious food and drinks.</p>
    </div>

    <!-- About Section -->
    <div class="container about-section">
        <h2 class="text-center mb-4">Our Story</h2>
        <p>Lewa Drink & Eatery is more than just a place to eat and drink. It's a culmination of passion, dedication, and a love for creating memorable dining experiences. Our journey began with a simple idea – to provide a cozy and welcoming space where people can enjoy quality food and beverages.</p>
        <p>Every dish and drink on our menu is crafted with care, using the finest ingredients and a blend of flavors that will tantalize your taste buds. From our kitchen to your table, we strive to make each meal a delightful experience.</p>
    </div>

    <!-- Mission and Vision Section -->
    <div class="container mission-vision">
        <div class="row">
            <div class="col-md-6">
                <h2>Mission</h2>
                <p>Our mission is to create a vibrant and inclusive community hub where people can come together to savor delicious food, sip on exceptional drinks, and forge lasting connections. We aim to exceed expectations by delivering exceptional service and an unparalleled dining experience.</p>
            </div>
            <div class="col-md-6">
                <h2>Vision</h2>
                <p>Our vision is to be a beloved destination for food enthusiasts and a go-to spot for those seeking a warm and inviting atmosphere. We aspire to continually innovate our menu, maintain high standards of quality, and leave a lasting impression on every guest who walks through our doors.</p>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="text-light py-3 mt-3" style="background:#053B50;">
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