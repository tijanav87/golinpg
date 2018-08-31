<?php include "includes/admin_header.php"   ?>
<?php ob_start(); ?>
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
                    <?php   if(isset($_GET['msg'])){ //ako je poslata poruka, vrsi se ispis
        $msg = "Uspješno ste promijenili lozinku!";
        echo $msg;
    }
                        
     ?>                   
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php" ?>