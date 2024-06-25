<?php
include __DIR__ . "/data/dataStore.php";



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
            <?php foreach ($catalogo as $prodotto) { ?>
                <div class="col-3 myCard d-flex flex-wrap p-2">
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
                    <h4 class="col-12 text-center" >
                        <?= "Tipology : " , get_class($prodotto) ?>
                    </h4>
                </div> 
            <?php } ?>
         
        </section>
    </main>
    <!-- <script src="./js/main.js"></script> -->
</body>

</html>