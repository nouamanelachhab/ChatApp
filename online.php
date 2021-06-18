 
	<?php
session_start();
$id = $_SESSION["id"];
   
function friends($id){

     include 'connectdb.php';

    
    
    $amis;
    static $j=0;
    
    $req1 = "SELECT IDU, Nom , Prenom , Connexion from utilisateur,amitie WHERE IDU = Utilisateur2 AND Etat = 'accepted' and Utilisateur1 = ".$id;

    $req2 = " SELECT IDU, Nom , Prenom , Connexion from utilisateur,amitie WHERE IDU = Utilisateur1 AND Etat = 'accepted' and Utilisateur2 = ".$id;
    
    
    $res1 = $con->query($req1);
    $res2 = $con->query($req2);
   
    
if ($res1->num_rows > 0) {
    // output data of each row
    while($rw = $res1->fetch_assoc()) {
        $amis[$j][0]= $rw["IDU"];
        $amis[$j][1]= $rw["Nom"]." ".$rw["Prenom"];
        $amis[$j][2]=$rw["Connexion"];
        
        $j+=1;
       /*echo $rw["IDU"].'&nbsp;&nbsp'.$rw["Nom"].'&nbsp;&nbsp'.$rw["Prenom"].'<br>';*/
    }
}

    
if ($res2->num_rows > 0) {
    // output data of each row
    while($rw = $res2->fetch_assoc()) {
        $amis[$j][0]= $rw["IDU"];
        $amis[$j][1]= $rw["Nom"]." ".$rw["Prenom"];
        $amis[$j][2]=$rw["Connexion"];
        
        $j+=1;
        
        
        /*echo $rw["IDU"].'&nbsp;&nbsp'.$rw["Nom"].'&nbsp;&nbsp'.$rw["Prenom"].'<br>';*/
         
    }
}
     for ($i=0;$i<$j;$i++)
     {
         if(strpos($amis[$i][2],"offline") !== false)
         {
    echo ' <div class="leftMain"><div id="leftmenu">
          
	  
	   <div class="content d-flex flex-column justify-content-between p-4">
                    
                    <div class="d-flex justify-content-between align-items-end pt-3">
                      <div class="text-uppercase">
						  
                        <div class="font-weight-bold d-block"><img src="img/profile/'.$amis[$i][0].'.jpg" alt="..." style="max-width: 3rem" class="rounded-circle mx-3 my-2 my-lg-0" >'.$amis[$i][1].' </div><small class="text-gray">online</small><span class="dot bg-green d-inline-block ml-3"></span>
                      </div>
                     
                    </div>
                  </div>
            
        </div>  
        </div>';
         }
     }
}
    
    friends($id);







    

        ?>


	