<?php
/**
* TNotificacion
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TNotificacion{
	private $idNotificacion;
	private $mensaje;
	public $transportista;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function __construct($id = ''){
		
		return true;
	}
	
	/**
	* Establece el mensaje
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMensaje($val = ''){
		$this->mensaje = $val;
		return true;
	}
	
	/**
	* Retorna el mensaje
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getMensaje(){
		return $this->mensaje;
	}
	
	/**
	* Remplaza las etiquetas declaradas en el texto por etiquetas validas de los datos
	* @param string $texto Cuerpo del texto/mensaje
	* @param Object $datos Datos a cambiar
	*/		
	public function construyeMensaje($texto, $datos){
		global $ini;
		$datos['sitio.url'] = $ini['sistema']['url'];
		foreach($datos as $indice => $valor)
			$texto = str_replace('[*'.$indice.'*]', $datos[$indice], $texto);
		
		return $texto;
	}
	
	public function setMensajeByPlantilla($ruta = '', $datos){
		if ($ruta == '') return false;
		
		return $this->setMensaje($this->construyeMensaje(file_get_contents($ruta), $datos));
	}
	
	/**
	* Envia notificación a dispositivos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function enviar(){
		//if ($this->getId() == '') return false;
		if ($this->getMensaje() == '') return false;
		if ($this->transportista->getId() == '') return false;
		
		global $ini;
			
		$pb = new PushBots();
		$pb->App($ini['pushbots']['aplication_id'], $ini['pushbots']['secret']);
		$pb->Alert($this->getMensaje());
		$pb->Platform(array("0","1"));
		$pb->Alias("usuario_".$this->transportista->getId());
		$pb->Alias("usuario");
		
		$pb->Push();
		
		/*if ($this->tipoemisor == 'T'){
			$pb->Tags("transportista_".$this->receptor->getId());
			$pb->Push();
		}else{
			$pb->Tags("usuario_".$this->receptor->getId());
		}
		*/
		return true;
	}
}
?>