<?php
$raiz=dirname(dirname(__FILE__));
require_once($raiz.'/model/conexion.php');
class TramiteModel extends conexion{
	
	public static function buscarTramite($datos){
		$sql='select tra.IDRADICADO,tra.NRORADICADO,tra.DESCRIPCION,tra.FECHA from tra_tramite tra where tra.NRORADICADO='.$datos['nrotramite'];
		$consulta = TramiteModel::querys($sql);
		return $consulta;
	}	
	public static function eliminarTramite($datos){
		$sql='delete from tra_tramite tra where tra.IDRADICADO='.$datos['idtramite'];
		$consulta = TramiteModel::ejecutar($sql);
		return;
	}		
	public static function crearTramite($datos){
		$datos['nrotramite']=$datos['nura'];
		$validarexite=TramiteModel::buscarTramite($datos);
		if(empty($validarexite)){
			$fech="TO_DATE('".$datos['dia']."/".$datos['mes']."/".$datos['ano']."','DD/MM/YY')";
			$sql="insert into tra_tramite (IDRADICADO,DESCRIPCION,NRORADICADO,FECHA) values (TRA_TRAMITE_SEQ.NEXTVAL,'".$datos['titu']."',".$datos['nura'].",".$fech.")";
			$consulta = TramiteModel::ejecutar($sql);
			return true;
		}else{
			return false;
		}
	}	
	public static function TemasTramite(){
		$sql='select tem.descripcion from tra_tema tem';
		$consulta = TramiteModel::querys($sql);
		return $consulta;
	}		
	
}

?>
