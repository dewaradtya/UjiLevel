<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_name = $_POST['customer_name'];
    $email = $_POST['email'];
    $items = $_POST['items'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO orders (customer_name, email, items, comments) VALUES ('$customer_name', '$email', '$items', '$comments')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success mt-3" role="alert">Order placed successfully!</div>';
    } else {
        echo '<div class="alert alert-danger mt-3" role="alert">Error: ' . $conn->error . '</div>';
    }
}
?>