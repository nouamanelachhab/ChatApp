
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
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png?3">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base">We have your soulmate ^_°</a>
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
			
              <li class="sidebar-list-item"><a href="index.php" class="sidebar-link text-muted"><i class="o-like-hand-1 mr-3 text-gray"></i><span>Matching</span></a></li>
              <li class="sidebar-list-item"><a href="chats.php" class="sidebar-link text-muted"><i class="o-network-1 mr-3 text-gray"></i><span>Chats</span></a></li>
              <li class="sidebar-list-item"><a href="requests.php" class="sidebar-link text-muted active"><i class="o-user-details-1 mr-3 text-gray"></i><span>Friend request</span></a></li>
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
		  
		  
		 
		
		 <div class="container-fluid px-xl-5">
          <section class="py-5">
			  
			  
			   <section><center>
            <div class="row mb-4">

			
				<?php

include 'logon.php';
$id = 5;
$varia = matchingarray($id);


				for ($i=0;$i<sizeof($varia);$i++){
                    
                    
echo ' <div class="col-lg-5 mb-4 mb-lg-0 pl-lg-0">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row align-items-center flex-row">
                      <div class="col-lg-5">
						   <div class="col-lg-3 d-flex align-items-center flex-column flex-lg-row text-center text-md-left"><img src="img/profile/'.$varia[$i][0].'.jpg" alt="..." style="max-width: 7rem" class="rounded-circle mx-3 my-2 my-lg-0">
                      <h6 class="mb-0">'.$varia[$i][1].'</h6>
                    </div>
                    
                        <h2 class="mb-0 d-flex align-items-center"><span>'.$varia[$i][4].'%</span><span class="dot bg-green d-inline-block ml-3"></span></h2><span class="text-muted text-uppercase small">Match Score!</span>
                        <button type="submit" class="btn btn-primary">Accept</button> <br><br>
					  	<button type="submit" class="btn btn-primary" id="reject" >Reject</button>
					  </div>
                      <div class="col-lg-7">
                      <br><br><br> <br>
                        <p><img src="img/matching/';
                    if ($varia[$i][4] >= 0 && $varia[$i][4] < 10) 

                    { echo '10';  }
                    else if ($varia[$i][4] >= 10 && $varia[$i][4] < 20)
                    { echo '20';}
                    else if ($varia[$i][4] >= 20 && $varia[$i][4] < 30)
                    {echo '30';}
                    else if ($varia[$i][4] >= 30 && $varia[$i][4] < 40)
                    { echo '40';}
                   else if ($varia[$i][4] >= 40 && $varia[$i][4] < 50)
                   {  echo '50';}
                  else  if ($varia[$i][4] >= 50 && $varia[$i][4] < 60)
                  {  echo '60';}
                    else if ($varia[$i][4] >= 60 && $varia[$i][4] < 70)
                    { echo '70';}
                    else if ($varia[$i][4] >= 70 && $varia[$i][4] < 80)                    
                    {echo '80';}
                    else if ($varia[$i][4] >= 80 && $varia[$i][4] < 90)
                    { echo '90';}
                    else if ($varia[$i][4] >= 90 && $varia[$i][4] <= 100)
                    { echo '100';}
                 
                            
                            echo'.svg" style="max-width: 4rem"></p>
                      </div>
                    </div>
                  </div>
					
                </div> 
              </div>
				
		';}	?>	
				
				
			  </div></center>
           
          </section>
			  
			  
          
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
        setInterval(function(){ dis(); }, 90000);
                 
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
                <p class="mb-0">Designed by Noobsters</p>
                
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