<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Admin</title>
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
    <a href="product_form.php">+</a>
    <section class="show-product">
        <table>
            <thead>
                <th>product image</th>
                <th>product name</th>
                <th>product price</th>
                <th>action</th>
            </thead>
            <tbody>
                <?php
                    
                ?>
            </tbody>
        </table>
    </section>
</body>

</html>