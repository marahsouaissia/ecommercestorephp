<?php
// Include config file
require_once "../../../assets/php/config.php";

// Check if the product ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // Delete related cart items
        $sql_delete_cart = "DELETE FROM cart WHERE product_id = :id";
        $stmt_delete_cart = $pdo->prepare($sql_delete_cart);
        $stmt_delete_cart->bindParam(':id', $id);
        $stmt_delete_cart->execute();
  $sql_delete_wishlist = "DELETE FROM wishlist WHERE product_id = :id";
        $stmt_delete_wishlist = $pdo->prepare($sql_delete_wishlist);
        $stmt_delete_wishlist->bindParam(':id', $id);
        $stmt_delete_wishlist->execute();

        // Delete the product
        $sql_delete_product = "DELETE FROM product WHERE id = :id";
        $stmt_delete_product = $pdo->prepare($sql_delete_product);
        $stmt_delete_product->bindParam(':id', $id);
        $stmt_delete_product->execute();

        // Redirect back to the products list with a success message
        header("Location: ../main/products.php?message=Product and related cart items deleted successfully");
        exit(); // Terminate script execution
    } catch (PDOException $e) {
        // Redirect back to the products list with an error message
        header("Location: ../main/products.php?error=" . $e->getMessage());
        exit(); // Terminate script execution
    }
} else {
    // Redirect back to the products list if no ID is provided
    header("Location: ../main/products.php?error=No product ID provided");
    exit(); // Terminate script execution
}
?>
