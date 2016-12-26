<?php
	
	include '../../php/include/header.php';

?>


<body>
<div class="container">	
	<div class="row canvass-clear">
		<div class="col-md-2 col-sm-2 col-xs-0"></div> 
		<div class="col-md-8 col-sm-8 col-xs-12">
		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#recenti" data-toggle="tab"><i class="fa fa-clock-o"></i> Idee Recenti</a></li>
              <li><a href="#popolari" data-toggle="tab"><i class="fa fa-thumbs-o-up"></i> Idee Popolari</a></li>
              <li><a href="#tematiche" data-toggle="tab"><i class="fa fa-cube"></i> Idee Tematiche</a></li>
            </ul>
            <div class="tab-content">
                <div id="recenti" class="tab-pane fade in active">
					<table id="tabella_recenti" class="display" cellspacing="0" width="100%">
									        <thead>
									            <tr>
									                <th></th>
									            </tr>
									        </thead>
									       <tbody>            
									      <tr align="center">
									      <td>  
									      	<div class="canvass-post">
												<div class="canvass-post-category">Mobilità sostenibile<i class="fa fa-train"></i></div>
												<div class="row">
													<div class="col-md-2 col-sm-2">
														<div class="canvass-post-rank">
															<button><i class="fa fa-angle-up"></i></button>
															<h3>4</h3>
															<span>Voti</span>
															<button><i class="fa fa-angle-down"></i></button>
														</div>
													</div>
													<div class="col-md-8 col-sm-8">
														<h2>Viaggiare con il solo-wheel</h2>
														<img src="http://placehold.it/400x250" id="canvass-img-post" class="img-responsive">
														<p>Utilizzare il monociclo elettrico come mezzo di trasporto 
															personale nelle aree urbano a corta percorrenza</p>	
													</div>
													<div class="col-md-4 col-sm-4">
													</div>	
												</div>
												<hr>
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="canvass-author">
															<img class="canvass-img-style" style="background-image:url('../../img/ricky.jpg');"/><p>riccardo schifaudo</p>
													    </div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="canvass-date"><i class="fa fa-clock-o"></i><p>23/01/2015</p></div>
													</div>
												</div>
												<hr>
												<form action="visualizza-idea.php">
												<button class="canvass-btn-navy"><i class="fa fa-search"></i>Vedi dettagli</button>	
												</form>	
											</div>
										</td>
									</tr>
									<tr align="center">
										<td>
											<div class="canvass-post">
												<div class="canvass-post-category">Mobilità sostenibile<i class="fa fa-train"></i></div>
												<div class="row">
													<div class="col-md-2 col-sm-2">
														<div class="canvass-post-rank">
															<button><i class="fa fa-angle-up"></i></button>
															<h3>4</h3>
															<span>Voti</span>
															<button><i class="fa fa-angle-down"></i></button>
														</div>
													</div>
													<div class="col-md-8 col-sm-8">
														<h2>Viaggiare in treno</h2>
														<img src="http://placehold.it/400x250" id="canvass-img-post" class="img-responsive">
														<p>Utilizzare il monociclo elettrico come mezzo di trasporto 
															personale nelle aree urbano a corta percorrenza</p>	
													</div>
													<div class="col-md-4 col-sm-4">
													</div>	
												</div>
												<hr>
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="canvass-author">
															<img class="canvass-img-style" style="background-image:url('../../img/ricky.jpg');"/><p>riccardo schifaudo</p>
													    </div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="canvass-date"><i class="fa fa-clock-o"></i><p>24/01/2015</p></div>
													</div>
												</div>
												<hr>
												<form action="visualizza-idea.php">
												<button class="canvass-btn-navy"><i class="fa fa-search"></i>Vedi dettagli</button>	
												</form>	
											</div>
										</td>
									</tr>
									<tr align="center">
									<td>		
											<div class="canvass-post">
												<div class="canvass-post-category">Mobilità sostenibile<i class="fa fa-train"></i></div>
												<div class="row">
													<div class="col-md-2 col-sm-2">
														<div class="canvass-post-rank">
															<button><i class="fa fa-angle-up"></i></button>
															<h3>4</h3>
															<span>Voti</span>
															<button><i class="fa fa-angle-down"></i></button>
														</div>
													</div>
													<div class="col-md-8 col-sm-8">
														<h2>Viaggiare in bus</h2>
														<img src="http://placehold.it/400x250" id="canvass-img-post" class="img-responsive">
														<p>Utilizzare il monociclo elettrico come mezzo di trasporto 
															personale nelle aree urbano a corta percorrenza</p>	
													</div>
													<div class="col-md-4 col-sm-4">
													</div>	
												</div>
												<hr>
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="canvass-author">
															<img class="canvass-img-style" style="background-image:url('../../img/ricky.jpg');"/><p>riccardo schifaudo</p>
													    </div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="canvass-date"><i class="fa fa-clock-o"></i><p>23/01/2015</p></div>
													</div>
												</div>
												<hr>
												<form action="visualizza-idea.php">
												<button class="canvass-btn-navy"><i class="fa fa-search"></i>Vedi dettagli</button>	
												</form>	
											</div>
										</td>
									</tr>
									</table>	
					
				    </div>
              <!-- /.tab-pane -->
              <div id="popolari" class="tab-pane fade">
				     <table id="tabella_popolari" class="display" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th></th>
				            </tr>
				        </thead>
				       <tbody>            
				      <tr align="center">
				      <td>  
				      	<div class="canvass-post">
							<div class="canvass-post-category">Mobilità sostenibile<i class="fa fa-train"></i></div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<div class="canvass-post-rank">
										<button><i class="fa fa-angle-up"></i></button>
										<h3>4</h3>
										<span>Voti</span>
										<button><i class="fa fa-angle-down"></i></button>
									</div>
								</div>
								<div class="col-md-8 col-sm-8">
									<h2>Viaggiare con il solo-wheel</h2>
									<img src="http://placehold.it/400x250" id="canvass-img-post" class="img-responsive">
									<p>Utilizzare il monociclo elettrico come mezzo di trasporto 
										personale nelle aree urbano a corta percorrenza</p>	
								</div>
								<div class="col-md-4 col-sm-4">
								</div>	
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="canvass-author">
										<img class="canvass-img-style" style="background-image:url('../../img/ricky.jpg');"/><p>riccardo schifaudo</p>
								    </div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="canvass-date"><i class="fa fa-clock-o"></i><p>23/01/2015</p></div>
								</div>
							</div>
							<hr>
							<form action="visualizza-idea.php">
							<button class="canvass-btn-navy"><i class="fa fa-search"></i>Vedi dettagli</button>	
							</form>	
						</div>
					</td>
				</tr>
				<tr align="center">
					<td>
						<div class="canvass-post">
							<div class="canvass-post-category">Mobilità sostenibile<i class="fa fa-train"></i></div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<div class="canvass-post-rank">
										<button><i class="fa fa-angle-up"></i></button>
										<h3>4</h3>
										<span>Voti</span>
										<button><i class="fa fa-angle-down"></i></button>
									</div>
								</div>
								<div class="col-md-8 col-sm-8">
									<h2>Viaggiare in treno</h2>
									<img src="http://placehold.it/400x250" id="canvass-img-post" class="img-responsive">
									<p>Utilizzare il monociclo elettrico come mezzo di trasporto 
										personale nelle aree urbano a corta percorrenza</p>	
								</div>
								<div class="col-md-4 col-sm-4">
								</div>	
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="canvass-author">
										<img class="canvass-img-style" style="background-image:url('../../img/ricky.jpg');"/><p>riccardo schifaudo</p>
								    </div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="canvass-date"><i class="fa fa-clock-o"></i><p>24/01/2015</p></div>
								</div>
							</div>
							<hr>
							<form action="visualizza-idea.php">
							<button class="canvass-btn-navy"><i class="fa fa-search"></i>Vedi dettagli</button>	
							</form>	
						</div>
					</td>
				</tr>
				<tr align="center">
				<td>		
				<div class="canvass-post">
							<div class="canvass-post-category">Mobilità sostenibile<i class="fa fa-train"></i></div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<div class="canvass-post-rank">
										<button><i class="fa fa-angle-up"></i></button>
										<h3>4</h3>
										<span>Voti</span>
										<button><i class="fa fa-angle-down"></i></button>
									</div>
								</div>
								<div class="col-md-8 col-sm-8">
									<h2>Viaggiare in bus</h2>
									<img src="http://placehold.it/400x250" id="canvass-img-post" class="img-responsive">
									<p>Utilizzare il monociclo elettrico come mezzo di trasporto 
										personale nelle aree urbano a corta percorrenza</p>	
								</div>
								<div class="col-md-4 col-sm-4">
								</div>	
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="canvass-author">
										<img class="canvass-img-style" style="background-image:url('../../img/ricky.jpg');"/><p>riccardo schifaudo</p>
								    </div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="canvass-date"><i class="fa fa-clock-o"></i><p>23/01/2015</p></div>
								</div>
							</div>
							<hr>
							<form action="visualizza-idea.php">
							<button class="canvass-btn-navy"><i class="fa fa-search"></i>Vedi dettagli</button>	
							</form>	
						</div>
					</td>
				</tr>
				</table>
				    </div>
              <!-- /.tab-pane -->
             		    <div id="tematiche" class="tab-pane fade">
				      <table id="tabella_tematiche" class="display" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th></th>
				            </tr>
				        </thead>
				       <tbody>            
				      <tr align="center">
				      <td>  
				      	<div class="canvass-post">
							<div class="canvass-post-category">Mobilità sostenibile<i class="fa fa-train"></i></div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<div class="canvass-post-rank">
										<button><i class="fa fa-angle-up"></i></button>
										<h3>4</h3>
										<span>Voti</span>
										<button><i class="fa fa-angle-down"></i></button>
									</div>
								</div>
								<div class="col-md-8 col-sm-8">
									<h2>Viaggiare con il solo-wheel</h2>
									<img src="http://placehold.it/400x250" id="canvass-img-post" class="img-responsive">
									<p>Utilizzare il monociclo elettrico come mezzo di trasporto 
										personale nelle aree urbano a corta percorrenza</p>	
								</div>
								<div class="col-md-4 col-sm-4">
								</div>	
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="canvass-author">
										<img class="canvass-img-style" style="background-image:url('../../img/ricky.jpg');"/><p>riccardo schifaudo</p>
								    </div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="canvass-date"><i class="fa fa-clock-o"></i><p>23/01/2015</p></div>
								</div>
							</div>
							<hr>
							<form action="visualizza-idea.php">
							<button class="canvass-btn-navy"><i class="fa fa-search"></i>Vedi dettagli</button>	
							</form>	
						</div>
					</td>
				</tr>
				<tr align="center">
					<td>
						<div class="canvass-post">
							<div class="canvass-post-category">Mobilità sostenibile<i class="fa fa-train"></i></div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<div class="canvass-post-rank">
										<button><i class="fa fa-angle-up"></i></button>
										<h3>4</h3>
										<span>Voti</span>
										<button><i class="fa fa-angle-down"></i></button>
									</div>
								</div>
								<div class="col-md-8 col-sm-8">
									<h2>Viaggiare in treno</h2>
									<img src="http://placehold.it/400x250" id="canvass-img-post" class="img-responsive">
									<p>Utilizzare il monociclo elettrico come mezzo di trasporto 
										personale nelle aree urbano a corta percorrenza</p>	
								</div>
								<div class="col-md-4 col-sm-4">
								</div>	
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="canvass-author">
										<img class="canvass-img-style" style="background-image:url('../../img/ricky.jpg');"/><p>riccardo schifaudo</p>
								    </div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="canvass-date"><i class="fa fa-clock-o"></i><p>24/01/2015</p></div>
								</div>
							</div>
							<hr>
							<form action="visualizza-idea.php">
							<button class="canvass-btn-navy"><i class="fa fa-search"></i>Vedi dettagli</button>	
							</form>	
						</div>
					</td>
				</tr>
				<tr align="center">
				<td>		
						<div class="canvass-post">
							<div class="canvass-post-category">Mobilità sostenibile<i class="fa fa-train"></i></div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<div class="canvass-post-rank">
										<button><i class="fa fa-angle-up"></i></button>
										<h3>4</h3>
										<span>Voti</span>
										<button><i class="fa fa-angle-down"></i></button>
									</div>
								</div>
								<div class="col-md-8 col-sm-8">
									<h2>Viaggiare in bus</h2>
									<img src="http://placehold.it/400x250" id="canvass-img-post" class="img-responsive">
									<p>Utilizzare il monociclo elettrico come mezzo di trasporto 
										personale nelle aree urbano a corta percorrenza</p>	
								</div>
								<div class="col-md-4 col-sm-4">
								</div>	
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="canvass-author">
										<img class="canvass-img-style" style="background-image:url('../../img/ricky.jpg');"/><p>riccardo schifaudo</p>
								    </div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="canvass-date"><i class="fa fa-clock-o"></i><p>23/01/2015</p></div>
								</div>
							</div>
							<hr>
							<form action="visualizza-idea.php">
							<button class="canvass-btn-navy"><i class="fa fa-search"></i>Vedi dettagli</button>	
							</form>	
						</div>
					</td>
				</tr>
				</table>	
				    </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
       </div>
       <div class="col-md-2 col-sm-2 col-xs-0"></div>   
	</div>	

</div>
<script type="text/javascript">
$(document).ready(function(){
	 $('#tabella_recenti').DataTable( {
         "pagingType": "full_numbers"
    } );

	 $('#tabella_popolari').DataTable( {
         "pagingType": "full_numbers"
    } );

    $('#tabella_tematiche').DataTable( {
         "pagingType": "full_numbers"
    } ); 

	$(".dataTables_wrapper .dataTables_filter input").addClass("form-control");
	$("div#tabella_recenti_length select,div#tabella_popolari_length select,div#tabella_tematiche_length select").addClass("form-control");
	//$(".dataTables_length").html("<label>Mostra<select name='example_length' aria-controls='example' class='form-control'><option value='10'>10</option><option value='25'>25</option><option value='50'>50</option><option value='100'>100</option></select></label>"); 
	//$(".dataTables_filter").html("<label>Cerca <input type='search' class='form-control' placeholder='' aria-controls='example'></label>");

	$("#recenti").show();
	//$("#popolari").hide();
	//$("#tematiche").hide();
	
	$("#recenti").click(function(){
		$("tabella_recenti").show();
	});

	$("#popolari").click(function(){
		$("#tabella_popolari").show();
	});

	$("#tematiche").click(function(){
		$("#tabella_tematiche").show();
	});

});
</script>	
<?php
	
	include '../../php/include/footer.php';

?>