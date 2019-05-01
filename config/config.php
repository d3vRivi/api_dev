<?php

ob_start(); //Turns on output buffering 
session_start();

$con = mysqli_connect("localhost", "root", "", "lib"); //Connection variable

// $myServer = "api69.database.windows.net";
// $myUser = "azula69";
// $myPass = "iloveMahee123.";
// $myDB = "apiproject69";

// $dbhandle = mssql_connect($myServer, $myUser, $myPass)
//   or die("Couldn't connect to SQL Server on $myServer"); 

//   $serverName = "api69.database.windows.net, 1443"; //serverName\instanceName, portNumber (1433 by default)
//   $ConnectionOptions = array( "Database"=>"apiproject69", "UID"=>"azula69", "PWD"=>"iloveMahee123.");
//   $conn = sqlsrv_connect($serverName, $ConnectionOptions);
  
//   if( $conn ) {
// 	   echo "Successfuly connected.<br />";	
//   }else{
// 	   echo "Connection error.<br />";
// 	   die( print_r( sqlsrv_errors(), true));
//   }

	// $host = "(LocalDB)\MSSQLLocalDB";
	// $user = "";
	// $pwd = "";
	// $db = "apidb";
	// $conn= new PDO("sqlsrv:Server = $host; Database= $db", $user, $pwd);
	// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// if( $conn ) {echo "Connection established";}
	// else
	// {echo "Connection could not be established.<br />";
	// die( print_r( sqlsrv_errors(), true));}
// }catch(Exception $e){die(print_r($e));}

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>