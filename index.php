<?php 

include "db.php";
include "zakazivanje.php";
zakazivanje();

?>
<?php ob_start(); ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

		<section class="content" id='event_management'>

<div class="content-container">
<div class="row home-introduction row-extra-padding-80 impact-block bg-video" id="row--1" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target="#row--1">
<div class="row" id="row--2"><div class="container entry-content">
<?php   
    $query = "SELECT * FROM sadrzaj WHERE id_sadrzaj_section=2"; //ispis sadrzaja iz baze na osnovu id
    $select_sadrzaj=mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($select_sadrzaj);    
    $naslov = $row['naslov'];
    $sadrzaj = $row['sadrzaj']."\n";
echo "<h3 style='text-align: left; color:black;margin-left:200px'>$naslov</h3>";
 echo "<p style='text-align: left; color:black;margin-left:200px'> $sadrzaj</p>" ;  
    ?>


<div role="form" class="wpcf7" id="wpcf7-f2104-o1" lang="en-US" dir="ltr">
<form action="" method="post" class="wpcf7-form" novalidate="novalidate">
<div class="form-field submit-field"><a class="wpcf7-form-control wpcf7-submit gol-button" href="#openModal" style="border-radius: 6px;"> Zakažite sastanak</a>
</div>
</form>
</div>
</div>
</div>

<?php include "includes/popup.php" ?>
 

	</section><!-- .content -->
		</div>
            <section id='pr_and_comunication'>
	<div class="content-container2" >	
	<div class="row home-introduction row-extra-padding-80 impact-block bg-video" id="row--1" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target="#row--1">
<div class="row" id="row--2"><div class="container entry-content" style="height:400px">

<?php   
    $query = "SELECT * FROM sadrzaj WHERE id_sadrzaj_section=1";    //ispis sadrzaja iz baze na osnovu id
    $select_sadrzaj=mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($select_sadrzaj);    
    $naslov = $row['naslov'];
    $sadrzaj = $row['sadrzaj'];
echo "<h3 style='text-align: left; color:black; margin-left:200px;margin-top:-50px'>$naslov</h3>";
echo "<p style='text-align: left; color:black;margin-left:200px;max-width: 380px;'>" .  nl2br( $sadrzaj) . "</p>" ."</br></br>";

    ?>



<div role="form" class="wpcf7" id="wpcf7-f2104-o1" lang="en-US" dir="ltr">

</div> 
</div>
</div>
	
		<!-- .content -->
		</div>	
		</div>
</section>		
		
		
		<section id="clients">
		
<!-- .row -->
<div class="row row-shade" id="row--5"><div class="content-container3">
<?php   
    $query = "SELECT * FROM sadrzaj WHERE id_sadrzaj_section=3";    //ispis sadrzaja iz baze na osnovu id
    $select_sadrzaj=mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($select_sadrzaj);    
    $naslov = $row['naslov'];
echo "<h2 style='color:#ffc627'>$naslov</h2>";
 
    ?>
    
    
<ul class="team-members">
<?php   
    $query = "SELECT * FROM slike WHERE id_slika_section=3";   //ispis slika iz baze na osnovu id
    $select_sadrzaj=mysqli_query($connect, $query);
   while ( $row = mysqli_fetch_assoc($select_sadrzaj)){
$slika = $row['naziv'];
echo "<li class='hover-animate'><a href='images/$slika' title=''><img src='images/$slika' class='main-image' width='200' height='200'></a></li>";
   
   }
 
    ?>
    
</ul></div><!-- .container --></div>
<!-- .row -->
</section>

<section class="content1" id="about_us">

			<div class="content-container3">
<div class="row row-shade" id="row--1"><div class="container entry-content">
<p style="color: #000000; text-align: center;"><img class="alignnone size-full wp-image-47" src="http://golin.com/wp-content/uploads/2014/06/go-all-in-sm.png" alt="go-all-in-sm" width="220" height="39" /></p>
<?php   
    $query = "SELECT * FROM sadrzaj WHERE id_sadrzaj_section=4";   //ispis sadrzaja iz baze na osnovu id
    $select_sadrzaj=mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($select_sadrzaj);    
    $naslov = $row['naslov'];
    $sadrzaj =$row['sadrzaj'];
    echo "<h4 style='text-align: center;'>$naslov</h4>";
    echo "<p align='center'>$sadrzaj</p>";
    ?>


<p align="center"><a href="" target="_self" class="gol-button">Find Out How</a></p>

<!-- .row -->



<div class="row" id="row--1" >
<div class="container entry-content" >
<div class="feature-row equalise-height feature-shade">

<?php   
    $query = "SELECT * FROM pod_sadrzaj WHERE id_pod_sadrzaj_section=4";  //ispis sadrzaja iz baze na osnovu id, i brojacem manjim od 4 jer posljednja kolona ima drugacije osobine
    $select_pod_sadrzaj=mysqli_query($connect, $query); 
     $counter = 1;

    while ($row = mysqli_fetch_assoc($select_pod_sadrzaj)){
    $pod_naslov = $row['pod_naslov'];
    $pod_sadrzaj =$row['pod_sadrzaj'];
    $id =$row['id'];
           
        
 if ($counter<4){      
echo "<p style='text-align: center;'><div class='content-column one_fourth'>";
echo "<p style='text-align: center;'><img class='aligncenter wp-image-904' src='images/krug1.png' /></p>";
echo "<p style='text-align: center;'><strong>$pod_naslov</strong><br />$pod_sadrzaj</p>";
echo "<p style='text-align: center;'></p>";
echo "<p style='text-align: center;'></div></p>"; 
  $counter ++;   
 }else if ($count=4){
     
echo "<p style='text-align: center;'><div class='content-column one_fourth last_column'>";
echo "<p style='text-align: center;'><img class='aligncenter wp-image-904' src='images/krug1.png' /></p>";
echo "<p style='text-align: center;'><strong>$pod_naslov</strong><br />$pod_sadrzaj</p>";
echo "<p style='text-align: center;'></p>";
echo "<p style='text-align: center;'></div><div class='clear_column'></div></p>";    
  $counter =1;   
 }
        
 
    } 
 
    ?>


</div></div></div>
</section >




<section class="content" id="offices">

			<div class="content-container4">
<!-- .row --><div class="row row-shade" id="row--3">

<div class="container">
<h2>OFFICES</h2>
<hgroup class="header-container container">
 <a href="index.html" style="padding-left:380px;padding-right:20px;font-family:Montserrat, Arial,sans-serif;font-weight:800;line-height:1.4;text-transform:uppercase;font-size:24px;" >EMEA</a>
 <a href="index.html" style="padding-right:20px;font-family:Montserrat, Arial,sans-serif;font-weight:800;line-height:1.4;text-transform:uppercase;font-size:24px;">AMERICAS</a>
 <a href="index.html" style="padding-right:20px;font-family:Montserrat, Arial,sans-serif;font-weight:800;line-height:1.4;text-transform:uppercase;font-size:24px;">ASIA</a>
</hgroup> 


<ul class="contact-offices">

<?php   
    $query = "SELECT * FROM slike WHERE id_slika_section=5";    //ispis sadrzaja iz baze na osnovu id
    $select_slike=mysqli_query($connect, $query);
       
    
    while ($row = mysqli_fetch_assoc($select_slike)){
    $naslov = $row['naslov'];
    $naziv =$row['naziv'];
        
echo "<li class='hover-animate'>";
echo "<a href='' title=$naslov>";
echo "<img src='images/$naziv' class='main-image'>";
echo "<img src='images/$naziv' class='hover-image' style='display:none;'>";
echo "<div class='office_details'><span class='office_title_bold'>$naslov</span></div></a></li>";
    
    }
    
    ?>


</ul></div>
			</div><!-- .content-container -->

<!--		</section><!-- .content -->

<!-- .row -->
			</div><!-- .content-container -->

		</section><!-- .content -->

		<section id="contact">
			<div id="promo" class="promo">
					<h3 style="color:black;margin-left:550px;">CONTACT</h3>
<p style="color:black;margin-left:550px">Bulevar Svetog Petra Cetinjskog 56</p>
<p style="color:black;margin-left:550px">81000 Podgorica</p>
<p style="color:black;margin-left:550px"></p>
<p style="color:black;margin-left:550px"></p>
<br/>
<p style="color:black;margin-left:550px">+ 382 223 240</p>
<br/>
<p style="color:black;margin-left:550px">info@amplitudo.me</p>				
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2944.25430619066!2d19.24766031552742!3d42.4436049791814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134deb305185d703%3A0x3864f3a9972de2d4!2sAmplitudo+DOO!5e0!3m2!1ssr!2s!4v1535124722069" width="400" height="300" frameborder="0" style="border:0; margin-left:-600px;margin-top:-180px;" allowfullscreen></iframe>
	
			</div>

</section>		
	<?php include "includes/footer.php"?>		