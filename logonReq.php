 
	<?php
   
function friends(){

     include 'connectdb.php';

    
    $id = 5;
    $amis;
    static $j=0;
    
    $req1 = "SELECT IDU, Nom , Prenom , Connexion from utilisateur,amitie WHERE IDU = Utilisateur2 AND Etat = 'pending' and Utilisateur1 = ".$id;

    $req2 = " SELECT IDU, Nom , Prenom from utilisateur,amitie WHERE IDU = Utilisateur1 AND Etat = 'pending' and Utilisateur2 = ".$id;
    
    
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
}

    friends();



        ?>


	