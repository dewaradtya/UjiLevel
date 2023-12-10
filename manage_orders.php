<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item = $_POST['item'];
    $jumlah = $_POST['jumlah'];
    $comments = $_POST['comments'];

    $hargaPerItem = 1;

    $harga = $jumlah * $hargaPerItem;

    $comments = $_POST['comments'];

    $sql = "INSERT INTO orders (item, jumlah, harga, comments) VALUES ('$item', '$jumlah', '$harga', '$comments')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success mt-3" role="alert">Order placed successfully!</div>';
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
    <title>Manage Orders - Lewa Drink & Eatery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

        .order-section {
            background-color: #f8f9fa;
            padding: 40px 20px;
            margin-top: -20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .order-table {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .btn {
            margin: 5px;
        }

        .btn-danger:hover {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>

<body>
    <?php include("navbar.php") ?>

    <!-- Jumbotron (Hero Section) -->
    <div class="jumbotron text-center">
        <h1 class="display-4 mt-5">Manage Orders</h1>
        <p class="lead">View and manage customer orders.</p>
    </div>

    <!-- Order Section -->
    <div class="container order-section">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="order-table">
                    <h2>Orders</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Comments</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("order_crud.php");

                            $orders = readOrders();

                            foreach ($orders as $order) {
                                echo "<tr>";
                                echo "<td>{$order['id']}</td>";
                                echo "<td>{$order['item']}</td>";
                                echo "<td>{$order['jumlah']}</td>";
                                echo "<td>{$order['harga']}</td>";
                                echo "<td>{$order['comments']}</td>";
                                echo "<td>{$order['status']}</td>";
                                echo "<td>";
                                echo "<a href='edit_order.php?id={$order['id']}' class='btn btn-warning text-white'>Edit</a>";
                                echo "<a href='delete_order.php?id={$order['id']}' class='btn btn-danger'>Delete</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-block btn-primary text-white mt-4 explore-menu-btn" href="order.php" role="button">Add you order</a>
            </div>
        </div>
    </div>

    <!-- footer -->
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