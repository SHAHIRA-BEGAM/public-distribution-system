<?php			
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rotaryf";

$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT sno,filename,month,url,publisheddate FROM tblrotaryf";

$result = $conn->query($sql);
$html='<div class="row">';
			$html.='<div class="col-md-9">';
			$html.='<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="80%">';
			$html.='<thead>';
			$html.='<tr>';
			$html.='<th><font color="red" size="4">SNO</font></th>
					<th><font color="red" size="4">FILENAME</font></th>
					<th><font color="red" size="4">MONTH</font></th>
					<th><font color="red" size="4">PUBLISHED DATE</font></th>';
			$html.='</tr>';
			$html.='</thead>';
if(count($result)>0){
    // output data of each row
	foreach($result as $row){
       $html.='<tr>';
					$html.='<td>'.$row["sno"].'</td>';
					$html.='<td><a target="_blank" href="'.$row["url"].'"><font color="navy">'.$row["filename"].'</font></a></td>';
					$html.='<td>'.$row["month"].'</td>';
					$html.='<td>'.$row["publisheddate"].'</td>';
					$html.='</tr>';

    }
} else {
    $html.='<tr><td colspan=8 style="text-align:center"> No Record Found </td></tr>';
}
$html.='</table>';
$html.='</div>';
$html.='</div>';
$html.='<script type="text/javascript" src="js/dataTable.js"></script>';
echo $html;

?>

					
	