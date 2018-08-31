<?php
include "db.php";



function zakazivanje(){
 
if(isset($_POST["zakazi"])){ 
global $connect;    
    
$ime = $_POST['ime_prezime']; 
$firma = $_POST['firma'];
$mail = $_POST['email'];
$brojtelefona = $_POST['brojtelefona'];
$datum = $_POST['datum'];
$vrijeme = $_POST['vrijeme'];

  
$query = "INSERT INTO sastanci (ime_prezime,firma,email,brojtelefona,datum,vrijeme) VALUES ('$ime', '$firma','$mail','$brojtelefona','$datum','$vrijeme')";    
$result =  mysqli_query($connect, $query);
if (!$result){
    die ("FAILED" . mysqli_error());

}else{  //slanje maila administratoru
        
$send_mail_to="tijana.vujosevic87@gmail.com";    
$message= "Novi zahtijev za sasanak od " . $ime;  
$headers= "Od: " . $mail;   
  
mail($send_mail_to,"Sastanak GolinPG",$message,$headers);    
    
}
}  

}




?>