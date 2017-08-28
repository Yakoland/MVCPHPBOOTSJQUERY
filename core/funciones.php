<?php
session_start();
function validarsession(){
	$raiz=dirname(__FILE__);
	if(isset($_SESSION['autenticado']) && $_SESSION['autenticado']==true){
		return;
	}else{
		header('Location: error.html');
	}
}
?>