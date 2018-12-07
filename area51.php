<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //funcion sin parametros y sin retorno
    function mensaje(){
      echo "hola a todos los mundos del zodiaco chino";
    }

    mensaje();
    ?>
<br/>
    <?php
    function fecha(){
      //invocamos a la fucnion date de php
      return date("d/m/y");
    }

    echo fecha();

     ?>
     <br/>
     <?php
function multiplica(){
  $resultado = 4 * 3;
  return($resultado);
}
echo "la multiplicaicon es: ".multiplica();
      ?>
      <br>
      <?php
//funciones con parametros sin retorno
function saludar($nombre){
  echo "Hola, ".$nombre;
}

//llamamos a esta funcion
echo saludar("jorge");       ?>
<br>
<?php
function sumar ($num1, $num2){
  return ($num1 + $num2);
}
echo sumar(30, 6);
 ?>
 <br>
 <?php
 // lo parametros opcionales siempre se declaran a la derecha
function parametrosopcionales($n1, $n2, $n3 = 20){
  return($n1 - $n2 - $n3);
}
echo parametrosopcionales(100,20);
//puedo o no colocarlo al llamarlo el parametro opcional sin embargo este sobreescribe el que
// tenia
  ?>
  <br>
  <?php
//para que php recibe varios parametros
function sumaDos(...$vario){
  $resul2 = 0;

  foreach ($vario as $desvario) {
// el simbolo += es un acumulador
    $resul2 += $desvario;
  }
  return $resul2;
}
//yo puedo instanciar a la funcion varias veces de la siguiente manera como ejemplo:
echo sumaDos(200);
echo "<br />";
echo sumaDos(20, 22);
echo "<br />";
echo sumaDos(20, 22, 2, 3, 5);
   ?>
  </body>
</html>
