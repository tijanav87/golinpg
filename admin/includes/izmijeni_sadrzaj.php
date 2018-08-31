<?php
if(isset($_GET['id'])){
$id= $_GET['id'];   
    
}
$query = "SELECT * FROM sadrzaj WHERE id=$id";           //prikaz podataka na osnovu id        
$select_sadrzaj = mysqli_query($connect,$query);              
                
while($row = mysqli_fetch_assoc( $select_sadrzaj)){
$id=  $row['id'];
$id_sadrzaj_section=  $row['id_sadrzaj_section'];
$naslov=  $row['naslov'];
$sadrzaj=  $row['sadrzaj'];
$datum=  $row['datum'];
}

if (isset($_POST['izmijeni_sadrzaj'])){ //promjena vrijednosti u tabeli na osnovu unesenih podataka sa forme
$naslov=  $_POST['naslov'];
$id_sadrzaj_section=  $_POST['section'];
$sadrzaj=  $_POST['sadrzaj'];

$query = "UPDATE sadrzaj SET naslov='$naslov' , sadrzaj= '$sadrzaj', id_sadrzaj_section = $id_sadrzaj_section WHERE id=$id";
$update_sadrzaj = mysqli_query($connect,$query);
header ("Location: ./sadrzaj.php");     //preusmjeravanje na stranicu sa tabelom kako bi se uocila promjena       
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
         <label for="sadrzaj">Sadržaj</label>
         <textarea class="form-control "name="sadrzaj" id="" cols="30" rows="10"><?php echo $sadrzaj;?>
        
         </textarea>
      </div>

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="izmijeni_sadrzaj" value="Izmijeni sadrzaj">
      </div>


</form>
    