<?php
class Table_DML extends PDO {
	var $db_handler;

   function Table_DML() {
	$this->Table_DML='';
   }

   function ErrorHandler($str) {
	$info = $this->db_handler->errorInfo();
	print "<font color=red><b>Hiba:</b></font>";
	print $info[2]."<br>";
	print "<span class='error'>A hibát okozta:</span><span class='errmsg'>".$str."</span><br/>";
   }

	function Query($sql) {
		if($sql == "") {
			return false;
		}
		$str=$sql;
		if ($res==false) {
			$this->ErrorHandler($str);
			return false;
		} else {
			while($row=$sth->fetch()) {
				$sthh[] = $row;
			}
		return $sthh;
		}
	}

	function connect_db(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=transaction", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
    }
	}

	function disconnect_db(){
		if(!$this->db_handler) {
			$this->ErrorHandler("disconnect");
		}
		$this->db_handler = null;
		return true;
	}
}
?>
