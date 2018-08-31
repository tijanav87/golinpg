<?php session_start(); ?>



// postavljanje vrijednosti na null kako bi se prekinula sesija
<?php

      $_SESSION['username']=null;  
      $_SESSION['firstname']=null;  
      $_SESSION['lastname']=null;    
      $_SESSION['role']=null;  

header ("Location: ../../index.php");  //redirekcija
?>