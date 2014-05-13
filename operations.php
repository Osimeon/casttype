<?php
	include 'config.php';
	
	class Operations {
		public $db;
		
		public function __construct(){
			$this -> db = new Config('PostgreSQL');
		}
		
		/** 
		 * Users
		 */
		public function createUser($data){
		
		}
		
		public function readUsers($data){
			
		}
		
		public function updateUser($data){
		
		}
		
		public function deleteUser($data){
		
		}
	}
	
	$obj =  new Operations();
	$obj -> readRecord();
?>