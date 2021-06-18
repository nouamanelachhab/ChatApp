 
	<?php
session_start();
$id = $_SESSION["id"];

function messages($id){

     include 'connectdb.php';

    
   
    $msg;
    static $j=0;
    static $class1;
    static $class2;
    $id1 = 5;
    $id2 = 3;
    $req1 = "SELECT IdM , contenu , Time ,IdU1,Date from messages  WHERE IdU1 = ".$id1." AND IdU2 = ".$id2."
";

     $req2 = "SELECT IdM , contenu , Time ,IdU1,Date from messages  WHERE IdU1 = ".$id2." AND IdU2 = ".$id1."
";
    
    
    $res1 = $con->query($req1);
    $res2 = $con->query($req2);
   
    
if ($res1->num_rows > 0) {
    // output data of each row
    while($rw = $res1->fetch_assoc()) {
        $msg[$j][0]= $rw["IdM"];
        $msg[$j][1]= $rw["contenu"];
        $msg[$j][2]= $rw["Time"];
        $msg[$j][3]= $rw["IdU1"];
        $msg[$j][4]= $rw["Date"];
        
        
        $j+=1;
       /*echo $rw["IDU"].'&nbsp;&nbsp'.$rw["Nom"].'&nbsp;&nbsp'.$rw["Prenom"].'<br>';*/
    }
}

    
if ($res2->num_rows > 0) {
    // output data of each row
    while($rw = $res2->fetch_assoc()) {
       $msg[$j][0]= $rw["IdM"];
        $msg[$j][1]= $rw["contenu"];
         $msg[$j][2]= $rw["Time"];
         $msg[$j][3]= $rw["IdU1"];
        $msg[$j][4]= $rw["Date"];
        
        $j+=1;
        
        
        /*echo $rw["IDU"].'&nbsp;&nbsp'.$rw["Nom"].'&nbsp;&nbsp'.$rw["Prenom"].'<br>';*/
         
    }
}
    
    /*on tri les messages par id qui sont deja classes par date*/
           for ($v = 0 ; $v<$j ; $v++)
{
  for ($k = 0 ; $k>$j-1 ; $k++)
{
 if($msg [$k][0] >$msg [$k+1][0] )
  {
    $vara = $msg [$k][0] ;
    $varb = $msg [$k][1] ;
    $varc = $msg [$k][2] ;
    $vard = $msg [$k][3] ;
    $vare = $msg [$k][4] ;
     
    $msg [$k][0] = $msg [$k+1][0]  ;
    $msg [$k][1] = $msg [$k+1][1]  ;
    $msg [$k][2] = $msg [$k+1][2]  ;
    $msg [$k][3] = $msg [$k+1][3]  ;
    $msg [$k][4] = $msg [$k+1][4]  ;
     
    $msg [$k+1][0] = $vara ;
    $msg [$k+1][1] = $varb ;
    $msg [$k+1][2] = $varc ;
    $msg [$k+1][3] = $vard ;
    $msg [$k+1][4] = $vard ;
    
     
    
  }
    } 
}
    
    /* Insertion des blocs de messages */
    
    for ($i = 0 ; $i<$j ; $i++)
    {
    
        
       
          if($msg[$i][3] == $id1)
        {
       echo '

          
          
            <div class="incoming_msg">
              
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>'.$msg[$i][1].'</p>
                   <span class="time_date"> '.$msg[$i][2].'    |    '.$msg[$i][4].'</span></div>
              </div>
            </div>';
        }
      else  
        {
        echo '

          
          
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>'.$msg[$i][1].'</p>
                <span class="time_date"> '.$msg[$i][2].'    |    '.$msg[$i][4].'</span> </div>
            </div>
            
          
           
         
         ';
        }
    
    }
    
    
}

 messages($id);
    
   







    

        ?>


	