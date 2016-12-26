<script type="text/javascript">

	document.body.style.backgroundColor = "#dedede";
	
	$(document).ready(function(){
		$("#push-menu-msg").click(function(){
			$("#push-menu-msg-layer").slideToggle();
			$("#push-menu-msg i.fa-angle-right").toggleClass("rotate-arrow-45");
		});

		$("#push-menu-user").click(function(){
			$("#push-menu-user-layer").slideToggle();
			$("#push-menu-user i.fa-angle-right").toggleClass("rotate-arrow-45");
		});

		$("nav i").click(function(){
			$(".canvass-sidebar").toggleClass("canvass-sidebar-close");
		})

		$(".canvass-sidebar li").click(function(){
			$(".canvass-sidebar li").removeClass("canvass-active");
			$(this).addClass("canvass-active");
		});

	});


</script>	
		<nav>
		        <i class="fa fa-bars"></i>
				<div class="canvass-brand">
				     <h1><a href="../utente/index.php">Canvass</a></h1>
			   	</div>	
		</nav>
	
				<div class="canvass-sidebar">
				   <div class="canvass-user-profile">
						<div class="canvass-circle-img" style="background-image:url('../../img/ricky.jpg');"></div>
						<h2>Riccardo Schifaudo</h2>
						<span>Cittadino</span>
					 <div class="canvass-profile-btn">
					 <form action="../profilo/profile.php" method="post">	
			         	<button type="submit">Vai al profilo</button>
			         </form>	
			         </div>
				   </div>	 		

				   <div class="canvass-items-menu">
				   		<ul>
				   			<li data-toggle="modal" data-target="#createIdea"><a href="#"><i class="fa fa-lightbulb-o"></i>Proponi idea</a></li>
				   		    <li <?php $name_page =  basename($_SERVER['PHP_SELF']); if($name_page == "index.php") echo "class='canvass-active'";?> id="push-menu-user"><a href="#"><i class="fa fa-user"></i>Spazio Personale</a><i class="fa fa-angle-right"></i></li>
				   		    <div class="canvass-sub-menu" id="push-menu-user-layer">
				   		    	<ul>
				   		    		<li><a href="../utente/index.php">Le tue idee</a></li>
				   		    		<li><a href="../utente/progetti-da-confermare.php">Conferma Progetti</a></li>
				   		    	</ul>
				   		    </div>	
				   		    <li <?php $name_page =  basename($_SERVER['PHP_SELF']); if($name_page == "dashboard_idea.php" OR $name_page="visualizza-idea.php" ) echo "class='canvass-active'";?>><a href="../bachecaIdee/dashboard_idea.php"><i class="fa fa-picture-o"></i>Bacheca idee</a></li>
				   		    <li><a href="#"><i class="fa fa-newspaper-o"></i>Bacheca progetti</a></li>
				   		    <li><a href="#"><i class="fa fa-comments-o"></i>Discussioni idee</a></li>
				   		    <li id="push-menu-msg"><a href="#"><i class="fa fa-paper-plane-o"></i>Messaggistica</a><i class="fa fa-angle-right"></i></li>
				   		    <div class="canvass-sub-menu" id="push-menu-msg-layer">
				   		    	<ul>
				   		    		<li><a href="../messaggistica/home.php">Home</a></li>
				   		    		<li>Scrivi</li>
				   		    		<li>Arrivati</li>
				   		    		<li>Ricevuti</li>
				   		    		<li>Conversazioni</li>
				   		    		<li>Archiviati</li>
				   		    		<li>Cestino</li>
				   		    	</ul>
				   		    </div>	
				   		    <li><a href="#"><i class="fa fa-bell-o"></i>Notifiche</a></li>
				   		    <li><a href="#"><i class="fa fa-cog"></i>Impostazioni</a></li>
				   		    <li><a href="#"><i class="fa fa-sign-out"></i>Log out</a></li>
				   		</ul>
				   </div>	

				  <div class="canvass-search-bar">
				   	     <i class="fa fa-search"></i>
				   	     <input type="text" name="key_ricerca" value="Cerca.."/>
				   </div>
				   <div class="canvass-clear"></div>
				   
			</div>	