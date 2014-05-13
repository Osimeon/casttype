<?php
	class Config {
		public $type = NULL;
		public $mySQLconn = NULL;
		public $postgreSQLconn = NULL;
		public $sqliteConn = NULL;
		public $dberror = NULL;
				
		public function __construct($dbtype){
			$this -> type = $dbtype;
			
			if($this -> type == 'MySQL'){
				$this -> connectMySQL();
			}
			else if ($this -> type = 'PostgreSQL'){
				$this -> connectPostgreSQL();
			}
			else if ($this -> type = 'SQLite'){
				$this -> connectSQLite();
			}
		}
		
		public function connectMySQL(){
			$dsn = 'mysql:host=localhost;dbname=casts;';
			$user = 'root';
			$password = '';
			
			try{
				$this -> mySQLconn = new PDO($dsn, $user, $password);
			}
			catch (PDOException $e){
				$this -> dberror = 'Connection failed: ' . $e->getMessage();
			}
		}
		
		public function connectPostgreSQL(){
			$dsn = 'pgsql:host=localhost port=5432 dbname=casts user=postgres ';
			$dsn .= 'password=postgres';
			
			try{
				$this -> postgreSQLconn = new PDO($dsn);
			}
			catch (PDOException $e){
				$this -> dberror = 'Connection failed: ' . $e->getMessage();
			}
			
			return $dbh;
		}
		
		public function connectSQLite(){
			$dsn = 'books.db"';
			try{
				$this -> sqliteConn = new PDO($dsn);
			}
			catch (PDOException $e){
				$this -> dberror = 'Connection failed: ' . $e->getMessage();
			}
			
			return $dbh;
		}
	}
?>