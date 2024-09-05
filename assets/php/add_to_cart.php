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
    // Retrieve product ID and quantity from form submission
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity']==null ? 1 : $_POST['quantity'] ;

    // Check if the product is already in the cart
    $sql = "SELECT id, quantity FROM cart WHERE user_id = ? AND product_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id, $product_id]);
    $cart_item = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($cart_item) {
        // Update the quantity if the product is already in the cart
        $new_quantity = $cart_item['quantity'] + $quantity;
        $update_sql = "UPDATE cart SET quantity = ? WHERE id = ?";
        $update_stmt = $pdo->prepare($update_sql);
        $update_stmt->execute([$new_quantity, $cart_item['id']]);
    } else {
        // Insert new item into the cart
        $insert_sql = "INSERT INTO cart (user_id, product_id, quantity) VALUES (?, ?, ?)";
        $insert_stmt = $pdo->prepare($insert_sql);
        $insert_stmt->execute([$user_id, $product_id, $quantity]);
    }
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM cart WHERE user_id = ?");
    $stmt->execute([$user_id]);
    $cartcount = $stmt->fetchColumn();
    // Redirect back to the product page or show a success message
    header("Location: ../../product-details.php?id=" . $product_id);
    exit;
} else {
    // Redirect to home if accessed directly
    header("Location: ../../auth/signin.php");
    exit;
}
?>
