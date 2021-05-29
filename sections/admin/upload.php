<?php			
	$path='../../uploads/';
	$file_upload_path=$path;
	$file=$_FILES['file']['tmp_name'];
	if(move_uploaded_file($file,$path. $_FILES['file']['name']))

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rotaryf";

$Month=$_REQUEST["Month"];
$Year=$_REQUEST["Year"];
$file_name=$_REQUEST["file_name"];
$file_name2=$_REQUEST["file_name2"];

$url="http://localhost/rotaryf/uploads/$file_name";
$imgurl="http://localhost/rotaryf/uploads/$file_name2";
$Monthyr=$Month."-".$Year;
// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO tblrotaryf (filename,month,url,imgurl)
VALUES ('$file_name', '$Monthyr', '$url','$imgurl')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
