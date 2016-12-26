<?php
	
	include '../../php/include/header.php';

?>

<body>
<div class="container">	
	<div class="row canvass-clear">
		<div class="col-md-1 col-sm-1">
		</div>
		<div class="col-md-10 col-sm-10">
			     <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="scrivi.php" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-edit"></i> Scrivi</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Archivio</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
             <ul class="nav nav-pills nav-stacked">
                  <li class="active"><a href="home.php"><i class="fa fa-inbox"></i> Ricevuti
                     <span class="label label-primary pull-right"> 12</span></a></li>
                  <li><a href="inviati.php"><i class="fa fa-envelope-o"></i> Inviati</a></li>
                  <li><a href="conversazioni.php"><i class="fa fa-comments-o"></i> Chat</a>
                  </li>
                  <li><a href="archivio.php"><i class="fa fa-folder"></i> Archivio</a>
                  </li>
                  <li><a href="cestino.php"><i class="fa fa-trash-o"></i> Cestino</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
      
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="row">
               
               
                  <div class="canvass-post">
                    <div class="canvass-post-category">Conversazione<i class="fa fa-comments-o"></i></div>
                    <div id="canvass-chat-container">
                              <div class="row" >
                                
                                      <div class="canvass-post-item">    
                                          <div class="canvass-author" style="margin-top:20px;">
                                              <img class="canvass-img-style" style="background-image:url('../../img/ricky.jpg');"><p>riccardo schifaudo</p>
                                          </div>
                                               
                                          <p id="canvass-chat-messaggi">
                                            Lorem ipsum represents a long-held tradition for designers,
                                            typographers and the like. Some people hate it and argue for
                                            its demise, but others ignore the hate as they create awesome
                                            tools to help create filler text for everyone from bacon lovers
                                            to Charlie Sheen fans.
                                          </p>
                                      </div>     
                                 
                              </div>
                               <div class="row" >
                                
                                      <div class="canvass-post-item">    
                                          <div class="canvass-author" style="margin-top:20px;">
                                              <img class="canvass-img-style" style="background-image:url('http://placehold.it/200x200');"><p>riccardo schifaudo</p>
                                          </div>
                                               
                                          <p id="canvass-chat-messaggi">
                                            Lorem ipsum represents a long-held tradition for designers,
                                            typographers and the like. Some people hate it and argue for
                                            its demise, but others ignore the hate as they create awesome
                                            tools to help create filler text for everyone from bacon lovers
                                            to Charlie Sheen fans.
                                          </p>
                                      </div>     
                                 
                              </div>
                               <div class="row" >
                                
                                      <div class="canvass-post-item">    
                                          <div class="canvass-author" style="margin-top:20px;">
                                              <img class="canvass-img-style" style="background-image:url('../../img/ricky.jpg');"><p>riccardo schifaudo</p>
                                          </div>
                                               
                                          <p id="canvass-chat-messaggi">
                                            Lorem ipsum represents a long-held tradition for designers,
                                            typographers and the like. Some people hate it and argue for
                                            its demise, but others ignore the hate as they create awesome
                                            tools to help create filler text for everyone from bacon lovers
                                            to Charlie Sheen fans.
                                          </p>
                                      </div>     
                                 
                              </div>
                     </div><!-- canvass container -->         
                    <hr>
                    <form action="rispondi.php" method="post">
                    <button class="canvass-btn-navy"><i class="fa fa-edit"></i>Rispondi in chat</button>   
                  </form>
                  </div>
           
                   
              </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
      </div>
		</div>	
		<div class="col-md-1 col-sm-1">
		</div>		
	</div>
</div><!-- close container -->		
<?php
	
	include '../../php/include/footer.php';

?>