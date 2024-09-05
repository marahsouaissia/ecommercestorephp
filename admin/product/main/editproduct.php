<?php
// Include config file
require_once "../../../assets/php/config.php";

// Function to fetch a single product from the database
function fetchProduct($pdo, $id) {
    $sql = "SELECT * FROM product WHERE id = :id";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return null;
}

// Function to fetch categories from the database
function fetchCategories($pdo) {
    $categories = [];
    $sql = "SELECT id, name FROM categories";
    try {
        $stmt = $pdo->query($sql);
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $categories[] = $row;
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $categories;
}

// Check if the product ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = fetchProduct($pdo, $id);
    $categories = fetchCategories($pdo);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $category_id = $_POST['categories'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        // Check if a new image is uploaded
        if (!empty($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            $target_dir = "../../../uploads/";
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "Sorry, there was an error uploading your file.";
                exit;
            }
        } else {
            $image = $product['image']; // Keep the old image if no new image is uploaded
        }

        // Update product in the database
        $sql = "UPDATE product SET name = :name, image = :image, category_id = :category_id, price = :price, quantity = :quantity WHERE id = :id";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':category_id', $category_id);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':id', $id);

            if ($stmt->execute()) {
                // Redirect back to the products list with a success message
                header("Location: products.php?message=Product updated successfully");
            } else {
                echo "Error: " . $stmt->errorInfo()[2];
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
} else {
    // Redirect back to the products list if no ID is provided
    header("Location: products.php?error=No product ID provided");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/addproduct.scss">
    <link rel="stylesheet" href="../js/addproduct.js">
</head>
<body>
<div class="container form-container">
    <h1>Edit Product</h1>
    <form action="editproduct.php?id=<?= $product['id'] ?>" method="post" enctype="multipart/form-data" autocomplete="off">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $product['name'] ?>" required autocomplete="off">

        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
        <img src="../../../uploads/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="product-image" style="width: 50px">

        <label for="categories">Categories:</label>
        <select id="categories" name="categories" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id'] ?>" <?= $category['id'] == $product['category_id'] ? 'selected' : '' ?>>
                    <?= $category['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="<?= $product['price'] ?>" required autocomplete="off">

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="<?= $product['quantity'] ?>" required autocomplete="off">

        <button type="submit">Update</button>
        <button type="button" onclick="window.location.href='products.php'">Cancel</button>
    </form>
</div>

<script>
    function handleSubmit(event) {
        event.preventDefault();
        // Add your custom form submission logic here
    }

    function fillAllFields() {
        // Add your logic to auto-fill form fields (if needed)
    }
</script>
</body>
</html>
