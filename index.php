<?php
   include("funciones.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form 
      
      $myusername = $_POST['email'];
      $mypassword = $_POST['contra']; 

      $conn=conectarBD();
      $result = $conn->query("SELECT id_puesto FROM usuarios WHERE email = '$myusername' and contrasenia = '$mypassword'");
      
      while($row = $result->fetch_assoc())
    {
      if (($row["id_puesto"] === "1"))
        {
            $_SESSION['email'] = $email;
            header("Location: vendedor.php");
        }
        elseif(($row["id_puesto"] === "2"))
        {
            $_SESSION['email'] = $email;
            header("Location: gerenteAgencia.php");
        }
        elseif(($row["id_puesto"] === "3"))
        {
            $_SESSION['email'] = $email;
            header("Location: gerenteGlobal.php");
        }
        else
        {
            header("Location: index.php");
            exit();
        }
    }
  }
?>
<html lang="en">

  <head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript"src="js/main.js"></script>

    <!--stylesheets-->
    <link rel="stylesheet" href="./css/index/index-style.css">
    <link rel="stylesheet" href="./css/content-style.css">

    <title>Inicio</title>
  </head>

  <body>
    <div class="back">
      <div id="divContainer" class="row h-100 justify-content-center align-items-center">
        <div class="col-12 col-sm-6 col-md-4 shadow-box-standar-state" id="contentIndex">
          <div class="padding-s">
            <h3 class="TitleIndex">Inicio de sesión</h3>

            <form action="" method ="post">
              <div class="row  justify-content-center">
                <div class="col-12 col-sm-12 col-md-11">
                  <div class="form-group">
                    <label for="inputEmail">Correo eletrónico</label>
                    <input name="email" class="form-control input-borderB" type="email" placeholder="email@host.com" maxlength="25"
                      required>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-11">
                  <div class="form-group">
                    <label for="inputContraseña">Contraseña</label>
                    <input name="contra" class="form-control input-borderB" type="password" placeholder="contraseña"
                      maxlength="16" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input class="btn btn-success" type="submit" value="Iniciar sesión" id="BtnLog">
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </body>

</html>