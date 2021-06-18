
<?php
include 'connectdb.php';



// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    
    $databaseName = "users";
    
    // get values form input text and number

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $datenaissance = $_POST['datenaissance'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $psw_repeat= $_POST['psw_repeat'];
    
    
    $optionsRadios = $_POST['optionsRadios'];
    $datenaissance = $_POST['datenaissance'];
    // connect to mysql database using mysqli
    $non = "'none'";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data
if($psw == $psw_repeat)
{
    $query = "INSERT INTO `utilisateur` (`Nom`, `Prenom`, `DateNaiss`, `Email`, `MotDePasse`, `Gender`, `Connexion`) VALUES
('".$nom."', '".$prenom."', '".$datenaissance."', '".$email."', '".$psw."', '".$optionsRadios."', 'offline')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    
  
}
    else 
    {
        echo '<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='.$non.';">&times;</span> 
  <strong>Erreur!</strong> Les mots de passes ne sont pas identiques !</div>';
    }
    
      mysqli_close($connect);
}


?>
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
      
        input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
        
        
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
      <link rel="stylesheet" href="css/errors.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png?3">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>

  <body id= "grad1">
    <div class="page-holder d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center py-5">
          <div class="col-5 col-lg-7 mx-auto mb-5 mb-lg-0">
            <div class="pr-lg-5"><img src="img/illustration.svg" alt="" class="img-fluid"></div>
          </div>
          <div class="col-lg-5 px-lg-4">
            
           
              <form action="signup.php" method="post">
                  
                  
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr> 
                    
                      
                
<label for="firstname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" Required name="nom" required class="form-control">

    <label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" Required name="prenom" required class="form-control">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" Required name="email" required class="form-control">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" Required name="psw" required class="form-control" >
      
      
      
      
     
      
      
      

    <label for="psw-repeat"><b>Repeat Password</b></label>
      
    <input type="password" placeholder="Repeat Password" Required name="psw_repeat" required class="form-control" onchange="checkPasswordMatch()" id="pswwr"> 
     <label for="gender"><b>Gender</b></label> 
      
      
         <div class="form-group row">

                        <div class="col-md-9">
                            <div>
                                <input id="optionsRadios1" type="radio" checked="" value="male" name="optionsRadios">
                                <label style="color : white" for="optionsRadios1">Male</label>


                                <input id="optionsRadios2" type="radio" value="female" name="optionsRadios">
                                <label style="color : white" for="optionsRadios2">Female</label>
                            </div>
                          </div>


                        </div>
                      </div>
      <label for="datenaissance"><b>Birth Date</b></label>
      <br>
      <input type="date" name="datenaissance" class="form-control"/>

      
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    
                   <input type="submit" class="registerbtn" name="insert" value="Register">
                  <div >
                      <div>
                          <center>
                              <p style="color : white">Already have an account? <a href="login.php">Sign in</a>.</p>
                      </div>

                      </center>
                  </div>
  </div>
              
              
              
              
              

				


</form>
          </div>
          <div>
              <p class="mt-5 mb-0 text-gray-400 text-center">Developped by Noobsters</p>
          </div>
        </div>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)                 -->
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