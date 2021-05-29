
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Ration</title>
	 <!-- Alert -->
	<script src="../../plugins/sweetalert2/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../plugins/sweetalert2/dist/sweetalert.css">
    <!-- Bootstrap core CSS -->

<!--VENDOR: JQUERY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom fonts for this template -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" />
		<link href="../../css/custom.css" rel="stylesheet" />
		<link href="../../css/global.css" rel="stylesheet" />
		<link href="../../css/responsive.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../../css/freelancer.min.css" rel="stylesheet">
	
	<script>
	
			
function done(){
if(document.getElementById("cardnum").value == ""||
   document.getElementById("quant1").value == ""||
   document.getElementById("quant2").value == ""||
   document.getElementById("quant3").value == "")
	  {
	  swal(
	    'Oops...',
  'Plese fill the all fields',
  'error'

  
)
}else{

	var cardnum= $("#cardnum").val();
 var quant1 = $("#quant1").val();
 var quant2= $("#quant2").val();
 var quant3 = $("#quant3").val();
 // var file_data = $("#file1").prop("files")[0];
// var file = document.getElementById('file1').files[0].name;

    var form_data = new FormData();
	//form_data.append("file_name", file);

	 //form_data.append("file", file_data);

	form_data.append("cardnum", cardnum);
	form_data.append("quant1", quant1);
	form_data.append("quant2", quant2);
	form_data.append("quant3", quant3);

    $.ajax({
        url: "insert.php",
        dataType: 'text', // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(result) {
			swal(
  'Success!',
  'data stored Successfully',
  'success'
  
)
        }
    });

	
}
}

	
	
	</script>
	
	
	
</head>
  <body>
  	
		
				
<section id="body">
<div class="container-fluid">
					
<form action="insert.php" method="POST">	
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card1" >
			<div class="col-lg-12">
		<div class="mat-input">
		 <label class="cn">CARD NUMBER</label>
                <div class="mat-input-outer">
				
                    <input id="cardnum" name="cardnum" type="text"/>
                    <div class="border"></div>
                   
                </div>            
            </div>
			
</div>



<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="card2" >
					<div class="card3" >
						<img  src="../../images/rice.png" height="100px" width="180px;" >
					</div>
					<p id="info"><font color="blue"> Free of Cost</font> </p>
					
<p id="info">
 minimum of <font color="blue">12 Kgs</font>  and maximum of <font color="blue">20 kgs </font> per month per card.
</p>

	<div class="form-group">
	
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <label for="usr" id="quan">Enter Quantity:</label> 
	   </div>	
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	  <input type="number" class="form-control" id="quant1" name="rice">
      </div>
	  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" align="center" >
	 <input type="button"class="form-control" id="kg" value="kg">
      </div>	
		  
    </div>	


					
					</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="card2" >
										<div class="card3" >
										<img  src="../../images/sugar.png" height="100px" width="180px;" >
				
					</div>
											<p id="info"><font color="blue"> Rs.13.50 per Kg.</font> </p>
						
					<p id="info">500 gms per head per month subject to a<font color="blue"> maximum of 2 kgs. per month.</font> </p>
					
					
	<div class="form-group">
	
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <label for="usr" id="quan">Enter Quantity:</label> 
	   </div>	
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	  <input type="number" class="form-control" id="quant2" name="sugar">
      </div>
	  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" align="center" >
	 <input type="button"class="form-control" id="kg" value="kg">
      </div>
		  
    </div>	


					
					</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="card2" >
								<div class="card3" >
					<img  src="../../images/kero.png" height="100px" width="100px;" >
					</div>
					<p id="info"><font color="blue"> Rs.13.60 to 
Rs.14.20 per litre</font> </p>
					
					<p id="info">Ranges from<font color="blue">  3-15 litres<br> per card </font>depending on the location </p>
					
				
	<div class="form-group">
	
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <label for="usr" id="quan">Enter Quantity:</label> 
	   </div>	
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	  <input type="number" class="form-control" id="quant3" name="kero">
      </div>
	  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" align="center" >
	 <input type="button"class="form-control" id="litre" value=" litre">
      </div>	
		  
    </div>	

			</div>
					</div>
					
					

<div class="row">
					 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" align="right" >
	 <input type="button"class="form-control" id="done" value="TOTAL" name="click" onclick="total1();">
	  </div>
	  					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" align="left" >
					
	
							
							<input name="total" class="form-control" width="20px" id="output">
	 
						</div>
						</div>
						
						<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
							
</div>

						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<br>
														<br>
																					<br>
							<button type="submit"class="form-control" id="insert"> SUBMIT</button>
							
						
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
							
</div>


	  
					</div>
					
					  </form>
					
					</div>
					
				  

	  
<script>
function total1(){

		var value1= document.getElementById("quant1").value;
		var value2= document.getElementById("quant2").value;
		var value3=document.getElementById("quant3").value;
		var total= Number(13.50 * Number(value2)) + Number(14 * Number(value3));
		 var total=total+" R.S"
		
		document.getElementById("output").value=total;
		
		}
		
	
</script>  		
					
</div>
</section>	
   
<section id="foot">

			<div class="container-fluid">
			<footer>
				
				<p id="footcon">© 2017 Tamil Nadu State Aids Control Society.</p>	
		
			</footer>
				</div>
			
				</section>		
				
 </body>
</html>
