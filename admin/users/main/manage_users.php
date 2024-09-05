<?php
// Include config file
require_once "../../../assets/php/config.php";

// Fetch all users
function fetchUsers($pdo) {
    $users = [];
    $sql = "SELECT * FROM users";
    try {
        $stmt = $pdo->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $users;
}

// Fetch all orders


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
            header("Location: manage_users.php?message=User role updated successfully");
        } else {
            echo "Error: Unable to update user role.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Fetch users and orders
$users = fetchUsers($pdo);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Add your CSS styles here -->
</head>
<body>
<div class="container">
    <h1>Manage Users</h1>
    <div>
        <h2>Users</h2>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td>
                        <form action="manage_users.php" method="post">
                            <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                            <select name="role">
                                <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                <option value="user" <?= $user['role'] == 'user' ? 'selected' : '' ?>>User</option>
                            </select>
                            <button type="submit">Update Role</button>
                        </form>
                    </td>
                    <td><!-- Add any other actions here --></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>
