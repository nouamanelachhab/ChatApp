
	<?php
   
function matchingarray($id) {
     include 'connectdb.php';

    
   

      $res = mysqli_query($con,"SELECT Interets FROM `utilisateur` where IDU= ".$id);
    $interet = mysqli_fetch_array($res);
    
$userslist;
   

   $arr = explode('/', $interet[0]);
  
   
  /*  for ($i=0;$i<sizeof($arr);$i++)
    {
     echo "<h1>".$arr[$i]."</h1>";
    if ($i <sizeof($arr)-1)
        $query.="'%".$arr[$i]."%' or interets like ";
    else
        $query.="'%".$arr[$i]."%'";
    }*/






  /*$queryres = mysqli_query($con,"SELECT id FROM `user` where interets like ".$query."and id != '".$id."'");
  $res =  mysqli_fetch_array($queryres);

for ($i=0;$i<sizeof($res);$i++)
    {
     echo "<h2>".$res[$i]."</h2>";
    
    }*/

$n=0;
$narray;
$sql = "SELECT * FROM `utilisateur` where IDU not like ' ".$id."'";
$resultat = $con->query($sql);
static $j=0;

 for ($i=0;$i<sizeof($arr);$i++)
    {
    
  
    }


if ($resultat->num_rows > 0) {
    // output data of each row
    while($rw = $resultat->fetch_assoc()) {
        $n =0;
        
        /*echo "id: " . $rw["id"]. " - interets: " . $rw["interets"]. " " . "<br>";*/
      
           for ($i=0;$i<sizeof($arr);$i++)
    {
    
    
    if (strpos($rw["Interets"], $arr[$i]) !== false) {
 
        $n+=1;
        
}
    
    } 
     
        $narray [$j][0] = $rw["IDU"];
        $narray [$j][1] = $rw["Nom"]."&nbsp".$rw["Prenom"];
        $narray [$j][2] = $rw["Interets"];
        $narray [$j][3] = $n;
         $narray [$j][4] = round($n/sizeof($arr)*100);
        
        $j+=1;
        
        

    }
} else {
    echo "0 results";
}







    
    
    for ($v = 0 ; $v<$j ; $v++)
{
  for ($k = 0 ; $k<$j-1 ; $k++)
{
 if($narray [$k][4] <$narray [$k+1][4] )
  {
    $vara = $narray [$k][0] ;
    $varb = $narray [$k][1] ;
    $varc = $narray [$k][2] ;
    $vard = $narray [$k][3] ;
    $vare = $narray [$k][4] ;
     
    $narray [$k][0] = $narray [$k+1][0]  ;
    $narray [$k][1] = $narray [$k+1][1]  ;
    $narray [$k][2] = $narray [$k+1][2] ;
    $narray [$k][3] = $narray [$k+1][3] ;
    $narray [$k][4] = $narray [$k+1][4] ;
     
    $narray [$k+1][0] = $vara;
    $narray [$k+1][1] = $varb;
    $narray [$k+1][2] = $varc;
    $narray [$k+1][3] = $vard;
    $narray [$k+1][4] = $vare;
     
    
  }
    } 
}
    
    

 return $narray;

$con->close();
}


        ?>

	