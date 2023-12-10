<?php
include("config.php");

function createOrder($customer_name, $email, $items, $comments) {
    global $conn;

    $sql = "INSERT INTO orders (customer_name, email, items, comments) VALUES ('$customer_name', '$email', '$items', '$comments')";

    return $conn->query($sql);
}

function readOrders() {
    global $conn;

    $sql = "SELECT * FROM orders";
    $result = $conn->query($sql);

    $orders = array();

    while ($row = $result->fetch_assoc()) {
        $orders[] = $row;
    }

    return $orders;
}

function updateOrderStatus($order_id, $status) {
    global $conn;

    $sql = "UPDATE orders SET status='$status' WHERE id=$order_id";

    return $conn->query($sql);
}

function deleteOrder($order_id) {
    global $conn;

    $sql = "DELETE FROM orders WHERE id=$order_id";

    return $conn->query($sql);
}
?>