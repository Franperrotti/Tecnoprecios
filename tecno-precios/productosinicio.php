
<?php
include_once("productos/productos.php");
?>

<?php
include_once('head.php');
?>


  <title>HOME</title>
</head>

<body>
  <div class="container-fluid p-0">
 <!-- Productos -->

<section class= "productos" id="wrap">
<div id="columns" class="columns_4">

<?php foreach ($producto as $key => $value)  :?>
<figure>
          <img src="<?="img/".$value["imagen"]?>">

          <figcaption><?=$value["titulo"]?></figcaption>
          <span class="price"><?=$value["price"]?></span>
          <a class="button" href="#">Comprar ahora</a>
        </figure>

        <?php endforeach ?>

</div>
</section>


    </div>
