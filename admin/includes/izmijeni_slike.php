<?php
if(isset($_GET['id'])){
$id= $_GET['id'];   
    
}
$query = "SELECT * FROM slike WHERE id=$id";                   
$select_slike = mysqli_query($connect,$query);              
                
while($row = mysqli_fetch_assoc( $select_slike)){
$id=  $row['id'];
$id_slika_section=  $row['id_slika_section'];
$naslov=  $row['naslov'];
$naziv=  $row['naziv'];

}

if (isset($_POST['izmijeni_slike'])){  //promjena vrijednosti u tabeli na osnovu unesenih podataka sa forme
$naslov=  $_POST['naslov'];
$id_slike_section=  $_POST['section'];
$naziv=  $_POST['naziv'];

$query = "UPDATE slike SET naslov='$naslov' , naziv= '$naziv', id_slika_section = $id_slika_section WHERE id=$id";
$update_sadrzaj = mysqli_query($connect,$query);
header ("Location: ./slike.php");            
}
?>
      
    <form action="" method="post" enctype="multipart/form-data">    
      <div class="form-group">
         <label for="naslov">Naslov</label>
          <input type="text" class="form-control" name="naslov" value="<?php echo $naslov;?>">
      </div>

         <div class="form-group">
      <select name="section" id="">
    <?php  
   $query = "SELECT * FROM menu ";                   
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
         <label for="naslov">Naziv</label>
          <input type="text" class="form-control" name="naziv" value="<?php echo $naziv;?>">
      </div>

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="izmijeni_slike" value="Izmijeni sliku">
      </div>


</form>
    