 <form action="" method="post">
    <div class="form-group">
    <label for="status">Status</label>
    <?php
    
        if(isset($_GET['edit'])){
        $id = $_GET['edit'];  
        
   $query = "SELECT * FROM sastanci WHERE id = $id";    //na osnovu id-ja sastanka, dobija se status tog sastanka iz baze                
  $select_sastanci = mysqli_query($connect,$query);                        
while($row = mysqli_fetch_assoc( $select_sastanci)){
$id=  $row['id'];
$status=  $row['status']; 

?> 
  
<select name="status"> <!-- opcije koje se mogu dodijeliti sastanku-->
  <option value="Odobren">Odobren</option>
  <option value="Odbijen">Odbijen</option>
  <option value="Na čekanju">Na čekanju</option>
  
</select>
   
<?php 



}
        }  ?>
        
        
  <?php //update statusa sastanka
if(isset($_POST['update_status']))  {
 $status = $_POST['status'];
$query = "UPDATE sastanci SET status='{$status}'WHERE id={$id};" ;   
$update_query = mysqli_query($connect, $query); 
    
    
    
 //podaci za mail. Dobijanje mail adrese za odgovarajuci id za koji se radi promjena statusa sastanka.
//Na mail adresu se salje mail o promjeni statusa sastanka 
    
/*    
$query_mail="SELECT email FROM sastanci WHERE id={$id};" ;
$select_mail = mysqli_query($connect, $query_mail);
$send_mail_row = mysqli_fetch_assoc( $select_mail);  
$send_mail_to=$send_mail_row['email'];    
$message= "Vaš sastanak sa agentom GolinPG je " . $status;  
$headers= "From: GolinPG";   
  */  
    
   if(!$update_query){
       die("ne radi");
       
   } /*if(mail($send_mail_to,"Sastanak GolinPG",$message,$headers))
{
echo "Korisnik obaviješten";*/
         header("Location: sastanci.php"); 
// }
    
    
    
    
}              
                ?>
</div>  
       <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_status" title="Update Status">     
        
    </div>
      
  </form>                           
                              