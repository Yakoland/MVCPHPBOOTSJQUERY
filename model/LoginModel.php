<?php
$raiz=dirname(dirname(__FILE__));
require_once($raiz.'/model/conexion.php');
class LoginModel extends conexion{
	
	public static function validausuario($datos){
		$sql='select usu.clave from tra_usuario usu where usu.correo='."'".$datos['vemail']."'";
		$consulta = LoginModel::querys($sql);
		if(empty($consulta)){
			return false;
		}else{
			if(isset($consulta[0]['CLAVE']) && $consulta[0]['CLAVE']==$datos['vpass']){
				session_start();
				$_SESSION['autenticado']=true;
				return true;
			}else{
				return false;
			}
		}
	}	
}

?>