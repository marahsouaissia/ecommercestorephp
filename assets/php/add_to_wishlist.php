<?php
session_start();
require_once 'config.php';

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    http_response_code(403);
    exit("Unauthorized");
}

$user_id = $_SESSION['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve product ID from form submission
    $product_id = $_POST['product_id'];

    // Check if the product is already in the wishlist
    $sql = "SELECT id FROM wishlist WHERE user_id = ? AND product_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id, $product_id]);
    $wishlist_item = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($wishlist_item) {
        // Product is already in the wishlist
        exit("Product is already in the wishlist.");
    }

    // Insert new item into the wishlist
    $insert_sql = "INSERT INTO wishlist (user_id, product_id) VALUES (?, ?)";
    $insert_stmt = $pdo->prepare($insert_sql);
    $insert_stmt->execute([$user_id, $product_id]);

    // Fetch updated wishlist count
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM wishlist WHERE user_id = ?");
    $stmt->execute([$user_id]);
    $wishlist_count = $stmt->fetchColumn();

    // Return updated wishlist count
    echo $wishlist_count;
    exit;
} else {
    http_response_code(400);
    exit("Bad Request");
}
?>
