<?php
	function login($after = ""){
		$result = Consulta("SELECT * FROM usuarios WHERE (email = '".$_REQUEST['usuario']."' OR nick = '".$_REQUEST['usuario']."') AND pass = '".md5($_REQUEST['pass'])."'");
		if(count($result) > 0)
		{
			/*if($result[0]['activo']==1)
			/{*/
				if($after==""){
					echo json_encode($result);
				}
			/*}
			else{
				echo json_encode('no-activo');
			}*/
		}
		else{
			echo "false";
		}
		exit();
	}

	function activar($id = 0){
		if($id != 0)
		{
			$sql = actualizar('usuarios', array('activo' => '1'), array('id' => $id));
			Ejecutar($sql);

			echo "Gracias por registrarse en Thera";
		}
		else
		{
			echo "Error de activacion";
		}
		Layout('_null');
		exit();
	}

	function registro_usuario(){
		/*echo*/ $sql = insertar('usuarios', 
			array(
				'nombre' => $_POST['nombre'],
				'apellido_paterno'=>$_POST['apellido_paterno'], 
				'apellido_materno'=>$_POST['apellido_materno'],
				'nick'=>$_POST['nick'],
				'pass'=>md5($_POST['pass']),
				'email'=>$_POST['email']
			));
		Ejecutar($sql);
		Layout('_null');
		exit();
	}

	function saveSession(){
		if(!existeSession()){
			session_start();
		}
		$_SESSION = $_REQUEST['content'];
		Layout('_null');
		exit();
	}

	function existeSession(){
		if(session_id() == '' || !isset($_SESSION)) {
    		return false;
		}
		return true;
	}

	function invalidSession($location){
		echo "<script>location.href='".$location."';</script>";
	}
?>