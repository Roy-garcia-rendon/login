
<?php

class mysqlconex{ /*clase*/
    public function conex(){ /*Funcion publica*/
  /*variable mysqli funcion*/   $conexion=mysqli_connect("localhost","root","","saym"); /*parametros*/
    return $conexion; /*return*/
 }
}
/*conección con la base de datos de empleados siyeca*/
?>
