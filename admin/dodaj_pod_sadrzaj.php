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





<?php
if (isset($_POST['dodaj_pod_sadrzaj'])){  // upis podataka sa forme nakon klika na Dodaj
            $pod_naslov = $_POST['pod_naslov'];
            $pod_section = 4;
            $pod_sadrzaj  = $_POST['pod_sadrzaj'];
    
    
    $query = "INSERT INTO pod_sadrzaj(id_pod_sadrzaj_section, pod_naslov, pod_sadrzaj) VALUES ($pod_section,'$pod_naslov','$pod_sadrzaj') ";
   
    $dodaj_sadrzaj = mysqli_query($connect, $query);  
}


?>
    <form action="" method="post" enctype="multipart/form-data">    
     
     
      <div class="form-group">
         <label for="naslov">Naslov</label>
          <input type="text" class="form-control" name="pod_naslov">
      </div>

      
      <div class="form-group">
         <label for="post_content">Sadržaj</label>
         <textarea class="form-control "name="pod_sadrzaj" id="" cols="30" rows="10">
         </textarea>
      </div>

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="dodaj_pod_sadrzaj" value="Dodaj">
      </div>


</form>
     </div>   <!--Add category form-->
                                       
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php" ?>