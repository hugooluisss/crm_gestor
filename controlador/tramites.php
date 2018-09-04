<?php
global $objModulo;
$repositorio = "repositorio/tramites/iconos/";

switch($objModulo->getId()){
	case 'listatramites':
		$db = TBase::conectaDB();
		global $sesion;
		
		$sql = "select * from tramite a where a.visible = true";		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row2 = $row;
			$img = $repositorio."img_".$row['idTramite'].".png";
			
			$row['icono'] = file_exists($img)?($img."?".rand(1, 9999)):"";
			
			$row['json'] = json_encode($row2);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'ctramites':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TTramite();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setDescripcion($_POST['descripcion']);
				$obj->setColor($_POST['color']);
				$obj->setCita($_POST['cita'] == 1);
				$obj->setPrecio($_POST['precio']);
				$obj->setPublicado($_POST['publicado']);
				$obj->setDocumentacion($_POST['documentacion']);
				
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band, "identificador" => $obj->getId()));
			break;
			case 'del':
				$obj = new TTramite($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'upload':
				if ($_POST['id'] <> ''){
					copy($_FILES['imagen']['tmp_name'], $repositorio."img_".$_POST['id'].".png");
					$band = true;
				}else
					$band = false;
					
				$smarty->assign("json", array("band" => $band, "ruta" => $repositorio."img_".$_POST['id'].".png?".rand(1, 9999)));
			break;
		}
	break;
}
?>