<?php
include("config.php");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the database
    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success mt-3" role="alert">Message send successfully!</div>';
    } else {
        echo '<div class="alert alert-danger mt-3" role="alert">Error: ' . $conn->error . '</div>';
    }
}
?>

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
            background-color: #fff;
            color: #053B50;
            padding: 100px 20px;
            margin-bottom: 0;
        }

        h1 {
            font-size: 3.5em;
            font-weight: bold;
        }

        .contact-section {
            background-color: #f8f9fa;
            padding: 40px 20px;
            margin-top: -20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .contact-form {
            background-color: #176B87;
            color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .form-control {
            height: 50px;
            border-radius: 8px;
        }

        .btn {
            background-color: #053B50;
            border-color: #053B50;
            color: #fff;
            margin: 0, 5px, 0, 5px;
        }

        .btn:hover {
            background-color: #032c3f;
            border-color: #032c3f;
            color: #f8f8f8;
        }

        .contact-details {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            color: #053B50;
        }

        .contact-details h2 {
            color: #053B50;
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .contact-details p {
            margin-bottom: 15px;
        }

        .contact-details strong {
            color: #053B50;
        }
    </style>
</head>

<body>
    <?php
    include("navbar.php")
    ?>

    <!-- Jumbotron (Hero Section) -->
    <div class="jumbotron text-center">
        <h1 class="display-4 mt-5">Get In Touch</h1>
        <p class="lead">We'd love to hear from you. Feel free to reach out!</p>
    </div>

    <!-- Contact Section -->
    <div class="container contact-section">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form">
                    <h2>Send us a Message</h2>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-details">
                    <h2>Contact Information</h2>
                    <p><strong>Address:</strong> 123 Street, Cityville, Country</p>
                    <p><strong>Email:</strong> info@lewadrinkandeatery.com</p>
                    <p><strong>Phone:</strong> +1 (123) 456-7890</p>
                </div>
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