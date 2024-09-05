<?php
session_start();
require_once 'config.php';

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: ../../auth/signin.php");
    exit;
}

$user_id = $_SESSION['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch cart data
    $sql = "SELECT cart.id, cart.product_id, cart.quantity, product.price 
            FROM cart 
            JOIN product ON cart.product_id = product.id 
            WHERE cart.user_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id]);
    $cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Insert each cart item as an order
    foreach ($cart_items as $item) {
        $product_id = $item['product_id'];
        $quantity = $item['quantity'];
        $created_at = date("Y-m-d H:i:s");

        $order_sql = "INSERT INTO orders (user_id, product_id, quantity, created_at) 
                      VALUES (?, ?, ?, ?)";
        $order_stmt = $pdo->prepare($order_sql);
        $order_stmt->execute([$user_id, $product_id, $quantity, $created_at]);
    }

    // Clear the cart
    $clear_cart_sql = "DELETE FROM cart WHERE user_id = ?";
    $clear_cart_stmt = $pdo->prepare($clear_cart_sql);
    $clear_cart_stmt->execute([$user_id]);

    // Redirect to a confirmation page
    header("Location: ../../order_confirmation.php");
    exit;
} else {
    // Redirect to cart if accessed directly
    header("Location: ../../cart.php");
    exit;
}
?>
