<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/master.css">
    <title>Registro</title>
</head>

<body>
    <div class="container-fluid p-0 __divregistro">

        <section class="formulario row">

            <article class="formulario1 articulo1 col-12 col-md-12 col-lg-6">
                <h1 class="__h1form">Registrarse</h1>
                <a href="login.php">
                    <h4 class="__h4registro">Ya tiene cuenta?</h4>
                </a>
                <br>

                <form class="form1 mt-1" action="" method="post">
                    <label class="" for="nombre">Nombre:</label>
                    <input class="formatoform btn btn-outline-primary" id="nombre" type="text" name="nombre" value="" placeholder="Ingrese aquí su nombre">
                    <br>
                    <label class="" for="apellido">Apellido:</label>
                    <input class="formatoform btn btn-outline-primary" type="text" id="apellido" name="apellido" value="" placeholder="Ingrese aquí su apellido">
                    <br>
                    <label class="" for="email">Email:</label>
                    <input class="formatoform btn btn-outline-primary" type="email" id="email" name="email" value="" placeholder="Ingrese su email">
                    <br>
                    <label class="" for="password">Contraseña:</label>
                    <input class="formatoform btn btn-outline-primary" type="password" id="password" name="password" value="" placeholder="Cree su contaseña">
                    <br>
                    <label class="" for="repassword">Confirme su contraseña:</label>
                    <input class="formatoform btn btn-outline-primary " type="password" id="repassword" name="repassword" value="" placeholder="Repita su contraseña">
                    <br>

                    <label class="" for=""> </label>
                    <button class="formatoform btn btn-primary btn-lg  type=" submit" name="button">Registrarse</button>

                    <label class="" for=""> </label>
                    <button class=" row formatoform borrar btn btn-outline-primary btn-lg" type="reset" name="button">Borrar</button>

                </form>

            </article>

            <article class="logoformulario articulo1 col-12 col-md-12 col-lg-6">

                <img width="100%" id="imgform" src="img/tecnolog.png" alt="">

            </article>

        </section>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>