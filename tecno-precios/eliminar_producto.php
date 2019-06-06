<!DOCTYPE html>

<?php



require_once("autoload_fran.php");

if (isset($_GET["id"])) {
    $id_producto=$_GET["id"];
$sql= "SELECT *  FROM images where id = '$id_producto'";
$consulta = $pdo->query($sql);
$result = $consulta->fetchAll(PDO::FETCH_ASSOC);
}

if (isset($_POST["borrar"])) {
  $sql="DELETE FROM images where id=:id";
  $query=$pdo->prepare($sql);
  $query->bindValue(':id',$_POST['id']);
  $query->execute();
  header('Location:modificar_productos.php');
  exit;
//var_dump($_POST);
}
elseif (isset ($_POST["no"])) {
  header("Location:modificar_productos.php");
  exit;
}

 ?>
<html lang="en" dir="ltr">
  <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="css/styles_subirproductos.css" />
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div class="container">


    <form class="" action="" method="post">
      <p>Esta seguro que quiere eliminar este producto?</p>
      <input type="submit" name="borrar" value="si">
      <input type="submit" name="no" value="no">
      <input type="hidden" name="id" value="<?=$id_producto;?>">
   </form>

   <div id="content">

<div class="container-fluid p-0">
 <!-- Productos -->

<section class= "productos" id="wrap">
<div id="columns" class="columns_4">

   <?php foreach ($result as $key => $value)  :?>
<figure>
          <img src="<?="img/".$value["image"]?>">

          <figcaption><?=$value["titulo"]?></figcaption>
          <span class="price"><?=$value["price"]?></span>
          <a class="button" href="#">Comprar ahora</a>
        </figure>

        <?php endforeach ?>
        </div>
</section>

    </ul>
</div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
