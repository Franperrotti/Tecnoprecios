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

<article class=flexi>


<section class=infoconqueryserch>
<ul>

<li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tv</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Lavarropas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Heladera</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Aire Acondicionado</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contáctanos</a>
              </span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
            </li>

</ul>


</section>

<section class=productos70>
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
</section>
</article>  

    </div>
