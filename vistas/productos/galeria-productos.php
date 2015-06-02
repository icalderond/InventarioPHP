<?php   
    session_start();
    include '../../controlador/articulos.php';
    $arr=ConsultarCds_array();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/github-icon.png">

    <title>Productos | Inventario</title>
    <link href="../../docs/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../docs/css/signin.css" rel="stylesheet">
    <script src="../../docs/js/ie-emulation-modes-warning.js"></script>
<body>
    <div class="container">
      <table class="table table-hover">
      <thead>
            <tr>
              <th>Id</th>
              <th>Titel</th>
              <th>Interpret</th>
              <th>Jahr</th>
              <th>Borrar</th>
              <th>Editar</th>
              <th>Agregar</th>
            </tr>
      </thead>
      <tbody>
         <?php 
             foreach ($arr as $item) {
         ?>
        <tr>
          <th scope="row"><?php echo $item["id"] ?></th>
          <td><?php echo $item["titel"] ?></td>
          <td><?php echo $item["interpret"] ?></td>
          <td><?php echo $item["jahr"] ?></td>
          <td><button type="button" class="btn btn-default" aria-label="Left Align">
              <a href="<?php echo $_SERVER['PHP_SELF']."?borrar=".$item["id"];?>"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
              </button>
          </td>
          <td><button type="button" class="btn btn-default" aria-label="Left Align">
              <a href="<?php echo $_SERVER['PHP_SELF']."?editar=".$item["id"];?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
              </button>
          </td>
         <td><button type="button" class="btn btn-default" aria-label="Left Align">
             <a href="<?php echo $_SERVER['PHP_SELF']."?agregar=".$item["id"];?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
              </button>
          </td>
          </tr>
          <?php } ?>
      </tbody>
    </table>
    </div>
</body>