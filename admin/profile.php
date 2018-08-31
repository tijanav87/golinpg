<?php include "includes/admin_header.php"   ?>
              <?php

if(isset($_SESSION['username'])){   //dobijanje podataka o korisniku na osnovu sesije
$username=$_SESSION['username'];

}

?>  
<?php
if(isset($_POST['update_profile'])){  //promjena lozinke

$password1=  $_POST['password1']; 
$password2=  $_POST['password2']; 
    
if($password1 == $password2  ){   
    
$query = "UPDATE korisnici SET password   = '{$password1}' WHERE username= '$username' ";
          
$update_user = mysqli_query($connect,$query);  
 header("Location: index.php?msg");    //prosljedjivanje poruke prilikom redirekcije
}else {
 header("Location: profile.php?msg");   //prosljedjivanje poruke prilikom redirekcije 
       
}
}


?>
   
              
   
   
    
    <div id="wrapper">

        <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small><?php echo $_SESSION['username'];?>    </small>
                        </h1>
           <form action="" method="post" enctype="multipart/form-data">    
     
               <h1>Promjena lozinke</h1>
     
 <div class="form-group">
         <label for="post_tags">Unesite novu lozinku</label>
          <input type="password" value="" class="form-control" name="password1">
      </div>
    <div class="form-group">
         <label for="post_tags">Ponovite lozinku</label>
          <input type="password" value="" class="form-control" name="password2">
      </div>  
      
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="update_profile" value="Update">
      </div>


</form>            
      <?php   
if(isset($_GET['msg'])){   //ispis poruke na osnovu proslijedjenog parametra, tj ako je proslijedjen
$msg = "<h1>Lozinke nijesu identične!</h1>";
echo $msg;
    }
                        
     ?>                                                                    
    </div>   <!--Add category form-->
                                       
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php" ?>