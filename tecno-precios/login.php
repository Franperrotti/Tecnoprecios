<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/master.css">
    <title>Login</title>
</head>

<body>
    <div class="container-fluid p-0 __divregistro">

        <section class="formulario row ">

            <article class="formulario1 articulo1 col-12  col-md-12 col-lg-6">
                <h1 class="__h1form">Login</h1>
                <!--  <h3 class="__h3form">Ya tiene cuenta?</h3> -->
                <br>

                <form class="form1 mt-1" action="" method="post">

                    <label for="email">Usuario:</label>
                    <input class="formatoform btn btn-outline-primary" type="email" id="email" name="email" value="" placeholder="email">
                    <br>
                    <label class="" for="password">Contraseña:</label>
                    <input class="formatoform btn btn-outline-primary" type="password" id="password" name="password" value="" placeholder="Contaseña">
                    <br>
                    <br>
                    <label for="login"></label>
                    <input class=" b formatoform btn btn-primary " type="submit" id="Login" name="Login" value="          Login          "> <br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Recordarme</label>
                    </div>



                </form>
                <br>
                <a href="registro.php">
                    <h4 class="__h4login">¿Olvidó su contraseña?</h4>
                </a>

            </article>

            <article class="logoformulario articulo2  col-12 col-md-12 col-lg-6">

                <img width="100%" id="imgform" src="img/tecnolog.png" alt="">

            </article>

        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>