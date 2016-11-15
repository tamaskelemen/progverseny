<?php
###########################################################################################
			#	  ###		 #	  #  #######  #       #     #
			#	 #   #		 #	  #  #		  #        #   #
			#	#     # 	 ######  #######  #	        ###
			#	#	  #		 #	  #  #		  #	         #
			#	 #	 #		 #	  #	 #		  #	    	 #
			#	  ###   #    #	  #	 #######  ######	 #     
############################################################################################			
			
include_once 'dbcon.php';			
			?>
<html>
<head>
<title>ötödik a tizedik olimpia</title>
	<meta http-equiv="Content-Type" content="text/html; "charset = 'utf-8'>
	<link rel="stylesheet" type="text/css" href="style.css" media="all"/>
</head>

<body background='back.jpg' style='width: 100%';>
	<!-- banner .... ......................................................................................................................... -->
	<div class = "banner">
		<a href= 'index.php'><img class='img' src='banner.jpg'></a>
	</div>
	<!-- banner vége........................................................................................................................... -->	
	<!-- menu .................................................................................................................................. -->
	<div class="menu">		
		<a class="link" href="index.php">	<div class = 'menu-pont'  >Home </div>	</a>
		<a class="link" href="index.php?menu=faq">	<div class = 'menu-pont'  >	FAQ	</div>	</a>
		<a class="link" href="index.php?menu=users">	<div class = 'menu-pont'  >	users	</div></a>
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
				else if($_GET['menu'] == 'users'){
					include "users.php";
				}
				else if($_GET['menu'] == 'kosar'){
					include "kosar.php";
				}
				else if($_GET['menu'] == 'contact'	){
					include 'home.php';
				}
			}else{
				include "home.php";
				
				
			}
		?>		
	</div>	
	<!-- Main div vege .....................................................................................................................................-->
</body>

<html>