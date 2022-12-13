<?php
require_once __DIR__ . "/Database/database.php";
require_once __DIR__ . "/Models/Customer.php";
require_once __DIR__ . "/Models/ShoppingBasket.php";
require_once __DIR__ . "/Models/CreditCard.php";


$guest = new Customer("axe", "axe@gmail.com");
$guest->basket = new ShoppingBasket();
// $guest->basket->add($crocchette);
// $guest->basket->add($topo);

$total = $guest->basket->getTotal();
// var_dump($total);

// buy porcessing
$guest->addCreditCard(new CreditCard("2123242342", "883", 12, 2023));

// $result = $guest->pay($total);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- link fontawasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header>
        <h1 class="text-center p-5">Whisky Shop</h1>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-4 g-4">

                <?php
                foreach ($productsArray as $nameCategory => $productCategory) {
                    foreach ($productCategory as $key => $product) {
                ?>

                        <div class="col">
                            <!-- CARD -->
                            <div class="card p-4">
                                <!-- name -->
                                <div class="name"><?php echo $product["name"] ?></div>
                                <!-- name -->

                                <!-- category -->
                                <div class="category">
                                    <?php if ($product["category"] === "Gatto") { ?>
                                        <i class="fa-solid fa-cat"></i>
                                    <?php } elseif ($product["category"] === "Cane") { ?>
                                        <i class="fa-solid fa-dog"></i>
                                    <?php } ?>
                                </div>
                                <!-- category -->

                                <!-- price -->
                                <div class="price">€ <?php echo $product["price"] ?></div>
                                <!-- price -->
                            </div>
                            <!-- CARD -->

                        </div>

                <?php
                        if ($nameCategory === "Food") {
                            $prod_food = new Food($product["name"], $product["price"], new Category($product["category"]), $product["weigth"]);
                            $products[] = $prod_food;
                        } elseif ($nameCategory === "Bed") {
                            $prod_bed = new Bed($product["name"], $product["price"], new Category($product["category"]), $product["size"]);
                            $products[] = $prod_food;
                        } elseif ($nameCategory === "Toy") {
                            $prod_toy = new Toy($product["name"], $product["price"], new Category($product["category"]), $product["material"]);
                            $products[] = $prod_food;
                        }
                    }
                }
                ?>


            </div>
        </div>

    </main>
</body>

</html>