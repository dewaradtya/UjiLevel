<?php
include("order_crud.php");

if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    deleteOrder($order_id);
    header("Location: manage_orders.php");
    exit();
} else {
    echo "Invalid request!";
}
?>