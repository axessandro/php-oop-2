<?php
require_once __DIR__ . "/DataBase/db.php";
require_once __DIR__ . "/Models/Pruduct.php";

$products_to_print = [];

foreach ($products as $productItem) {
    $name = $productItem["name"];
    $category = $productItem["category"];
    $under_category = $productItem["under_category"];
    $size = $productItem["size"];
    $price = $productItem["price"];

    $new_product = new Product($name, $category, $under_category, $size, $price);
    $products_to_print[] = $new_product;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhiskyShop</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- link style -->
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header>
        <h1 class="text-center p-5">Whisky Shop</h1>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-4 g-4">
                <?php
                foreach ($products_to_print as $product) {
                ?>

                    <div class="col">
                        <div class="card p-2">
                            <div class="name"> <?php echo $product->name ?> </div>
                            <div class="category"><?php echo $product->category ?></div>
                            <div class="under_category"><?php echo $product->under_category ?></div>
                            <div class="size"><?php echo $product->size ?> </div>
                            <div class="price"> <?php echo $product->getPrice() ?>€</div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>

    </main>
</body>

</html>