<?php
/**
* TAutomovil
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TAutomovil{
	private $idAuto;
	private $marca;
	private $modelo;
	private $anio;
	private $idCliente;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function __construct($id = ''){
		$this->setId($id);
		
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "select * from auto where idAuto = ".$id;
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		foreach($rs->fetch_assoc() as $field => $val)
			$this->$field = $val;
		
		return true;
	}
	
	/**
	* Retorna el id
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getId(){
		return $this->idAuto;
	}
	
	/**
	* Establece la marca
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMarca($val = ''){
		$this->marca = $val;
		return true;
	}
	
	/**
	* Retorna la marca
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getMarca(){
		return $this->marca;
	}
	
	/**
	* Establece el modelo
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setModelo($val = ''){
		$this->modelo = $val;
		return true;
	}
	
	/**
	* Retorna el modelo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getModelo(){
		return $this->modelo;
	}
	
	/**
	* Establece el año
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setAnio($val = ''){
		$this->anio = $val;
		return true;
	}
	
	/**
	* Retorna el año
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getAnio(){
		return $this->anio;
	}
	
	/**
	* Establece el id del cliente
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCliente($val = ''){
		$this->idCliente = $val;
		return true;
	}
	
	/**
	* Retorna el id del cliente
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCliente(){
		return $this->cliente;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if ($this->getCliente() == '') return false;
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$sql = "INSERT INTO automovil(idCliente) VALUES('".$this->getCliente()."');";
			$rs = $db->query($sql) or errorMySQL($db, $sql);;
			if (!$rs) return false;
			
			$this->idAutomovil = $db->insert_id;
		}
		
		if ($this->getId() == '')
			return false;
		
		$sql = "UPDATE automovil
			SET
				marca = '".$this->getMarca()."',
				modelo = '".$this->getModelo()."',
				anio = '".$this->getAnio()."'
			WHERE idAuto = ".$this->getId();
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "update automovil set visible = false where idAuto = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		return $rs?true:false;
	}
}
?>