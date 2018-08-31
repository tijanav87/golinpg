<div id="openModal" class="modalDialog" >
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<img class="standard" src="images/Logo.png" alt="GolinPG" style="height:90px">
		<p style="font-weight:bold">Zakažite sastanak sa nekim od naših poslodavaca</p>
		
		 <form action="index.php" method="post"  class="wpcf7-form">
        
        <div>
            <input type="text" name="ime_prezime" onfocus="this.value=''" class="form-control" value="Ime i prezime" style="text-align: center;border-radius: 6px;margin-bottom:20px;width:400px;height:40px" required>
            
        </div>
         <div class="form-group">
            <input type="text" name="firma" onfocus="this.value=''" class="form-control" value="Firma" style="text-align: center;border-radius: 6px;6px;margin-bottom:20px;width:400px;height:40px" required>
            
        </div>
     
         <div class="form-group">
            <input type="email" name="email" onfocus="this.value=''" class="form-control" value="e-Mail" style="text-align: center;border-radius: 6px;6px;margin-bottom:20px;width:400px;height:40px" required>
            
        </div>
        
         <div class="form-group">
            <input type="text" name="brojtelefona" onfocus="this.value=''" class="form-control" value="Broj telefona" style="text-align: center;border-radius: 6px;6px;margin-bottom:20px;width:400px;height:40px" required>
            
        </div>
        
         <div class="form-group">
            <input type="date" name="datum" onfocus="this.value=''" class="form-control" value="mm/dd/yy" style="text-align: center;border-radius: 6px;6px;margin-bottom:20px;width:170px;height:40px;margin-right:50px;">
            <input type="time" name="vrijeme" onfocus="this.value=''" class="form-control" value="10:00h" style="text-align: center;border-radius: 6px;6px;margin-bottom:20px;width:170px;height:40px" required>
            
        </div>
        <div class="form-field submit-field">
       <br/>
        <input class="wpcf7-form-control wpcf7-submit gol-button" type="submit" name="zakazi" value="Zakaži sastanak" style="background-color:#ffc627; color:black;border-radius: 6px;">
             </div>
     </form>
     
        
		<p></p>
	</div>
</div>