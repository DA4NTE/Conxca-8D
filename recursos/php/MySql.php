<?php
class Mysql{
	private $servidor;
	private $usuario;
	private $password;
	private $base_datos;
	private $link;
	private $result;
	static $_instance;
	
	private function __construct(){
		$this->usuario=USER;
		$this->password=PASS;
		$this->servidor=HOST;
		$this->base_datos=BD;
		$this->conectar();
	}
	
	private function __clone(){}
	
	public static function getInstance(){
		if(!(self::$_instance instanceof self)){
			self::$_instance=new self();
		}
		return self::$_instance;
	}
	
	/* Realliza la conexión a la base de datos */
	public function conectar(){
		$this->link=mysql_connect($this->servidor, $this->usuario, $this->password)  or
  		die("Problemas de conexion a Servidor");

		mysql_select_db($this->base_datos,$this->link)or
  		die("Problemas al seleccionar Base de datos");

		@mysql_query("SET NAMES 'utf8'");
	}
		/*metodo para ejecutar una secuencia sql*/
	public function ejecutar($sql){
		$this->result=mysql_query($sql,$this->link) or
  		die("Ocurrio un error :(");
		return $this->result;
	}
	
	/*Medoto para realizar una consulta  y devolber resultados como arreglo*/
		public function consulta($sql)
	{
		$result_t = mysql_query($sql, $this->link) or
  		die("Ocurrio un error :(");;
		$Arreglo = array();
		if($result_t != "")
		{
			while ($key = mysql_fetch_assoc($result_t)) 
			{
				$Arreglo[] = $key;
			}
		}
		return $Arreglo;
	}
	
	/* metodo para obtener una fila de resultados de la sentencia sql */
	public function resultados($result){
		$this->array=mysql_fetch_assoc($result);
		return $this->array;
	}
}