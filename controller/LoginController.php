<?php
$raiz=dirname(dirname(__FILE__));
require_once($raiz.'/model/LoginModel.php');

class LoginController{

	public function autenticar($parameters){

		$login=LoginModel::validausuario($parameters);
		if(!$login){
			echo 'Usuario o Password No valido';
		}else{
			$_SESSION['autenticado']=true;
			echo 'ok';
		}
	}
}
?>