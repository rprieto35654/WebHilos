
<?php

if(!empty($_POST)){
	if( isset($_POST["prd_name"]) && isset($_POST["prd_price"]) && isset($_POST["prd_category"]) )
	{
		if($_POST["prd_name"]!="" && $_POST["prd_price"]!="" && $_POST["prd_category"]!="")
		{
			include "conexion.php";						 
			
			$sql = "insert into products(prd_name,prd_category,prd_price) 
			value (\"$_POST[prd_name]\",\"$_POST[prd_category]\",\"$_POST[prd_price]\")";
			
			$query = $con->query($sql);
			if($query!=null){
				//print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				//print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}
?>
