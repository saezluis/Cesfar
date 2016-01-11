<?php
    $key=$_GET['key'];
    $array = array();
	
	$con=mysqli_connect("localhost","root","123","cesfar") or die("Problemas con la conexión");
		//echo $buscar;
	$consulta_mysql=mysqli_query($con,"select * from medicamentos where descriptor LIKE '%{$key}%'") or
		//142-424-555
		//$consulta_mysql=mysqli_query($conexion,"SELECT * FROM ordenes WHERE numero_orden = '142-424-555'") or
		die("Problemas en el select:".mysqli_error($con));
	
    //$con=mysql_connect("localhost","root","123");
    //$db=mysql_select_db("test",$con);
    //$query=mysql_query("select * from members where username LIKE '%{$key}%'");
    while($row=mysqli_fetch_array($consulta_mysql))
    {
      $array[] = $row['descriptor'];
    }
    echo json_encode($array);
?>
