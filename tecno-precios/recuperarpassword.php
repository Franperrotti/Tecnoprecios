<?php
include_once('searchbar2.php');
?>

<?php
include_once("controladores/funciones.php");
if($_POST){
  $errores= validar($_POST,"olvide");
  if(count($errores)==0){
    $usuario = buscarEmail($_POST["email"]);
    if($usuario == null){
      $errores["email"]="Usuario no existe en nuestra base de datos";
    }else{
        $registro = armarRegistroOlvide($_POST);
          header("location: nuevacontrasenia.php");
          exit;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/recuperarpassword.css">
  <title>Recuperar Contraseña</title>
</head>

<body>
    <div class="container-fluid p-0 __divregistro">
    <?php
      if(isset($errores)):?>
        <ul class="alert alert-danger">
          <?php
          foreach ($errores as $key => $value) :?>
            <li> <?=$value;?> </li>
            <?php endforeach;?>
        </ul>
      <?php endif;?>

      <section class="formulario row">

<article class="formulario1 articulo1 col-12 col-md-12 col-lg-6">
    <h1 class="__h1form">Recuperar Contraseña</h1>
    <br>

    <form class="form1 mt-1" action="" method="post" enctype= "multipart/form-data">
        
        <label>Email:</label>
         <input  class="formatoform btn btn-outline-primary"  name="email" type="text" id="email" value="<?=isset($errores["email"])? "":persistir("email") ;?>" placeholder="Ingrese su email"/>
        <br>
        <label>Nueva contraseña:</label>
          
        <input  class="formatoform btn btn-outline-primary"  name="password" type="password" id="password" value="" placeholder="Cree su contraseña" />
        <br>
        <label>Confirmar nueva contraseña:</label>
            
        <input  class="formatoform btn btn-outline-primary"  name="repassword" type="password" id="repassword" value="" placeholder="Repita su contraseña" />
         <br>
        <button class="formatoform btn btn-primary btn-lg"  type="submit" name="button">Enviar</button>


    </form>

</article>

<article class="logoformulario articulo1 col-12 col-md-12 col-lg-6">

    <img class="imglateral"  width="100%" id="imgform" src="img/tecnolog.png" alt="">

</article>

</section>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

