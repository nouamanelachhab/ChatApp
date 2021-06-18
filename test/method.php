<?php
 try{
	@$con=mysqli_connect('localhost','root','','users');
	if(!$con) throw new Exception('Erreur de Connexion : '.mysqli_connect_error(),1);
}
catch(Exception $e){
	die($e->getMessage());
}


 $id = 8;
    $amis;
    static $j=0;

      $req1 = " SELECT IDU, Nom , Prenom , Connexion from utilisateur,amitie WHERE IDU = Utilisateur2 AND Etat = 'accepted' and Utilisateur1 = 
".$id;

 $res1 = $con->query($req1);
if ($res1->num_rows > 0) {
    // output data of each row
    while($rw = $res1->fetch_assoc()) {
        $amis[$j][0]= $rw["IDU"];
        $amis[$j][1]= $rw["Nom"]." ".$rw["Prenom"];
        $amis[$j][2]=$rw["Connexion"];
        
        $j+=1;
        echo $rw["IDU"].'&nbsp;&nbsp'.$rw["Nom"].'&nbsp;&nbsp'.$rw["Prenom"].'<br>';
    }
}


?>