<?php
	#   Author of the script
	#   Name: Ezra Adamu
	#   Email: ezra00100@gmail.com
	#   Date created: 10/10/2024 
	#   Date modified: 10/10/2024  

	include_once( 'Db.php' );
	include_once( 'File.php' );

	class Product
	{
		//using Namespaces
		use Db {
      		Db::__construct as private __appConst;
    	}

		use File;

		protected $table = '';

		function __construct()
	 	{
	 		$this->__appConst();
	 		$this->table = DB_TABLE_PRODUCT;
	 	}

		function getAll( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table";
			$res = $this->fetchMultiple( $sql, $dt );

			return $res ?? [];
		}

        function addNew( array $dt ) 
		{
			$sql = "INSERT INTO $this->table ( `title`, `price`, `quantity`) VALUES (?, ?, ?)";
			$res = $this->runQuery( $sql, $dt );

			return $res ?? false;
		}

		function getById( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table WHERE id = ?";
			$res = $this->fetchSingle( $sql, $dt );

			return $res ?? [];
		}

		function updateImg(array $dt) {
			$sql = "UPDATE $this->table SET `img`= ? WHERE `product_num`= ? ";
			$res = $this->runQuery2($sql, $dt);
			return $res ?? false;
		}

		function getCount( array $dt ) 
		{
			$sql = "SELECT COUNT(id) AS total FROM $this->table";
			$res = $this->fetchSingle( $sql, $dt );

			return $res['total'] ?? 0;
		}

		public function getRefNo(array $dt) {
			$sql = "SELECT id FROM $this->table WHERE product_num = ?";
			$res = $this->runQuery2($sql, $dt);
			return $res ?? false;
		}
			
	}
?>