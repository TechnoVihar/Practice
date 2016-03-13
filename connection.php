<?php
	class createConnection{

		var $host="localhost";	
		var $username="root";
		var $password="";
		var $database="test";
		var $myConn;
		
		function ConnectToDatabase(){
			$conn=mysql_connect($this->host,$this->username,$this->password);
			if(!$conn){
				die('Cannot Connect To Database');
				mysql_error();
			}else{
				$this->myConn=$conn;
			}
		}

		function selectDataBase(){
			mysql_select_db($this->database);
			if(mysql_error()){
					echo 'Cannot find Database'.$this->database;
			}else{
				echo 'Database Selected';
			}
		}

		function closeConnection(){
			mysql_close($this->myConn);
			echo 'Connection Close';
		}
	}
?>