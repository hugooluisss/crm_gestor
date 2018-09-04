<?php
require 'librerias/twilio/Services/Twilio.php';

class TSMS{
	public $sandbox = false;
	public $sid = 'AC92724430034885b5af9a6b4dd1760364';
	public $token = '6a9d2540ad913b548735c683c34f8180';
	//public $telefono = '+12056831259';
	public $telefono = "+56931402200";
	
	public $mensaje = "";
	public $destino = "";
	
	public function __construct(){
		$this->client = new Services_Twilio($this->sid, $this->token);
		$this->mensaje;
	}
	
	public function setMensaje($msg = ''){
		$this->mensaje = $msg;
		return true;
	}
	
	public function setDestino($telefono = ''){
		$this->destino = $telefono;
	}
	
	public function send(){
		if ($this->mensaje == '') return false;
		if ($this->destino == '') return false;
		try{
			if ($this->sandbox)
				return true;
			
			$resp = $this->client->account->messages->sendMessage(
				$this->telefono,
				$this->destino,
				$this->mensaje
			);
			
			return true;
		}catch(Exception $e){
			return false;
		}
	}
	
	public function construyeMensaje($texto, $datos){
		foreach($datos as $indice => $valor)
			$texto = str_replace('[*'.$indice.'*]', $datos[$indice], $texto);
			
		return $texto;
	}
	
	public function setMensajeByPlantilla($ruta = '', $datos){
		if ($ruta == '') return false;
		
		return $this->setMensaje($this->construyeMensaje(file_get_contents($ruta), $datos));
	}
}