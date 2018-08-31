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
                            <small></small>
                        </h1>
    <!--Add category form-->
    <div class="col-xs-6">  
    
    <?php               
$query = "SELECT * FROM sastanci";              //prikaz svih sastanaka     
$select_sastanci = mysqli_query($connect,$query);  
        ?> 
    
    
     <table class="table table-bordered table-hover"> 
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Ime i prezime</th>
                    <th>Firma</th>
                    <th>e-mail</th>
                     <th>Broj telefona</th>
                      <th>Datum</th>
                       <th>Vrijeme</th>
                       <th>Status</th>
                </tr>
            </thead>           
            <tbody>
            
            
<?php
  while($row = mysqli_fetch_assoc( $select_sastanci)){
   $id=  $row['id'];
   $sastanak_ime=  $row['ime_prezime'];
   $sastanak_firma=  $row['firma'];
   $sastanak_mail=  $row['email'];
   $sastanak_broj_tel=  $row['brojtelefona'];
   $sastanak_datum=  $row['datum'];
   $sastanak_vrijeme=  $row['vrijeme'];
   $sastanak_status=  $row['status'];
   echo "<tr>";  
   echo "<td> {$id}</td>";
   echo "<td> {$sastanak_ime}</td>";
   echo "<td> {$sastanak_firma}</td>";
   echo "<td> {$sastanak_mail}</td>";
   echo "<td> {$sastanak_broj_tel}</td>";
   echo "<td> {$sastanak_datum}</td>";
   echo "<td> {$sastanak_vrijeme}</td>";
   echo "<td> {$sastanak_status}</td>";
   echo "<td><a href='sastanci.php?edit={$id}'> Status</a></td>";
    echo "</tr>";
 }   
        ?>            
<?php
        
    if(isset($_GET['edit'])){ //prosljedjivanje parametra na osnovu kog se zna o kom se sastanku radi
        
    $id = $_GET['edit'];
   // echo $id;    
    include "includes/update_status.php";
        
    }    
        ?>  
               
            </tbody>
            
        </table>                   
                         
                           </div>                                   
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php" ?>