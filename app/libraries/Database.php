<?php 

class Database {
	private $server = DB_SERVER;
	private $user = DB_USERNAME;
	private $pass = DB_PASSWORD;
	private $database = DB_DATABASE;

	private $connect;
	private $error;

	private $handler;
	private $stmt;
	

	public function __construct() {
		$connect = 'mysql:server=' . $this->server . ';database' . $this->database;
		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		// create PDO instance
		try {
			$this->handler = new PDO($connect, $this->user, $this->pass, $options);
		} catch(PDOEXception $e) {
			$this->error = $e->getMessage();
			echo $this->error;
		}
	}

	public function query($sql) {
		$this->stmt = $this->handler->prepare($sql);
	}

	public function bind($param, $value, $type = null) {
		if(is_null($type)) {
			switch(true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}

		$this->stmt->bindValue($param, $value, $type);
	}

	public function execute() {
		return $this->stmt->execute();
	}

	public function resultSet() {
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function single() {
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}

	public function rowCount() {
		return $this->stmt->rowCount();
	}
}


	// public function __construct(){
	// 	// if($this->connection->connect_error) die('Database error -> ' . $this->connection->connect_error);
	// 	try{
  //     	$this->connect = new mysqli($this->server, $this->user, $this->pass, $this->database);

	// 	} catch(Exception $e) {
	// 	// mostrar en pantalla el error
	// 	$this->error = $e->getMessage();
	// 			echo $this->error;
	// 	}
	// }
	
	// public function get_db(){
	// 	return $this->connect;
	// }

	// // enviar la query a BBDD 
	// public function consulta($sql){
	// 	return $this->connect->query($sql);
	// }



?>