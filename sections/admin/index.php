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
  <!-- Custom styles for this template -->
  <link href="../../css/freelancer.min.css" rel="stylesheet">
  <script>
    function signin() {
      if (document.getElementById("username").value == "" ||

        document.getElementById("password").value == "") {
        swal(
          'Oops...',
          'Plese fill all the fields....',
          'error'

        )
      } else {
        var username = $("#username").val();
        var password = $("#password").val();
        var form_data = new FormData();

        form_data.append("username", username);
        form_data.append("password", password);
        $.ajax({
          url: "login.php",
          dataType: 'text', // what to expect back from the PHP script, if anything
          cache: false,
          contentType: false,
          processData: false,
          data: form_data,
          type: 'post',
          success: function(result) {
            if ($.trim(result) == "success") {
              swal({
                title: "Success",
                text: "Login successfully!!!",
                type: "success",
                showConfirmButton: true,
                confirmButtonText: "Ok",
                closeOnConfirm: true
              }, function() {
                window.location = '../adminview/index.php';
              });
            } else {
              swal({
                title: "Oops...",
                text: "Incorrect Username or Password...",
                type: "error",
                showConfirmButton: true,
                confirmButtonText: "Ok",
                closeOnConfirm: true
              }, function() {
                window.location = '#';
              });
            }
          }
        });
      }
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
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="../admin/index.html">
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
          <div class="card1">
            <br>
            <br>
            <br>
            <br>
            <div class="card card-container">
              <h1>LOGIN</h1>
              <br>
              <p id="profile-name" class="profile-name-card"></p>
              <span id="reauth-email" class="reauth-email"></span>
              <input type="text" id="username" class="form-control" placeholder="USERNAME">
              <input type="password" id="password" class="form-control" placeholder="PASSWORD">
              <div id="remember" class="checkbox">

              </div>
              <div class="row">
                <div class="col-lg-12">
                  <br>

                  <button class="btn btn-lg btn-primary btn-block btn-signin" id="button" type="submit" onclick="signin();">SIGN IN</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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