<?php
###########################################################################################
			#	  ###		 #	  #  #######  #       #     #
			#	 #   #		 #	  #  #		  #        #   #
			#	#     # 	 ######  #######  #	        ###
			#	#	  #		 #	  #  #		  #	         #
			#	 #	 #		 #	  #	 #		  #	    	 #
			#	  ###   #    #	  #	 #######  ######	 #     
############################################################################################			
			
			
			?>
<html>
<head>
<title>ötödik a tizedik olimpia</title>
	<meta http-equiv="Content-Type" content="text/html; "charset = 'utf-8'>
	<link rel="stylesheet" type="text/css" href="style.css" media="all"/>
</head>

<body>
	<!-- banner .... ......................................................................................................................... -->
	<div class = "banner">
		<a href= 'index.php'><img class='img' src='banner.jpg'></a>
	</div>
	<!-- banner vége........................................................................................................................... -->	
	<!-- menu .................................................................................................................................. -->
	<div class="menu">		
		<a class="link" href="index.php">	<div class = 'menu-pont'  >Home </div>	</a>
		<a class="link" href="index.php?menu=faq">	<div class = 'menu-pont'  >	FAQ	</div>	</a>
		<a class="link" href="index.php?menu=hamburger">	<div class = 'menu-pont'  >	Hamburgerek	</div></a>
		<a class="link" href="index.php?menu=kosar"> 	<div class = 'menu-pont'  >	Kosár	</div></a>
		<a class="link" href="index.php?menu=contact">	 <div class = 'menu-pont'  >Kapcsolat	</div></a>		
	</div>
	<!-- Menu vege ..........................................................................................................................-->
	<!--Main div.....................................................................................................................-->
	<div class="tartalom">
		<?php 
			if(isset($_GET['menu'])){
				if($_GET['menu'] == 'faq'){
					include "faq.php";
				}
				else if($_GET['menu'] == 'hamburger'){
					include "hamburger.php";
				}
				else if($_GET['menu'] == 'kosar'){
					include "kosar.php";
				}
				else if($_GET['menu'] == 'contact'	){
					include 'contact.php';
				}
			}else{
				echo "<h1 style= 'text-align: center'>olimpia</h1>
					<h3 style = 'text-align: center'> 10. hely</h3>
				
				";
			}
		?>		
	</div>	
	<!-- Main div vege .....................................................................................................................................-->
</body>

<html>