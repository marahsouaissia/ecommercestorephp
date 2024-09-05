<?php
// Include config file
require_once "../../../assets/php/config.php";

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

// Fetch categories for the form
$categories = fetchCategories($pdo);

// Initialize variables for messages
$successMessage = '';
$errorMessage = '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $category_id = $_POST['categories'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Ensure the uploads directory exists
    $target_dir = "../../../uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // File upload logic
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $errorMessage = "Sorry, there was an error uploading your file.";
    } else {
        // Insert product into the database
        $sql = "INSERT INTO product (name, image, category_id, price, quantity) VALUES (:name, :image, :category_id, :price, :quantity)";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':category_id', $category_id);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':quantity', $quantity);

            if ($stmt->execute()) {
                $successMessage = "New product added successfully";
            } else {
                $errorMessage = "Error: " . $stmt->errorInfo()[2];
            }
        } catch (PDOException $e) {
            $errorMessage = "Error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zyrkof's Ultimate personal form</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/addproduct.scss">
    <link rel="stylesheet" href="../js/addproduct.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</head>
<body>
<div class="container form-container">
    <h1>Add product</h1>
    <form action="addproduct.php" method="post" enctype="multipart/form-data" onsubmit="handleSubmit(event)" autocomplete="off">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter product name" required autocomplete="off">

        <label for="image">Image:</label>
        <input type="file" id="image" name="image" placeholder="Upload product image" required>

        <label for="categories">Categories:</label>
        <select id="categories" name="categories" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php endforeach; ?>
        </select>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" placeholder="Enter product price" required autocomplete="off">

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" placeholder="Enter product quantity" required autocomplete="off">

        <button type="submit">Submit</button>
        <button type="button" onclick="fillAllFields()">Fill All</button>
        <p class="error-message"></p>
    </form>
</div>



<?php if ($successMessage): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '<?= $successMessage ?>'
        });
    </script>
<?php endif; ?>

<?php if ($errorMessage): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '<?= $errorMessage ?>'
        });
    </script>
<?php endif; ?>

</body>
</html>
