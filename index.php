<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>practica de crud</title>
    <link rel="stylesheet" href="es.css">
  </head>
  <body>

    <?php
        include("conexion.php");


        // $conexion=$base->query("SELECT * FROM_USUARIOS");
        // $registros=$conexion->fetchAll(PDO::FETCH_OBJ);

        //esta linea es el resumen de las dos lineas anteriores pero en una sola
        $registros=$base->query("SELECT * FROM DATOS_USUARIOS")->fetchAll(PDO::FETCH_OBJ);

        //hemos alamacenado una array en la variable registros

//solamente entrar si se pulsa este boton
        if(isset($_POST["cr"])){
          $nombre=$_POST["Nom"];
          $apellido=$_POST["Ape"];
          $direccion=$_POST["Dir"];

          $sql="INSERT INTO DATOS_USUARIOS (NOMBRE, APELLIDO, DIRECCION) VALUES(:nom, :ape, :dir)";

          $resultado=$base->prepare($sql);

          $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion));

          header("Location:index.php");
        }

     ?>
<h1>Seguimiento de Clientes</h1>
<form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr>
<?php
    foreach ($registros as $persona): ?>
    <tr>
      <td><?php echo $persona->Id ?></td>
      <td><?php echo $persona->Nombre ?></td>
      <td><?php echo $persona->Apellido ?></td>
      <td><?php echo $persona->Direccion ?></td>

      <!-- el ? es para pasarle el parametro mediante la url -->
      <td class="bot"><a href="borrar.php?Id=<?php echo $persona->Id?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="editar.php?Id=<?php echo $persona->Id?> & nom=<?php echo $persona->Nombre?> & ape=<?php echo $persona->Apellido?> & dir=<?php echo $persona->Direccion?>"> <input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>
 <?php
endforeach;
  ?>
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>
  </table>
</form>
  </body>
</html>