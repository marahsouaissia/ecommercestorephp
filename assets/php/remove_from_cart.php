<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user_id = $_SESSION['id'];

    $sql = "DELETE FROM cart WHERE id = ? AND user_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id, $user_id]);

    header("Location: ../../cart.php");
    exit;
} else {
    header("Location: ../../cart.php");
    exit;
}
?>
