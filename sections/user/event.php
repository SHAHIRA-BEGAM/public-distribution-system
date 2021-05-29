<?php			
		//$path='../../uploads/';
	//$file_upload_path=$path;
	//$file=$_FILES['file']['tmp_name'];
	//if(move_uploaded_file($file,$path. $_FILES['file']['name']))

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rotaryf";


//$file_name=$_REQUEST["file_name"];

//$url="http://localhost/rotaryf/uploads/$file_name";
$evt_title=$_REQUEST["evt_title"];
$evt_date=$_REQUEST["evt_date"];
$evt_time=$_REQUEST["evt_time"];
$evt_venue=$_REQUEST["evt_venue"];
$evt_desc=$_REQUEST["evt_desc"];
//$url="http://localhost/rotaryf/uploads/$file_name";
//$imgurl="http://localhost/rotaryf/uploads/$file_name2";
$Monthyr=$Month."-".$Year;
// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO tblevent (evt_title,evt_date,evt_time,evt_venue,evt_description)
VALUES ('$evt_title', '$evt_date', '$evt_time','$evt_venue','$evt_desc')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>




