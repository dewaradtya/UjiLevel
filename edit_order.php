<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $orderId = $_POST['id'];
    $item = $_POST['item'];
    $jumlah = $_POST['jumlah'];
    $comments = $_POST['comments'];

    $hargaPerItem = 1;

    $harga = $jumlah * $hargaPerItem;

    $comments = $_POST['comments'];

    $sql = "UPDATE orders SET item='$item', jumlah='$jumlah', harga='$harga', comments='$comments' WHERE id=$orderId";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success mt-3" role="alert">Order updated successfully!</div>';
    } else {
        echo '<div class="alert alert-danger mt-3" role="alert">Error updating order: ' . $conn->error . '</div>';
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: manage_orders.php");
        exit();
    } else {
        $error = "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Order - Lewa Drink & Eatery</title>
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

        .order-form {
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
    </style>
</head>

<body>
    <?php include("navbar.php") ?>

    <!-- Jumbotron (Hero Section) -->
    <div class="jumbotron text-center">
        <h1 class="display-4 mt-5">Edit Order</h1>
        <p class="lead">Modify the details of your order.</p>
    </div>

    <!-- Edit Order Section -->
    <div class="container order-section">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="order-form">
                    <h2>Edit Order</h2>
                    <?php
                    include("config.php");

                    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
                        $orderId = $_GET['id'];

                        // Fetch order details from the database
                        $sql = "SELECT * FROM orders WHERE id = $orderId";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $order = $result->fetch_assoc();
                    ?>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <input type="hidden" name="id" value="<?php echo $orderId; ?>">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="item">Select Items</label>
                                        <select class="form-control" id="item" name="item" required>
                                            <option value="drink1">Drink 1</option>
                                            <option value="drink2">Drink 2</option>
                                            <option value="food1">Food 1</option>
                                            <option value="food2">Food 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Quantity</label>
                                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?php echo $order['jumlah']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="comments">Comments (Optional)</label>
                                    <textarea class="form-control" id="comments" name="comments" rows="4"><?php echo $order['comments']; ?></textarea>
                                </div>

                                <button type="submit" class="btn btn-block">Update Order</button>
                                <a class="btn btn-block btn-danger text-white explore-menu-btn" href="manage_orders.php" role="button">Back</a>
                            </form>
                    <?php
                        } else {
                            echo '<p class="alert alert-danger">Order not found.</p>';
                        }
                    } else {
                        echo '<p class="alert alert-danger">Invalid request.</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>