
   <?php

   
   $connect = mysqli_connect('localhost', 'root', '', 'golinpg') ; //server, username. password, naziv baze
    
    if(!$connect){
        die("not connected");           
    }


?>