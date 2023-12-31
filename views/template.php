<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>BLACK NINJA | JUEGO DE PLATAFORMA</title>

  <link rel="icon"
    href="views/img/intro/favicon.png">

  <link href="views/css/styles.css"
    type="text/css"
    rel="stylesheet"
    media="">

  <link href="views/css/login.css"
    type="text/css"
    rel="stylesheet"
    media="">

  <link href="views/css/start.css"
    type="text/css"
    rel="stylesheet"
    media="">

  <link href="views/css/footer.css"
    type="text/css"
    rel="stylesheet"
    media="">

  <link href="https://fonts.googleapis.com/css?family=Patrick+Hand"
    rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
    crossorigin="anonymous">
</head>

<body>
  <!--=====================================
	VERTICAL SCREEN
	======================================-->

  <div class="vertical"></div>

  <!--=====================================
	FRAME
	======================================-->
  <div class="frame"></div>

  <!--=====================================
	CONTAINER
	======================================-->
  <div class="container">
    <?php
    if (isset($_GET['validate'])) {
      switch ($_GET['validate']) {
        case 'start':
          include "modules/start.php";
          break;

        case 'exit':
          include "modules/exit.php";
          break;

        default:
          include "modules/login.php";
          break;
      }
    } else {
      include "modules/login.php";
    }

    ?>
  </div>

  <!--=====================================
	CREDITOS
	======================================-->

  <footer>
    <p class="text-center">Juego desarrollado por Inovix <span>©copyright</span> </p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <script src="views/js/login.js"></script>
  <script src="views/js/variables_properties.js"></script>

</body>

</html>