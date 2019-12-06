<?php 

use DB;
//$conexion=mysqli_connect('localhost','root','','prueba');
$periodo=$_POST['periodo'];

	$sql="SELECT *
		from materia 
		where PER_CODIGO='$periodo'";

	$result=DB::select($sql);

	$cadena="<label>Materias</label> 
			<select id='lista2' name='lista2'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
	

?>