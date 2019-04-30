
<?php
include_once('searchbar2.php');
?>
<?php
include_once("controladores/funciones.php");
if($_POST){
  
  $errores= validar($_POST,"login");
  if(count($errores)==0){
    $usuario = buscarEmail($_POST["email"]);
    if($usuario == null){
      $errores["email"]="Usuario no existe";
    }else{
      if(password_verify($_POST["password"],$usuario["password"])===false){
        $errores["password"]="Error en los datos verifique";
      }else{
        seteoUsuario($usuario,$_POST);
        if(validarUsuario()){
          header("location: miCuenta.php");
          exit;
        }else{
          header("location: registro.php");
          exit;
        }
      }
      
    }  
  }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
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

        <section class="formulario row ">

            <article class="formulario1 articulo1 col-12  col-md-12 col-lg-6">
                <h1 class="__h1form">Login</h1>
                <br>

                <form class="form1 mt-1" action="" method="post">

                    <label for="email">E-mail:</label>
                    <input class="formatoform btn btn-outline-primary" type="email" id="email" name="email" value="<?=isset($errores["email"])? "":persistir("email") ;?>" placeholder="email">
                    <br>
                    <label class="" for="password">Contraseña:</label>
                    <input class="formatoform btn btn-outline-primary" type="password" id="password" name="password" value="" placeholder="Contaseña">
                    <br>
                    <br>
                    <label for="login"></label>
                    <input class=" b formatoform btn btn-primary login" type="submit" id="Login" name="Login" value="          Login          "> <br>
                    <div class="form-check">
                        <input class="form-check-input" name="recordar" type="checkbox" value="recordar" id="recordarme">
                        <label class="form-check-label" for="recordarme">Recordarme</label>
                    </div>



                </form>
                <br>
                <a href="recuperarpassword.php">
                    <h4 class="__h4login">¿Olvidó su contraseña?</h4>
                </a>

            </article>

            <article class="logoformulario articulo2  col-12 col-md-12 col-lg-6">

                <img class="imglateral" width="100%" id="imgform" src="img/tecnolog.png" alt="">

            </article>

        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>