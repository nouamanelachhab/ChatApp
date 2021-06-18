<?php session_start();?>
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
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="css/os.css" />
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
      
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet" >
    <link href="st.css" type="text/css" rel="stylesheet" >

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
            <div aria-labelledby="notifications" class="dropdown-menu"><a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">You have 2 followers</p>
                  </div>
                </div></a><a href="#" class="dropdown-item"> 
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-green text-white"><i class="fas fa-envelope"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">You have 6 new messages</p>
                  </div>
                </div></a><a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-blue text-white"><i class="fas fa-upload"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">Server rebooted</p>
                  </div>
                </div></a><a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">You have 2 followers</p>
                  </div>
                </div></a>
              <div class="dropdown-divider"></div><a href="#" class="dropdown-item text-center"><small class="font-weight-bold headings-font-family text-uppercase">View all notifications</small></a>
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
              <li class="sidebar-list-item"><a href="chats.php" class="sidebar-link text-muted active"><i class="o-network-1 mr-3 text-gray"></i><span>Chats</span></a></li>
              <li class="sidebar-list-item"><a href="requests.php" class="sidebar-link text-muted"><i class="o-user-details-1 mr-3 text-gray"></i><span>Friend request</span></a></li>
              <li class="sidebar-list-item"><a href="profile.php" class="sidebar-link text-muted"><i class="o-stack-1 mr-3 text-gray"></i><span>settings</span></a></li>
			
          <!-- <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>Pages</span></a>
           <div id="pages" class="collapse">
              <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page one</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page two</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page three</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page four</a></li>
              </ul>
            </div>
          </li>-->
			
			
              <li class="sidebar-list-item"><a href="login.php" class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Logout</span></a></li>
        </ul>
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family"></div>
        
		 </div>
		  
		  
		 
		
		 <div class="container-fluid px-xl-5" >
             
             
             
          
          <section class="container-fluid px-xl-5">
            <div class="container-fluid px-xl-5">

			<?php
include 'friend.php';
include 'logon.php';
include 'connectdb.php';

$id = $_SESSION["id"];

/* juste pour le test*/
$_SESSION["id2"] = 3;
$id2 = $_SESSION["id2"];

if(isset($_POST['sendmsg']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    
    $databaseName = "users";
  $connect = mysqli_connect($hostname, $username, $password, $databaseName);

    
    
    $message = $_POST['msgcontent'];
    $date =  date("Y/m/d") ;
    $time =  date("h:i:sa");
    if ($message != " ")
    {
        $query =" INSERT INTO `messages` (`IdU1`, `IdU2`, `Date`, `contenu`,  `Time`) VALUES ('".$id."', '".$id2."', '".$date."', '".$message."',  '".$time."')";
        $resu = mysqli_query($connect,$query);
        
        if ($resu)
        {
        echo "<script>alert(\"inseree\")</script>";
        }
        else
        {
        echo "<script>alert(\"la variable est nulle\")</script>";
        }
        
        
    }
    
}


?>
			<div class="container-fluid px-xl-5" >
    <div class="container-fluid px-xl-5" >
    <div class="msg_history " id = "msg">
        
    <script type="text/javascript">
          
        function message(){
            xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","messages.php",false);
            xmlhttp.send(null);
            document.getElementById("msg").innerHTML=xmlhttp.responseText;
            
        }
           message();   
        setInterval(function(){ message(); }, 2000);
                 
        </script>
        
         </div>
        
         <form class="type_msg" method="post" action="chats.php">
            <div class="input_msg_write">
              <input type="text" class="write_msg" placeholder="Type a message" name="msgcontent"/>
              <button class="msg_send_btn" type="submit" name="sendmsg"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
          </form>
    </div>
    
</div>
				
				
			 
           
          </section>
         
         
			 
         
        </div>
		  
		  
		  
		  
		  
		
		
		
		
		
		
		  
		  
      
		<div id="sidebar_right" >
           
           
           
            
            
			<div id="base">
    <section style="color: black;">
      <!-- added new div here -->
        
    
        
        <script type="text/javascript">
          
        function dis(){
            xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","online.php",false);
            xmlhttp.send(null);
            document.getElementById("sidebar_right").innerHTML=xmlhttp.responseText;
            
        }
           dis();   
        setInterval(function(){ dis(); }, 5000);
                 
        </script>
        
        
				</section>
		</div>
		</div>
		</div>	
		
		
		
	
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <p class="mb-2 mb-md-0">Privacy Policy &copy; 2019-2020</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Designed by techGeeks</p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>
      
   
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>