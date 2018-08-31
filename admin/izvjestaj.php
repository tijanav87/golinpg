<script language="javascript" type="text/javascript">   //skripta za stampu izmedju div tagova 
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>



<?php include "includes/admin_header.php"   ?>

    <div id="wrapper" >

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
    
      <form action="" method="post">
    <div class="form-group">
    <label for="izvjestaj">Izaberite datum za prikaz izvještaja</label><br/>
    <label for="izvjestaj">Od</label>
    <input class="form-control" type="date" name="datum1" style='width:10em'>   
    <br/>
    <label for="izvjestaj">Do</label>  
    <input class="form-control" type="date" name="datum2" style='width:10em'>        
    </div>  
       <div class="form-group">
    <input class="btn btn-primary" type="submit" name="submit" title="Filtriraj">     
        
    </div>
      
  </form>
    
    
    <?php  
if(isset($_POST['submit']))  {
$datum1 = $_POST['datum1'];
$datum2 = $_POST['datum2'];
$query = "SELECT * FROM sastanci WHERE datum BETWEEN '$datum1' and '$datum2'";     //upit kojim uporedjujemo unesene datume sa onim u tabeli              
$select_sastanci = mysqli_query($connect,$query);  
        ?> 
    
  <div id="printablediv" >  <!--Dio koji ce biti odstampan-->
     <table class="table table-bordered table-hover"> 
            <thead> <!-- zaglavlje tabele -->
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
            
    </div>        
<?php
  while($row = mysqli_fetch_assoc( $select_sastanci)){  //tabelarni prikaz sastanaka iz tabele na osnovu izvrsenog upita 
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
    echo "</tr>";
 } }  
        ?>            
 
               
            </tbody>
            
        </table>                   
                         
                           </div>                                   
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

 <input class="btn btn-primary" type="button" value="Štampa izvještaja" onclick="javascript:printDiv('printablediv')" />
       
    </div>
  
    
       
       
 
    </div> 

        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php" ?>