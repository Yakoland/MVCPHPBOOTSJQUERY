<?php
$raiz=dirname(dirname(__FILE__));
require_once($raiz.'/model/TramiteModel.php');

class TramiteController{

	public function Buscar($parameters){

		$datos=TramiteModel::buscarTramite($parameters);
		$respuesta=array();
		if(empty($datos)){
			$respuesta['resp']='vacio';
		}else{
			$respuesta['resp']=$datos[0];
		}
		echo @json_encode($respuesta);
	}
	public function Eliminar($parameters){

		$datos=TramiteModel::eliminarTramite($parameters);
		$respuesta['resp']='ok';
		echo @json_encode($respuesta);
	}	
	public function Crear($parameters){

		$datos=TramiteModel::CrearTramite($parameters);
		if($datos==false){
			$respuesta['resp']='repetido';
			echo @json_encode($respuesta);			
		}else{
			$respuesta['resp']='ok';
			echo @json_encode($respuesta);
		}
	}	
	public function Temas(){

		$datos=TramiteModel::TemasTramite();
		$respuesta=array();
		if(empty($datos)){
			$respuesta['resp']='vacio';
		}else{
			$respuesta['resp']=$datos;
		}
		return $respuesta;
	}		
}
?>