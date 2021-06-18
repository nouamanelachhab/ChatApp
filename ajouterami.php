<? php
  
    function ajouterami($id1 , $id2 ){

     include 'connectdb.php';
$non = "none";
    
    
    $req1 = "INSERT INTO `amitie` (`Utilisateur1`, `Utilisateur2`, `Etat`) VALUES ('".$id1."', '".$id2."', 'pending');";

   
    $res1 = $con->query($req1);
    
   
    
if ($res1) {
    // output data of each row
     echo '<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='.$non.';">&times;</span> 
  <strong>Ca marche!</strong></div>';
    }
}
?>