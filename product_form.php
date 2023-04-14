<?php
include("connection.php");
if (isset($_POST["add_product"])) {
    extract($_POST);
    $p_image = $_FILES['p_image']['name'];
    $p_image_temp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = "images/" . $p_image;
    $query = "INSERT INTO products(name,price,image)VALUES('$name','$price','$p_image')";
    $insert_query = mysqli_query($conn, $query);
    if ($insert_query) {
        move_uploaded_file($p_image_temp_name, $p_image_folder);
        $message[] = 'product added successfully';
        header("Location: admin.php");
    } else {
        $message[] = "product didn't added successfully";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.min.css">
    <title>Adding Product</title>
</head>

<body>
    <?php
    include("header.php");
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message">
                        <span>' . $message . '<i class="bi bi-x" onclick="this.parentElement.style.display=`none`"></i></span>
                    </div>';
        }
    }
    ?>
    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Add a new product</h3>
            <input type="text" name="p_name" placeholder="enter product name" require>
            <input type="number" name="p_price" min="0" placeholder="enter product price" require>
            <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" require>
            <input type="submit" value="confirm" name="add_product" value="add product" class="btn">
        </form>
    </div>
</body>

</html>