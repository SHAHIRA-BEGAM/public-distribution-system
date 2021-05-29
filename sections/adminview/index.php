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
  <link rel="stylesheet" href="../../plugins/HoldOn/HoldOn.min.css">
  <script src="../../plugins/HoldOn/HoldOn.min.js"></script>


  <!-- Bootstrap core CSS -->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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


  <script>
    function view_details1() {



      $.ajax({
        url: 'view1.php',
        type: 'get',
        success: function(result) {

          $("#ration").html(result);
          //window.open("register","_self");
        }
      });
      // }


    }

    function view_details2() {



      $.ajax({
        url: 'view2.php',
        type: 'get',
        success: function(result) {

          $("#ration").html(result);
          //window.open("register","_self");
        }
      });
      // }


    }

    function view_details3() {



      $.ajax({
        url: 'view3.php',
        type: 'get',
        success: function(result) {

          $("#ration").html(result);
          //window.open("register","_self");
        }
      });
      // }


    }
  </script>


</head>

<body>

  <section id="header">
    <div class="container">
      <div id="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

          <h1><img class="img_logo" src="../../images/tnlogo.jpg">PUBLIC DISTRIBUTION SYSTEM</h1>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><br>
          <br>
          <br><br>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="../home/index.html">
              <img src="../../images/home.png" height="30px" width="30px">HOME<a>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="../admin/index.php">
              <img src="../../images/admin.png" height="30px" width="30px">ADMIN
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="../user/index.html">
              <img src="../../images/user.png" height="30px" width="30px">USER
          </div>
        </div>


        <div class="container">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">

                <div class="item active">
                  <img src="../../images/img2.jpg" style="width:100%;">

                </div>

                <div class="item">
                  <img src="../../images/img3.jpg" style="width:100%;">

                </div>

                <div class="item">
                  <img src="../../images/img1.jpg" style="width:100%;">

                </div>
                <div class="item">
                  <img src="../../images/img4.jpg" style="width:100%;">

                </div>
                <div class="item">
                  <img src="../../images/img5.jpg" style="width:100%;">

                </div>
                <div class="item">
                  <img src="../../images/img6.jpg" style="width:100%;">

                </div>


              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>





      </div>
    </div>
  </section>


  <section id="body">
    <div class="container">

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card2">
            <p id="admin">ADMIN VIEW</p>


            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
              <div class="card1">
                <br>
                <br>
                <br>
                <br>
                <h2>Chennai store<br> details</h2>
                <br>
                <button name="submit" id="button" class="btn btn-primary" onclick="view_details1();">VIEW</button>

              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
              <div class="card1">

                <br>
                <br>
                <br>
                <br>

                <h2>Kancheepuram store<br> details</h2>

                <br>
                <button name="submit" id="button" class="btn btn-primary" onclick="view_details2();">VIEW</button>


              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
              <div class="card1">
                <br>
                <br>
                <br>
                <br>
                <h2>Thiruvannamalai <br>store details</h2>

                <br>
                <button name="submit" id="button" class="btn btn-primary" onclick="view_details3();">VIEW</button>



              </div>
            </div>
          </div>

        </div>


      </div>




      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center">
      </div>
      <section id='ration' align="center">
        <div class="container">
          <div class="row">
            <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
            <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
            <script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
            <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

          </div>
        </div>
      </section>


    </div>
  </section>


  <section id="foot">

    <div class="container">
      <footer>
        <div id="row">
          <p id="footcon">© 2017 Tamil Nadu State Aids Control Society.</p>
        </div>
      </footer>
    </div>

  </section>

</body>

</html>