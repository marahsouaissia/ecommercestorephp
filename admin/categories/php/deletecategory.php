<?php
// Include config file
require_once "../../../assets/php/config.php";

// Check if the product ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the product from the database
    $sql = "DELETE FROM categories WHERE id = :id";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            // Redirect back to the products list with a success message
            header("Location: ../main/categories.php?message=Product deleted successfully");
        } else {
            // Redirect back to the products list with an error message
            header("Location: ../main/categories.php?error=Error deleting product");
        }
    } catch (PDOException $e) {
        // Redirect back to the products list with an error message
        header("Location: ../main/categories.php?error=" . $e->getMessage());
    }
} else {
    // Redirect back to the products list if no ID is provided
    header("Location: ../main/categories.php?error=No product ID provided");
}
?>
