<?php
	class controller
	{
		public function insert($table,$field,$value){
		include 'config.php';
		$query = "INSERT INTO $table ($field) VALUES ($value)";
		$hasil = mysqli_query($db,$query);
		}
		public function select($table,$value){
		include 'config.php';
		if ($value != ""){
		$query = "select * from $table where $value";
		}else{
		$query = "select * from $table";
		}
		$hasil = mysqli_query($db,$query);
		$data = mysqli_fetch_assoc($hasil);
		return $data;
		}	
		public function selectbanyak($table,$value){
		include 'config.php';
		if ($value != ""){
		$query = "select * from $table where $value";
		}else{
		$query = "select * from $table";
		}
		$hasil = mysqli_query($db,$query);
		$data = array();
		while($row = mysqli_fetch_assoc($hasil)){
			$data[] = $row;
		}
		return $data;
		}
		public function selectorderby($table,$value){
		include 'config.php';
		$query = "select * from $table order by $value";
		$hasil = mysqli_query($db,$query);
		$data = mysqli_fetch_assoc($hasil);
		return $data;
		}
		public function hapus($table,$value){
		include 'config.php';
		$query = "delete from $table where $value";
		$hasil = mysqli_query($db,$query);
		}
		public function update($table,$field,$value){
		include 'config.php';
		$query = "update $table set $field where $value";
		$hasil = mysqli_query($db,$query);
		}
		function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
		}
	}
?>