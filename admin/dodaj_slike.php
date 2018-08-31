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
if (isset($_POST['dodaj_slike'])){
            $naslov = $_POST['naslov'];
            $section = $_POST['section'];
            $naziv  = $_POST['naziv'];
    
         $slika        = $_FILES['image']['name'];//za prebacivanje slike
         $slika_temp   = $_FILES['image']['tmp_name'];//za prebacivanje slike na privremenu lokaciju
   
          move_uploaded_file($slika_temp,"../images/$slika"); //upload slike
    
    
    
    $query = "INSERT INTO slike(id_slika_section, naslov, naziv) VALUES ($section,'$naslov','$naziv') ";
   
    $dodaj_sliku = mysqli_query($connect, $query);  
}


?>
    <form action="" method="post" enctype="multipart/form-data">    
     
     
      <div class="form-group">
         <label for="naslov">Naslov</label>
          <input type="text" class="form-control" name="naslov">
      </div>
      
           <div class="form-group">
      <select name="section" id="">
    <?php  
   $query = "SELECT * FROM menu ";    //prikaz vrijednoti iz tabele MENU               
   $select_menu = mysqli_query($connect,$query);        
   while($row = mysqli_fetch_assoc( $select_menu)){
   $menu_id=  $row['menu_id'];
   $section=  $row['section'];  
    echo "<option value='{$menu_id}'>$section</option>";   
     }
          ?>      
          
      </select>
      </div>
      
      <div class="form-group">
         <label for="slika">Slika</label>
          <input type="file"  name="image">
      </div>
      
      <div class="form-group">
         <label for="naziv">Naziv</label>
         <input type="text" class="form-control" name="naziv">
      </div>

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="dodaj_slike" value="Dodaj">
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