<?php include "db.php"; ?>
<?php session_start(); ?>

<?php 

if (isset($_POST['login'])){  //dobijanje podataka sa forme
$username= $_POST['username'];
$password=  $_POST['password'];
    
$username= mysqli_real_escape_string($connect,$username);   
$password =mysqli_real_escape_string($connect,$password);
    
$query = "SELECT * FROM korisnici WHERE username='$username'";
$select_user =mysqli_query($connect, $query);    
   if(!$select_user){
       
    die("ne radi");   
       
   } 
while($row =mysqli_fetch_assoc($select_user)){
    $db_user_id = $row['user_id'];
    $db_firstname = $row['firstname'];
    $db_lastname = $row['lastname'];
    $db_username = $row['username'];
    $db_password = $row['password'];
    $db_role = $row['role'];       
}    
 if($username!== $db_username && $password!==$db_password && $db_role!=='admin') {   //provjera da li se korisnik nalazi u bazi i da li je admin
    header("Location: index.php"); 
     
 }  else if($username== $db_username && $password==$db_password && $db_role=='admin') {
    
      $_SESSION['username']=$db_username;
      $_SESSION['firstname']=$db_firstname;  
      $_SESSION['lastname']=$db_lastname;    
      $_SESSION['role']=$db_role;  
     
     
     
     
 header("Location: admin/index.php");
        
     
 }else {

    header("Location: index.php");
 }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   

</head>

<body>
  <div class="col-md-4"> 

<div class="well">
<h4>Login</h4>
 <form action="login.php"  method="post">
<div class="form-group">
 <input name="username" type="text" class="form-control" placeholder="Enter Username">
                        
</div> 
<div class="input-group">
<input name="password" type="password" class="form-control" placeholder="Enter Password">
    <span class="input-group-btn">
         <button class="btn btn-primary" name="login" type="submit">Login</button> 
     </span>
 </div>
</form>
                    
 </div>
                
 </div>
   


</body>

</html>