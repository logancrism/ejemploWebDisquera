<?php 

class mysql 
{
	var $host = 'localhost';
	var $user;	
	var $pass;
	var $db;
	var $con;

	function __construct()
	{
		if ($_SERVER['HTTP_HOST'] == 'localhost') {
			$this->host='localhost';
			$this->user='root';
			$this->pass='root';
			$this->db='disquera';
		} else {
			$this->host='us-cdbr-iron-east-04.cleardb.net';
			$this->user='ba82f99c76d53f';
			$this->pass='c58fcae4';
			$this->db='heroku_8c75e509b63df4e';
		}
	
		$this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->db);

		if (empty($this->con)) {
			die('Error al conectar la bas de datos');
		}
	}

	public function ejecutar($query) {
		return $sql = $this->con->query($query);
	}

	public function consulta($query) {
		$sql = $this->con->query($query);

		$array = array();
		while ($row = $sql->fetch_array()) {
			$array[] =$row;
		}
		return $array;

	}

}