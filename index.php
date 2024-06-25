<?php
include __DIR__ . "/data/dataStore.php";
$index = array_key_exists('add', $_GET) ? intval($_GET['add'])  : '';
$ship = 6.47;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3.4.27/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>#####</title>
</head>

<body class="myBg">
    <header class="container">
        <h1>OOP-2</h1>
    </header>
    <main class="container">
        <section class="d-flex flex-wrap">
            <h5 class="col-12 text-center my-4">E-commerce Animal Products PHP</h5>

            <?php foreach ($catalogo as $i => $prodotto) { ?>
                <form class="col-3 myCard d-flex flex-wrap p-2" method="GET">
                    <div class="d-flex flex-wrap p-2">
                        <h2 class="col-12 text-center capi">
                            <?= $prodotto->nome  ?>
                        </h2>
                        <p class="col-6 off-set-6 text-start">
                            <?= "For :" . " " . $prodotto->category->getCategory()  ?>
                        </p>
                        <h6 class="col-4 off-set-8 text-end">
                            <?= $prodotto->price . "$" ?>
                        </h6>

                        <h6 class="col-12 text-end d-flex justify-content-between">
                            <?= $prodotto->print()  ?>
                        </h6>
                        <h4 class="col-12 text-center">
                            <?= "Tipology : ", get_class($prodotto) ?>
                        </h4>
                        <div class="col-12 text-center">
                            <button type="submit" style="background-color: black; color: greenyellow" name="add" value="<?= $i ?>">
                                Add To Cart
                            </button>

                        </div>
                    </div>
                </form>
            <?php } ?>
            <h2 class="text-center col-12 my-4">Cart</h2>
            <?php $buy->add($catalogo[$index]) ?>
            <?php foreach ($users as $i => $item) { ?>
            <table class="my-5 bg-transparent w-100 myCard">
                <thead>
                    <tr>
                        <th scope="col">User</th>
                        <th scope="col">Article</th>
                        <th scope="col">Price</th>
                        <th scope="col">Ship</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?= $item->print() ?></th>
                        <td style="width: 20%;"><pre><?= $item->carrello->carrello?->nome ?></pre></td>
                        <td style="width: 20%;"><?= $item->carrello->carrello?->price . "$" ?></td>
                        <td style="width: 20%;"><?= $ship . "$" ?></td>
                        <td style="width: 20%;"><?= $item->carrello->carrello?->price + $ship ."$" ?></td>
                    </tr>
                </tbody>
            </table>
            <?php } ?>
        </section>
    </main>
    <!-- <script src="./js/main.js"></script> -->
</body>

</html>