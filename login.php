
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UPF Chat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
      
    <style >
      
      #grad1 {
          background-image: linear-gradient(to right bottom, #33547f, #375083, #404c86, #4b4686, #573f85, #683c87, #7a3888, #8b3286, #a53088, #bf2c86, #d72a82, #ee2a7b);
         
 }
      </style>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png?3">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><![endif]-->

  </head>

  <?php
  function phpAlert($msg) {
      echo '<script type="text/javascript">alert("' . $msg . '")</script>';
  }

  include 'connectdb.php';
  if(isset($_POST["login"]))
  {
      $user=$_POST["username"];
      $pass=$_POST["password"];
  if (!empty($user) && !empty($pass)) {

      $username = mysqli_real_escape_string($con, $user);
      $password = mysqli_real_escape_string($con, $pass);
      $check = mysqli_query($con,"SELECT IDU FROM utilisateur WHERE  Email = '$username' and MotDePasse= '$password'");
      $idc =mysqli_fetch_array($check);
      $nb_rows = mysqli_num_rows($check);
      if ($nb_rows > 0) {
          session_start();
          $_SESSION["id"] = $idc[0];
          header("location: index.php");
         
        
          
      }
      else {
          phpAlert(   "Wrong Password or username"   );
      }
  } else {
      echo 'Veuillez remplir tous les champs';
  }

  }
  ?>
  <body id= "grad1">
    <div class="page-holder d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center py-5">
          <div class="col-5 col-lg-7 mx-auto mb-5 mb-lg-0">
            <div class="pr-lg-5"><img src="img/illustration.svg" alt="" class="img-fluid"></div>
          </div>
          <div class="col-lg-5 px-lg-4">
            
            <form id="loginForm" class="mt-4" method="POST">
              <div class="form-group mb-4">
                <input type="text" required name="username" placeholder="Username or Email address" class="form-control border-0 shadow form-control-lg">
              </div>
              <div class="form-group mb-4">
                <input type="password" required name="password" placeholder="Password" class="form-control border-0 shadow form-control-lg text-violet">
              </div>
              <div class="form-group mb-4">
                <div class="custom-control custom-checkbox">
                  <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                  <label for="customCheck1" class="custom-control-label">Remember Me</label>
                </div>
                  <br>
                  <center> 
                  <a href="signup.php"><h7>Not registred yet?</h7>&nbsp;&nbsp;<h7>Signup now!</h7></a>
                      </center>
              </div>
             <center>
                 <button name="login" value="login" type="submit" class="btn btn-primary shadow px-5">Log in</button>
                  </center>
            </form>
          </div>
        </div>
        <p class="mt-5 mb-0 text-gray-400 text-center">Developped by : Noobsters</p>
       
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>