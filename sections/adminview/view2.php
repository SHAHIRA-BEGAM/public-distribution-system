<?php			
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pds";

$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT sno,cardnum,rice,sugar,kero,total,created_date FROM tblkanchi";

$result = $conn->query($sql);
$html='<div class="row">';
			$html.='<div class="col-md-9">';
			$html.='<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="80%">';
			$html.='<thead>';
			$html.='<tr>';
			$html.='<th><font color="red" size="4">SNO</font></th>
					<th><font color="red" size="4">CARDNUMBER</font></th>
					<th><font color="red" size="4">RICE</font></th>
					<th><font color="red" size="4">SUGAR</font></th>
					<th><font color="red" size="4">KEROSENE</font></th>
					<th><font color="red" size="4">TOTAL</font></th>
					<th><font color="red" size="4">PURCHASED_DATE</font></th>';
			$html.='</tr>';
			$html.='</thead>';
if(count($result)>0){
    // output data of each row
	foreach($result as $row){
       $html.='<tr>';
					$html.='<td>'.$row["sno"].'</td>';
					$html.='<td>'.$row["cardnum"].'</td>';
					$html.='<td>'.$row["rice"].'</td>';
					$html.='<td>'.$row["sugar"].'</td>';
					$html.='<td>'.$row["kero"].'</td>';
					$html.='<td>'.$row["total"].'</td>';
					$html.='<td>'.$row["created_date"].'</td>';
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

					
	