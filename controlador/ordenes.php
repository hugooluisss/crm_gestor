<?php
global $objModulo;
switch($objModulo->getId()){
	case 'ordenes':
		$db = TBase::conectaDB();
		$sql = "select * from tramite where visible = true";		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("tramites", $datos);
	break;
	case 'listaordenes':
		$db = TBase::conectaDB();
		global $sesion;
		
		$sql = "select *, c.nombre as cliente, d.nombre as tramite from orden a join estadoorden b using(idEstado) join cliente c using(idCliente) join tramite d using(idTramite) where a.visible = true";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cordenes':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TOrden();
				
				$obj->setId($_POST['id']);
				$obj->cliente->setId($_POST['cliente']);
				$obj->tramite->setId($_POST['tramite']);
				$obj->setObservaciones($_POST['observaciones']);
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band, "id" => $obj->getId()));
			break;
			case 'del':
				$obj = new TOrden($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>