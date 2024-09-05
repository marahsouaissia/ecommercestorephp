<?php
// Include config file
require_once "../../../assets/php/config.php";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];

    // Ensure the uploads directory exists
    $target_dir = "../../../uploads/categories/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // File upload logic
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }

    // Insert category into the database
    $sql = "INSERT INTO categories (name, image) VALUES (:name, :image)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':image', $image);

        if ($stmt->execute()) {
            // Redirect back to the categories list with a success message
            header("Location: categories.php?message=Category added successfully");
        } else {
            echo "Error: " . $stmt->errorInfo()[2];
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
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
<div class="container form-container">
    <h1>Add Category</h1>
    <form action="addcategory.php" method="post" enctype="multipart/form-data" autocomplete="off">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter category name" required autocomplete="off">

        <label for="image">Image:</label>
        <input type="file" id="image" name="image" placeholder="Upload category image" required>

        <button type="submit">Submit</button>
        <button type="button" onclick="window.location.href='categories.php'">Cancel</button>
    </form>
</div>

<script>
    function handleSubmit(event) {
        event.preventDefault();
        // Add your custom form submission logic here
    }
</script>
</body>
</html>
