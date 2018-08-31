
    <?php
                
    if(isset($_GET['delete']))   {    //brisanje slike u slucaju klika na dugme Obrisi    
    $id = $_GET['delete'];
    $query = "DELETE FROM slike WHERE id = $id";
    $delete_query = mysqli_query($connect, $query);
        header("Location: slike.php");
                }
    ?> 
    
    
    <?php               
$query = "SELECT * FROM slike";              //prikaz svih sastanaka     
$select_slike = mysqli_query($connect,$query);  
        ?> 
    
    
     <table class="table table-bordered table-hover" > 
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Section</th>
                    <th>Naslov</th>
                     <th>Slika</th>
                      <th>Naziv</th>
                       <th>Izmijeni</th>
                       <th>Obriši</th>
                </tr>
            </thead>           
            <tbody>
            
            
<?php
  while($row = mysqli_fetch_assoc( $select_slike)){  //prikaz tabele SLIKE sa mogucnoscu izmjene(promjene naslova, ili naziva slike) i brisanja
   $id=  $row['id'];
   $section_id=  $row['id_slika_section'];
   $naslov=  $row['naslov'];
   $naziv=  $row['naziv'];
   echo "<tr>";  
   echo "<td > {$id}</td>";
      
  $query = "SELECT * FROM menu WHERE menu_id = $section_id";                   
  $select_section_id = mysqli_query($connect,$query);                  
                
  while($row = mysqli_fetch_assoc( $select_section_id)){
   $menu_id=  $row['menu_id'];
   $section=  $row['section']; 
   echo "<td>{$section}</td>";  
  }      
   echo "<td> {$naslov}</td>";
   echo "<td><img width='100' img src='../images/$naziv' alt='slika'></td>";
   echo "<td> {$naziv}</td>";
   echo "<td><a href='slike.php?source=izmijeni_slike&id={$id}'> Izmijeni</a></td>";
   echo "<td><a href='slike.php?delete={$id}'>Delete</a></td>";
    echo "</tr>";
 }   
        ?>            
<?php
        
    if(isset($_GET['izmijeni_slike'])){ 
        
    $id = $_GET['izmijeni_slike'];
   // echo $id;    
    include "includes/izmijeni_slike.php";
        
    }    
        ?>  
               
            </tbody>
            
        </table>                   
                         
                    
                        
                  