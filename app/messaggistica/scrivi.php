<?php
	
	include '../../php/include/header.php';

?>

<body class="wysihtml5-supported">
<div class="container">	
	<div class="row canvass-clear">
		<div class="col-md-1 col-sm-1">
		</div>
		<div class="col-md-10 col-sm-10">
			     <section class="content">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-0">
          <a href="scrivi.php" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-edit"></i> Scrivi</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Scrivi</h3>

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
          </div>
          <!-- /.box -->
     
        <!-- /.col -->
        <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="box box-primary">
              <div class="canvass-post-category">Scrivi<i class="fa fa-pencil"></i></div>  
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <input class="form-control" placeholder="To:">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Subject:">
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px">Scrivi messaggio...
                    </textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file" name="attachment">
                </div>
                <p class="help-block">Max. 32MB</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->

          <!-- /. box -->
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