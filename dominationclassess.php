<?php
class calkilion
{
  //declaramos variables dentro de las clases con la palabra reservada var y a continuacion $bla
  var $op1; //aqui guardamos la suma
  var $op2; //aqui guardamos la multi

  //cuando nos da error de undefined variable probablemente no se esta usando esa variable
  // o cuando al guardar el resultado colocamos $ donde no debemos
  var $op3; //aqui guardamos el resultado
  function ammokey($par1,$par2)
  {
    // para llamar las variables dentro de las funciones q estan dentro de las clases
    // se usa la palabra reservada $this seguido del apuntador -> y el nombre de la
    // variable SIN el signo de dolar del princpio OJO si le colocamos $ da error
    // luego asiganmos lo que va a tener guardado $par1 + $par2
    $this->op1 = $par1 + $par2;

  }
  function qnosealargue($par1,$par2){
    $this->op2 = $par1 * $par2;
  }
  function resultado(){
    $this->op3 = $this->op1 + $this->op2; // guardamos el resultado de la funcion de sumar
                                            // ammokey y qnosealargue en op3
    //y los mostramos con echo
    echo $this->op3;
  }
}
// las funciones dentro de las clases de php se las llma metodos OJO por OJO y todos ciegos
// instanciar segun cursania es guardar la clase en una variable para acceder a sus metodos
//entonces la instancioamos creando una nueva variable con el nombre de la clase:

$clase = new calkilion;
// para acceder al metodo sumar lo hacemos de la siguiente manera:
// con el signo de apuntador -> llamamos el nombre del metodo
$clase->ammokey(2,2);
$clase->qnosealargue(3,3);
$clase->resultado();
 ?>
