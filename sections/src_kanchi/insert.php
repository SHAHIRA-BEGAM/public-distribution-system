
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>

	
</head>
<body>
<?php			
//variable declare
$cardnum="";
$rice="";
$sugar="";
$kero="";
$total="";
// Create connection
$conn = new mysqli("localhost","root","","pds");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



//receive all values from form
	$cardnum=$_POST['cardnum'];
$rice=$_POST['rice'];
$sugar=$_POST['sugar'];
$kero=$_POST['kero'];
$total=$_POST['total'];


$rice1="$rice Kg";
$sugar1="$sugar Kg";
$kero1="$kero Kg";



echo '<script language="javascript">';
echo 'alert($total)';
echo '</script>';


$sql = "INSERT INTO tblchennai (cardnum,rice,sugar,kero,total) VALUES ('$cardnum','$rice1','$sugar1','$kero1','$total')";
if ($conn->query($sql) === TRUE) {
	
echo '<div id="content" align="center">';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo "<font color='red' size='4'><h1>"."RECIPT"."</h1></font>";
	echo '<div id="content">';

    echo "<font color='blue' size='3'>Card Number :" .$cardnum. "</font><br>";
	echo '<br>';
	echo "<font color='blue' size='3'>Rice :" .$rice1. "</font><br>";
	echo '<br>';
	echo "<font color='blue' size='3'>Sugar :" .$sugar1. "</font><br>";
	echo '<br>';
	echo "<font color='blue' size='3'>Kerosene :" .$kero1. "</font><br>";
	echo '<br>';
	echo "<font color='blue' size='3'>Total Amaount :" .$total. "</font><br>";
	echo '<br>';
	
	
	echo '</div>';
	
	echo '<br>';
	echo '<button onclick="myFunction()"><font color="navy" size="3">Print this page</font></button>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

	<script>
function myFunction() {
    window.print();
}
</script>		
		
</body>
</html>