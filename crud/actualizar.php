<?php

if(!empty($_POST)){
	if(isset($_POST["prd_name"]) && isset($_POST["prd_price"]) && isset($_POST["prd_category"])){
		if($_POST["prd_name"]!="" && $_POST["prd_price"]!="" && $_POST["prd_category"]!=""){
			include "conexion.php";			
			$sql = "update products set prd_name=\"$_POST[prd_name]\",
					prd_price=\"$_POST[prd_price]\",prd_category=\"$_POST[prd_category]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}
?>