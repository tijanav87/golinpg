
    <?php
                
    if(isset($_GET['delete']))   {        
    $id = $_GET['delete'];
    $query = "DELETE FROM sadrzaj WHERE id = $id";
    $delete_query = mysqli_query($connect, $query);
        header("Location: sadrzaj.php");
                }
    ?> 
    
    
    <?php               
$query = "SELECT * FROM sadrzaj";              //prikaz svih sastanaka     
$select_sadrzaj = mysqli_query($connect,$query);  
        ?> 
    
    
     <table class="table table-bordered table-hover" > 
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Section</th>
                    <th>Naslov</th>
                      <th>Datum</th>
                       <th>Sadržaj</th>
                       <th>Izmijeni</th>
                       <th>Obriši</th>
                </tr>
            </thead>           
            <tbody>
            
            
<?php
  while($row = mysqli_fetch_assoc( $select_sadrzaj)){   //prikaz sadrzaja u tabeli
   $id=  $row['id'];
   $section_id=  $row['id_sadrzaj_section'];
   $naslov=  $row['naslov'];
   $datum=  $row['datum'];
   $sadrzaj=  $row['sadrzaj'];
   echo "<tr style='width:200px'>";  
   echo "<td > {$id}</td>";
      
  $query = "SELECT * FROM menu WHERE menu_id = $section_id";                   
  $select_section_id = mysqli_query($connect,$query);                  
                
  while($row = mysqli_fetch_assoc( $select_section_id)){  //ucitavanje iz tabele MENU naziva section na osnovu spoljasnjeg kljuca
   $menu_id=  $row['menu_id'];
   $section=  $row['section']; 
echo "<td>{$section}</td>";  
  }
   echo "<td> {$naslov}</td>";
   echo "<td> {$datum}</td>";
   echo "<td > {$sadrzaj}</td>";
   echo "<td><a href='sadrzaj.php?source=izmijeni_sadrzaj&id={$id}'> Izmijeni</a></td>";
   echo "<td><a href='sadrzaj.php?delete={$id}'>Delete</a></td>";
    echo "</tr>";
 }   
        ?>            
<?php
        
    if(isset($_GET['izmijeni_sadrzaj'])){ //prosljedjivanje parametra na osnovu kog se zna o kom se sastanku radi
        
    $id = $_GET['izmijeni_sadrzaj'];
   // echo $id;    
    include "includes/izmijeni_sadrzaj.php";
        
    }    
        ?>  
               
            </tbody>
            
        </table>                   
                         
                    
                        
                  