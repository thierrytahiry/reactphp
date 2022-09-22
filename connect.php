 <?php 
 	//credentials en base

 	define('DB_HOST', 'localhost');
 	define('DB_USER', 'root');
 	define('DB_PASS', '');
 	define('DB_NAME', 'phpreact');

 	//connexion en base de donne

 	function connect()
 	{
 		$connect = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

 		if (mysqli_connect_errno($connect)) {
 			die("Erreur de connection:" . mysqli_error($connect));

 		}

 		mysqli_set_charset($connect, "utf8");

 		return $connect;
 	}

 	$con = connect();
 	?>

 