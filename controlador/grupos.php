<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listagrupos':
		$db = TBase::conectaDB();
		global $sesion;
		
		$sql = "select * from grupo a where a.visible = true";		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cgrupos':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TGrupo();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setColor($_POST['color']);
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TGrupo($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>