<?php
global $objModulo;

switch($objModulo->getId()){
	case 'admonusuarios':
		$db = TBase::conectaDB();

		$rs = $db->query("select * from perfil");
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$datos[$row['idPerfil']] = $row['nombre'];
		}
		
		$smarty->assign("tipos", $datos);
	break;
	case 'listausuarios':
		$db = TBase::conectaDB();
		$rs = $db->query("select * from usuario a where visible = true");
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$obj = new TUsuario($row['idUsuario']);
			
			$row['tipo'] = $obj->getNombrePerfil();
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cusuarios':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TUsuario();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setEmail($_POST['email']);
				
				if ($_POST['pass'] <> '')
					$obj->setPass($_POST['pass']);
					
				if ($_POST['perfil'] <> '')
					$obj->setPerfil($_POST['perfil']);
					
				$smarty->assign("json", array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TUsuario($_POST['usuario']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'validaUsuario':
				$db = TBase::conectaDB();
				
				$rs = $db->query("select idUsuario from usuario where upper(email) = upper('".$_POST['usuario']."')");
				$row = $rs->fetch_assoc();
				if ($rs->num_rows > 0)
					echo "false";
				else
					echo "true";
			break;
			case 'getData':
				$db = TBase::conectaDB();
				
				$rs = $db->query("select a.*, b.nombre as puesto from usuario a join puesto b using(idPuesto) where idUsuario = ".$_POST['id']."");
				$row = $rs->fetch_assoc();
				
				$ruta = "repositorio/usuarios/".$_POST['id'].".jpg";
				$row['imagenPerfil'] = file_exists($ruta)?$ruta:"";
				
				$smarty->assign("json", $row);
			break;
			case 'setImagenPerfil':
				$usuario = new TUsuario($_POST['usuario']);
				if ($usuario->getId() == '')
					$smarty->assign("json", array("band" => false));
				else{
					saveImage($_POST['imagen'], "repositorio/usuarios/".$usuario->getId().".jpg");
					$smarty->assign("json", array("band" => true));
				}
			break;
		}
	break;
}