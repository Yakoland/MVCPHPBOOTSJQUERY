<?php
class conexion{
	public static function conectar(){
		$usuario='GESTIONNEW';
		$pass='GESTIONNEW123';
		$servidor='10.244.143.90:1523/GESTIDEV';
		$hand=oci_connect($usuario,$pass,$servidor);
		return $hand;
	}
	public static function querys($query){
		$conn = conexion::conectar();
		$result=oci_parse($conn,$query);
		oci_execute($result);
		$datos=array();
		while($row = oci_fetch_assoc($result)){
			$datos[]=$row;
		}
		oci_close($conn);
		return $datos;
	}
	public static function ejecutar($query){
		$conn = conexion::conectar();
		$result=oci_parse($conn,$query);
		oci_execute($result);
		return;
	}	
}
?>