<?php
// Include config file
require_once "../../../assets/php/config.php";

// Function to fetch all products from the database
function fetchProducts($pdo) {
    $products = [];
    $sql = "SELECT p.id, p.name, p.image, c.name AS category, p.price, p.quantity
            FROM product p
            JOIN categories c ON p.category_id = c.id";
    try {
        $stmt = $pdo->query($sql);
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $products[] = $row;
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $products;
}

// Fetch products for display
$products = fetchProducts($pdo);

// Get message from URL parameters
$message = isset($_GET['message']) ? $_GET['message'] : '';
$error = isset($_GET['error']) ? $_GET['error'] : '';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/products.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Product List</h1>
    <button onclick="window.location.href='addproduct.php'" class="add-button">Add Product</button>
    <button onclick="window.location.href='../../categories/main/categories.php'" class="categories-button">Categories</button>
    <button onclick="window.location.href='../../users/main/manage_users.php'" class="users-button">manage users</button>
    <button onclick="window.location.href='../../order/main/manage_orders.php'" class="order-button">manage order</button>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><img src="../../../uploads/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="product-image"></td>
                <td><?= $product['category'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['quantity'] ?></td>
                <td>
                    <button onclick="window.location.href='editproduct.php?id=<?= $product['id'] ?>'" class="edit-button">Edit</button>
                    <button onclick="deleteProduct(<?= $product['id'] ?>)" class="delete-button">Remove</button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    function deleteProduct(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../php/deleteproduct.php?id=' + id;
            }
        })
    }
</script>
</body>
</html>
