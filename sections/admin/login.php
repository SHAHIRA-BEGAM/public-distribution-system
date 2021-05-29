<?php			

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pds";

$User=$_REQUEST["username"];
$Pass=$_REQUEST["password"];


// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT username, password FROM tbllogin";
$result = $conn->query($sql);

    if(count($result)>0)  
    {  
   foreach($result as $row) 
    {  
	$uname=$row["username"];
	$pword=$row["password"];
    }  
    if(($uname == $User && $pword == $Pass)){
     $results="success";
    }  
	else {  
    	 $results="fail";
    }  
    } 

echo $results;
$conn->close();
?>