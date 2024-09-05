<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: auth/signin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Order Confirmation</h2>
    <p>Thank you for your order! Your order has been successfully placed.</p>
    <a href="index.php" class="btn btn-primary">Continue Shopping</a>
</div>
</body>
</html>
