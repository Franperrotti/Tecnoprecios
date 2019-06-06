
<?php
require_once("autoload_fran.php");

$sql= "SELECT *  FROM images order by rand() limit 3";
$consulta = $pdo->query($sql);
$producto = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
include_once('head.php');
?>


  <title>HOME</title>
</head>

<body>
<div id="content">

<div class="container-fluid p-0">
 <!-- Productos -->

<section class= "productos" id="wrap">
<div id="columns" class="columns_4">

<?php foreach ($producto as $key => $value)  :?>
<figure>
          <img src="<?="img/".$value["image"]?>">

          <figcaption><?=$value["titulo"]?></figcaption>
          <span class="price"><?=$value["price"]?></span>
          <a class="button" href="#">Comprar ahora</a>
        </figure>

        <?php endforeach ?>

</div>
</section>


</div>