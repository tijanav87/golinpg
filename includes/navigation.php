





<nav id="main-menu" class="main-menu">
<ul id="menu-main-menu" class="nav-menu">
<?php

$query="SELECT * FROM menu";
$select_menu=mysqli_query($connect, $query);
while($row = mysqli_fetch_assoc($select_menu)){
    $menu_id=$row['menu_id'];
    $menu_item=$row['menu_item'];
    $menu_section=$row['section'];
    echo "<li id='menu-item-20 class='menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-7 current_page_item menu-item-20'><a href='#$menu_section'>$menu_item</a></li>";
}?>
<li id="menu-item-1166" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1166"><a href="login.php">Login</a></li>
   
</ul></nav>
			</hgroup><!-- .header-container -->

		</header><!-- .header -->