<?php include "includes/admin_header.php"   ?>


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
      <?php if(isset($_GET['source'])){
    $source = $_GET['source'];
    
} else{
    
$source ='';    
    
}
 switch ($source){  //na osnovu prosljedjenog parametra izvrsava se kod sa zadate stranice
     
case 'dodaj_slike';
include "includes/dodaj_slike.php";
break;
     
case 'izmijeni_slike';
include "includes/izmijeni_slike.php";
break;
     
     
     default:
     include "includes/sve_slike.php";
     break;
     
     
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