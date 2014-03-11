<?php
function Layout($archivo='')
{	
	if($archivo != 'default')
	{
		global $layout;
		$layout = $archivo;
	}
}
function Render($archivo='index'){
	global $peticion;
	$peticion = $archivo;
}
function content(){
	global $_template;
	if(file_exists($_template)){
		include($_template);
	}
}
function setSession($nombre, $valor)
{
	$_SESSION[$nombre] = $valor;
}

function getSession($nombre)
{
	return $_SESSION[$nombre];
}

function set($nombre='default', $valor=null)
{
	$GLOBALS['var_array'][$nombre] = $valor;
	//$var_array[$nombre] = $valor;
	//$_POST[$nombre] = $valor;
}
function get($nombre='default'){
	return $GLOBALS[$nombre];
}

function actual_URL() {
 $isHTTPS = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on");
$port = (isset($_SERVER["SERVER_PORT"]) && ((!$isHTTPS && $_SERVER["SERVER_PORT"] != "80") || ($isHTTPS && $_SERVER["SERVER_PORT"] != "443")));
$port = ($port) ? ':'.$_SERVER["SERVER_PORT"] : '';
$url = ($isHTTPS ? 'https://' : 'http://').$_SERVER["SERVER_NAME"].$port.$_SERVER["REQUEST_URI"];
return $url;
}

function nombre_Pagina() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

function set_URL($url){
 return unparamet().$url;
 //'/'.$url;
}

function encriptar($contrasena)
{
	return md5($contrasena);
}

function unparamet()
{
	global $parametros;
	$out ="";
	foreach ($parametros as $key) {
		$out .= '../';
	}
	return $out;
}

/*
function prueba_unparamet($pr1, $pr2, $pr3)
{
	echo unparamet();
	exit();
}

function prueba_unparamet_2()
{
	echo unparamet();
	exit();
}*/


function imagen($src, $atributos=array())
{

	//imagen("1.png",array('width'=>'190px', 'height'=>'200px')); <----- Con atributos
	//imagen("1.png",array()); <----- sin atributos

	$out = "<img src ='".unparamet()."recursos/img/".$src."'";

	foreach ($atributos as $key => $value) {
		$out .= " ".$key."='".$value."'";
	}

	$out.= " />";

	return $out;
}

function CSS($archivo)
{
	echo '<link rel="stylesheet" type="text/css" href="'.unparamet().'recursos/css/'.$archivo.'.css">';
}

function Script($archivo)
{
	echo '<script src="'.unparamet().'recursos/js/'.$archivo.'.js" type="text/javascript"></script>';
}

function pluginScript($archivo)
{
	global $doc;
	echo '<script src="'.unparamet().'JS/'.$archivo.'" type="text/javascript"></script>';
}

function pluginCSS($archivo)
{
	global $doc;
	echo '<link rel="stylesheet" type="text/css" href="'.unparamet().'CS/'.$archivo.'">';
}

function pluginPHP($archivo){
	global $root;
	require_once $root.'recursos/php/'.$archivo.'.php';
}

function JS($archivo){
	global $doc;
	if(file_exists($doc.'recursos/js/'.$archivo.'.js')){
		echo  preg_replace('<br />', '', htmlspecialchars_decode(file_get_contents($doc.'recursos/js/'.$archivo.'.js')));
	}
	else{
		echo 'No file';
	}
	Layout('');
}

function CS($archivo){
	global $doc;
	if(file_exists($doc.'recursos/css/'.$archivo.'.css')){
		header("Content-type: text/css");
		echo  file_get_contents($doc.'recursos/css/'.$archivo.'.css');
	}
	else{
		echo 'No file';
	}
	Layout('');
}
function insertar($tabla, $datos)
{
	$sql = 'INSERT INTO '.$tabla.' (';
		$i = 0;
		foreach ($datos as $key => $value) {
			if($i == (count($datos)-1))
			{
				$sql .= $key.') ';
			}
			else
			{
				$sql .= $key.', ';
			}
			$i++;
		}
	$sql .=	'VALUES (';
		$i=0;
		foreach ($datos as $key => $value) {
			if($i == (count($datos)-1))
			{
				$sql .= '"'.$value.'")';
			}
			else
			{
				$sql .= '"'.$value.'", ';
			}
			$i++;
		}
	$sql.=';';
	return $sql;
}

function actualizar($tabla, $datos, $where)
{
	//UPDATE `thera`.`usuarios` SET `estado`='2', `tipo`='1' WHERE `id`='8';
	$sql = 'UPDATE `'.$tabla.'` SET ';

	$i=0;
	foreach ($datos as $key => $value) {
		if($i == (count($datos)-1))
			{
				$sql .= '`'.$key.'` = "'.$value.'" ';
			}
			else
			{
				$sql .= '`'.$key.'` = "'.$value.'", ';
			}
			$i++;
	}
	$sql .= 'WHERE ';
	$i=0;
	foreach ($where as $key => $value) {
		if($i == (count($where)-1))
			{
				if(count($where) == 1)
				{
					$sql .= '`'.$key.'` = "'.$value.'";';
				}
				else
				{
					$sql .= 'AND `'.$key.'` = "'.$value.'";';
				}
			}
			elseif ($i == 0) {
				$sql .= '`'.$key.'` = "'.$value.'" ';
			}
			else
			{
				$sql .= 'AND `'.$key.'` = "'.$value.'" ';
			}
			$i++;
	}
	$sql.=';';
	return $sql;
}

function uploadImage()
{
	/*encode
		$binario = fread(fopen($path, "r"), filesize($path));
		$imagen_encode = base64_encode($binario);
	*/

		$blob = $_POST['imagen'];

		startSession();
		$sql = 'DELETE FROM `imagenes` WHERE `id_usuario`= '.getSession('id').';';
		global $db;
		$resultados = $db->ejecutar($sql);

		$sql = insertar('imagenes', array('id_usuario'=>getSession('id'), 'imagen' => $blob));
		$db->ejecutar($sql);
		header('Location: home');
		exit();
	}
function getExtension($str) {

         $i = strrpos($str,".");
         if (!$i) { return ""; } 
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
}

function segundo($cantidad){
	return $cantidad*1;
}

function minuto($cantidad){
	return $cantidad*segundo(60);
}

function hora($cantidad){
	return $cantidad*minuto(60);
}

function dia($cantidad){
	return $cantidad*hora(24);
}

function mes($cantidad){
	return $cantidad*dia(30);
}

function save_mail_contact($mail){
    global $cache;
	$cache->put('mail', $mail);
}

function asunto($value){
	echo "<script>var asunto='".$value."';</script>";
}

function mailto($nombre,$mensaje,$from,$asunto){
	Layout('_null');
	global $cache;
	$mail_to = $cache->get('mail');  
	$headers = "MIME-Version: 1.0\r\n";
	$mensaje = 'Nombre: '.$nombre.'<br>Mensaje:'.$mensaje;
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= "From: ".$from."\r\n";
	$asunto = $asunto;
	if(mail($mail_to, $asunto, $mensaje, $headers))
	{
    	return true;
    }
	else 
	{
    	return false;
	}
	exit();
}

function Consulta($sql){
	global $db;
	return $db->consulta($sql);
}

function Ejecutar($sql){
	global $db;
	$db->ejecutar($sql);
}

function lastInserted(){
	global $db;
	$result = $db->consulta('SELECT LAST_INSERT_ID() as id;');
	return $result[0]['id'];
}
?>