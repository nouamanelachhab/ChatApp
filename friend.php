<?php
    function ajouterami($id1 , $id2 ){

     include 'connectdb.php';
$non = "none";
    
    
    $req1 = "INSERT INTO `amitie` (`Utilisateur1`, `Utilisateur2`, `Etat`) VALUES ('".$id1."', '".$id2."', 'pending');";

   
    $res1 = $con->query($req1);
    
   
    

}


?>
<?php



// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    
    $databaseName = "users";
    
    // get values form input text and number
    $insert = $_POST['insert'];
   
    

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data
    
   
    $id2 = $_POST['insert'];
    ajouterami( 5, $id2 );
        

  
    
    
}


?>

