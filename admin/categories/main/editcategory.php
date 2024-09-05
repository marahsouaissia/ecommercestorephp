<?php
// Include config file
require_once "../../../assets/php/config.php";

// Function to fetch a single category from the database
function fetchCategory($pdo, $id) {
    $sql = "SELECT * FROM categories WHERE id = :id";
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

// Check if the category ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $category = fetchCategory($pdo, $id);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];

        // Check if a new image is uploaded
        if (!empty($_FILES['image']['name'])) {
            $target_dir = "../../../uploads/categories/";
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "Sorry, there was an error uploading your file.";
                exit;
            }
        } else {
            $image = $category['image']; // Keep the old image if no new image is uploaded
        }

        // Update category in the database
        $sql = "UPDATE categories SET name = :name, image = :image WHERE id = :id";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':id', $id);

            if ($stmt->execute()) {
                // Redirect back to the categories list with a success message
                header("Location: categories.php?message=Category updated successfully");
            } else {
                echo "Error: " . $stmt->errorInfo()[2];
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
} else {
    // Redirect back to the categories list if no ID is provided
    header("Location: categories.php?error=No category ID provided");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 80%;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: 500;
        }

        input[type="text"],
        input[type="file"] {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        button[type="button"] {
            background-color: #d33;
        }

        button[type="button"]:hover {
            background-color: #a00;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Edit Category</h1>
    <form action="editcategory.php?id=<?= $category['id'] ?>" method="post" enctype="multipart/form-data" autocomplete="off">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $category['name'] ?>" required autocomplete="off">

        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
        <img src="../../../uploads/categories/<?= $category['image'] ?>" alt="<?= $category['name'] ?>" class="category-image" style="max-width: 100px;">

        <button type="submit">Update</button>
        <button type="button" onclick="window.location.href='categories.php'">Cancel</button>
    </form>
</div>
</body>
</html>
