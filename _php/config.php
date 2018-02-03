<html>
<body>
<?php
	// $con and $server to be used throughout site
	// ++++ Change: Added $server variable to make it easy to change reference paths.
	
	$server ="//{$_SERVER['SERVER_NAME']}";
	
	#//$url = getenv('JAWSDB_MARIA_URL');
	#//$dbparts = parse_url($url);

	#//$hostname = $dbparts['host'];
	#//$username = $dbparts['user'];
	#//$password = $dbparts['pass'];
	#//$database = ltrim($dbparts['path'],'/');	

	// Lets try Katies DB first
	// This should be simplified when this is placed into production to simply query 1 database
	
	//-------------SERVER CONNECTION-------------
	//connection info


	//connect to db
	#//@$con = mysqli_connect($hostname, $username, $password, $database); 
	//-------------------------------------------

	 #//if(mysqli_connect_errno()){ // failed to connect to katies database; lets try local host next
		//-------------SERVER CONNECTION-------------
		//connection info
		$hostname = 'mga-db.chdrdc01ua4v.us-east-2.rds.amazonaws.com';
		$database = 'mga_db'; 
		$username = 'fcheeley';
		$password = 'fcheeley123';
		$con = mysqli_connect($hostname, $username, $password, $database); 
		if(mysqli_connect_errno()){  // failed to connect to local db too
			die('Could not connect: ' . mysqli_connect_error());
		}
		
	 
	?>
</body>
</html>
