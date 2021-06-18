

<?php session_start();  
include "connectdb.php";

?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UPF Chat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
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
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="index.php" class="navbar-brand font-weight-bold text-uppercase text-base">We have your soulmate ^_°</a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
          <li class="nav-item">
            <form id="searchForm" class="ml-auto d-none d-lg-block">
              <div class="form-group position-relative mb-0">
                <button type="submit" style="top: -3px; left: 0;" class="position-absolute bg-white border-0 p-0"><i class="o-search-magnify-1 text-gray text-lg"></i></button>
                <input type="search" placeholder="Search ..." class="form-control form-control-sm border-0 no-shadow pl-4">
              </div>
            </form>
          </li>
          <li class="nav-item dropdown mr-3"><a id="notifications" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-gray-400 px-1"><i class="fa fa-bell"></i><span class="notification-icon"></span></a>
            <div aria-labelledby="notifications" class="dropdown-menu"><a href="index.php" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">You have 2 followers</p>
                  </div>
                </div></a><a href="chats.php" class="dropdown-item"> 
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-green text-white"><i class="fas fa-envelope"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">You have 6 new messages</p>
                  </div>
                </div></a><a href="#" class="dropdown-item">
                </a><a href="index.php" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">You have 2 followers</p>
                  </div>
                </div></a>
              <div class="dropdown-divider"></div><a href="#" class="dropdown-item text-center"><small class="font-weight-bold headings-font-family text-uppercase">View all notifications</small></a>
            </div>
          </li>
          <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="img/avatar-6.jpg" alt="Jason Doe" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
            <div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item"><strong class="d-block text-uppercase headings-font-family">Mark Stephen</strong><small>Web Developer</small></a>
              <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Settings</a><a href="#" class="dropdown-item">Activity log       </a>
              <div class="dropdown-divider"></div><a href="login.html" class="dropdown-item">Logout</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
       <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">Timeline</div>
        <ul class="sidebar-menu list-unstyled">
			
			<center><li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="img/avatar-6.jpg" alt="Jason Doe" style="max-width: 9rem;" class="img-fluid rounded-circle shadow"></a>
            <div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item"><strong class="d-block text-uppercase headings-font-family">Mark Stephen</strong><small>Web Developer</small></a>
              <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Settings</a><a href="#" class="dropdown-item">Activity log       </a>
              <div class="dropdown-divider"></div><a href="login.html" class="dropdown-item">Logout</a>
            </div>
          </li></center>
			
              <li class="sidebar-list-item"><a href="index.php" class="sidebar-link text-muted "><i class="o-like-hand-1 mr-3 text-gray"></i><span>Matching</span></a></li>
              <li class="sidebar-list-item"><a href="chats.php" class="sidebar-link text-muted"><i class="o-network-1 mr-3 text-gray"></i><span>Chats</span></a></li>
              <li class="sidebar-list-item"><a href="requests.php" class="sidebar-link text-muted"><i class="o-user-details-1 mr-3 text-gray"></i><span>Friend request</span></a></li>
              <li class="sidebar-list-item"><a href="profile.php" class="sidebar-link text-muted active"><i class="o-stack-1 mr-3 text-gray"></i><span>settings</span></a></li>
			
        
			
              <li class="sidebar-list-item"><a href="login.php" class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Logout</span></a></li>
        </ul>
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family"></div>
        
		 </div>
		
		 
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
 
              <!-- Form Elements -->
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Update Profile</h3>
                  </div>
                  <div class="card-body">
					  <?php 
		  				/*$VALID_USER=mysql_real_escape_string($_SESSION["VALID_USER"]);
 						$query1=mysql_query("SELECT * FROM users WHERE IDU='$VALID_USER'");						$query2=mysql_fetch_array($query1);
					  echo($query1);
					  die();*/
					  ?>
					  
					  
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">                     
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Username</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Enter your new username" class="form-control" name="username" value="<?php  echo $query2['Email'];  ?>">
                        </div>
                      </div>
						
                      <div class="line"></div>
						<div class="form-group row">
                        <label class="col-md-3 form-control-label">Old Password</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Enter your old password" class="form-control" name="oldpass">
                        </div>
                      </div>
						<div class="form-group row">
                        <label class="col-md-3 form-control-label">New Password</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Enter your new password" class="form-control" name="newpass">
                        </div>
                      </div>
						<div class="form-group row">
                        <label class="col-md-3 form-control-label">Re-Confirm Password</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Please Re-Enter your password" class="form-control" name="repass">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">what are you interested in?</label>
                        <div class="col-md-9">
							<?php ?>
                          <div class="custom-control custom-checkbox">
                            <input id="customCheck1" type="checkbox" class="custom-control-input" name="intere[]" value="football">
                            <label for="customCheck1" class="custom-control-label">Football</label>
                          </div>
							<div class="custom-control custom-checkbox">
                            <input id="customCheck2" type="checkbox" class="custom-control-input" name="intere[]" value="anime">
                            <label for="customCheck2" class="custom-control-label">Anime </label>
                          </div>
                         <div class="custom-control custom-checkbox">
                            <input id="customCheck3" type="checkbox" class="custom-control-input" name="intere[]" value="nature">
                            <label for="customCheck3" class="custom-control-label">Nature</label>
                          </div>
                     		<div class="custom-control custom-checkbox">
                            <input id="customCheck4" type="checkbox" class="custom-control-input" name="intere[]" value="highTech">
                            <label for="customCheck4" class="custom-control-label">HighTech</label>
                          </div>
							<div class="custom-control custom-checkbox">
                            <input id="customCheck5" type="checkbox" class="custom-control-input" name="intere[]" value="art">
                            <label for="customCheck5" class="custom-control-label">Art</label>
                          </div>
							<div class="custom-control custom-checkbox">
                            <input id="customCheck6" type="checkbox" class="custom-control-input" name="intere[]" value="informatique">
                            <label for="customCheck6" class="custom-control-label">Informatique</label>
                          </div>
							<div class="custom-control custom-checkbox">
                            <input id="customCheck7" type="checkbox" class="custom-control-input" name="intere[]" value="gamedev">
                            <label for="customCheck7" class="custom-control-label">GameDev</label>
                          </div>
							<div class="custom-control custom-checkbox">
                            <input id="customCheck8" type="checkbox" class="custom-control-input" name="intere[]" value="basket">
                            <label for="customCheck8" class="custom-control-label">Basketball</label>
                          </div>
							<div class="custom-control custom-checkbox">
                            <input id="customCheck9" type="checkbox" class="custom-control-input" name="intere[]intere[]intere[]" value="gym">
                            <label for="customCheck9" class="custom-control-label">Gym</label>
                          </div>
							<div class="custom-control custom-checkbox">
                            <input id="customCheck10" type="checkbox" class="custom-control-input" name="intere[]" value="musique">
                            <label for="customCheck10" class="custom-control-label">Musique</label>
                          </div>
							<div class="custom-control custom-checkbox">
                            <input id="customCheck11" type="checkbox" class="custom-control-input" name="" name="intere[]" value="gamming">
                            <label for="customCheck11" class="custom-control-label">Gamming</label>
                          </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      
                    
                      <div class="form-group row">
                        <div class="col-md-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" name="cancel">Cancel</button>
                          <button type="submit" class="btn btn-primary" name="save">Save changes</button>
                        </div>
                      </div>
                    </form>
						

						<?php
						//  close  connection;
						mysql_close();
						?>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
		  <?php 
		  $VALID_USER=mysql_real_escape_string($_SESSION["VALID_USER"]);
if(isset($_POST['save'])){
$name=$_POST['username'];
$opass=$_POST['oldpass'];
$npass=$_POST['newpass'];
$rpass=$_POST['repass'];
	
	foreach($_POST['intere'] as $valeur){
		$s=mysql_query("UPDATE users SET  Email='$username', MotDePasse='$rpass' WHERE username='".mysql_real_escape_string($_SESSION["VALID_USER"])."'");

    if ($s)
        { echo "<script type='text/javascript'>alert('Successful - Record Updated!'); window.location.href = 'user_profile.php';</script>"; }
    else
        { echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'user_profile.php';</script>"; }
}
	}
	

?>
         <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <p class="mb-2 mb-md-0">Privacy Policy &copy; 2019-2020</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Developped by Noobsters </p>
                
              </div>
            </div>
          </div>
        </footer>
      </div>
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