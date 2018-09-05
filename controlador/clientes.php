<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaclientes':
		$db = TBase::conectaDB();
		global $sesion;
		
		$sql = "select * from cliente a where a.visible = true";		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cclientes':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TCliente();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setCorreo($_POST['correo']);
				$obj->setTelefono($_POST['telefono']);
				if ($_POST['pass'] <> '')
					$obj->setPass($_POST['pass']);
				
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TCliente($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'validarCorreo':
				$db = TBase::conectaDB();
				
				$rs = $db->query("select idCliente from cliente where upper(correo) = upper('".$_POST['correo']."')");
				$row = $rs->fetch_assoc();
				if ($rs->num_rows > 0)
					echo "false";
				else
					echo "true";
			break;
			case 'autocomplete':
				$db = TBase::conectaDB();
				global $sesion;
				
				$sql = "select * from cliente a where nombre like '%".$_POST['q']['term']."%' and a.visible = true";		
				$rs = $db->query($sql) or errorMySQL($db, $sql);
				$datos = array();
				while($row = $rs->fetch_assoc()){
					
					array_push($datos, $row);
				}
				$smarty->assign("json", $datos);
			break;
		}
	break;
}
?>