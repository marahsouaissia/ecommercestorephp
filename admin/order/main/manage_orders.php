<?php
// Include config file
require_once "../../../assets/php/config.php";

// Fetch all users

// Fetch all orders
function fetchOrders($pdo) {
    $orders = [];
    $sql = "SELECT * FROM orders";
    try {
        $stmt = $pdo->query($sql);
        $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $orders;
}

// Update user role
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_id'], $_POST['role'])) {
    $user_id = $_POST['user_id'];
    $role = $_POST['role'];

    $sql = "UPDATE users SET role = :role WHERE id = :user_id";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':user_id', $user_id);

        if ($stmt->execute()) {
            // Role updated successfully
            header("Location: manage_orders.php?message=User role updated successfully");
        } else {
            echo "Error: Unable to update user role.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Fetch users and orders

$orders = fetchOrders($pdo);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Orders</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Add your CSS styles here -->
</head>
<body>
<div class="container">
    <h1>Manage Orders</h1>

    <div>
        <h2>Orders</h2>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $order['id'] ?></td>
                    <td><?= $order['user_id'] ?></td>
                    <td><?= $order['product_id'] ?></td>
                    <td><?= $order['quantity'] ?></td>
                    <td><?= $order['created_at'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
