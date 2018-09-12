<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listacitas':
		$db = TBase::conectaDB();
		global $sesion;
		
		$sql = "select * from cita a";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'listacitasorden':
		$db = TBase::conectaDB();
		global $sesion;
		
		$sql = "select * from cita a where idOrden = ".$_POST['orden'];
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'ccitas':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TCita();
				
				$obj->setId($_POST['id']);
				$obj->setFecha($_POST['fecha']);
				$obj->setDescripcion($_POST['descripcion']);
				$obj->setOrden($_POST['orden']);
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TCita($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>