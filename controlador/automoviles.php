<?php
global $objModulo;
switch($objModulo->getId()){
	case 'automoviles':
		$obj = new TCliente();
		$obj->setId($_GET['id']);
		$smarty->assign("cliente", $obj);
	break;
	case 'listaautomoviles':
		$db = TBase::conectaDB();
		global $sesion;
		
		$sql = "select * from automovil a where idCliente = ".$_POST['cliente']." a.visible = true";		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cautomoviles':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TAutomovil();
				
				$obj->setId($_POST['id']);
				$obj->setCliente($_POST['cliente']);
				$obj->setMarca($_POST['marca']);
				$obj->setModelo($_POST['modelo']);
				$obj->setAnio($_POST['anio']);
				
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TAutomovil($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>