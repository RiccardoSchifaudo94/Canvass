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
              <h3 class="box-title">Cestino</h3>

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
        <div class="col-md-9">
          <div class="box box-primary">
           <div class="canvass-post-category">Cestino<i class="fa fa-trash-o"></i>
                 <div class="box-tools pull-right">
                    <div class="has-feedback">
                      <input type="text" class="form-control input-sm" placeholder="Search Mail">
                      <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                  </div>
            </div>     
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-name"><a href="leggi.php">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td align="center"><button class="btn btn-flat btn-info"><i class="fa fa-database"></i></button></td>
                    <td class="center"><button class="btn btn-flat btn-primary"><i class="fa fa-times"></i></button></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-name"><a href="leggi.php">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td align="center"><button class="btn btn-flat btn-info"><i class="fa fa-database"></i></button></td>
                    <td class="center"><button class="btn btn-flat btn-primary"><i class="fa fa-times"></i></button></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-name"><a href="leggi.php">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td align="center"><button class="btn btn-flat btn-info"><i class="fa fa-database"></i></button></td>
                    <td class="center"><button class="btn btn-flat btn-primary"><i class="fa fa-times"></i></button></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-name"><a href="leggi.php">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td align="center"><button class="btn btn-flat btn-info"><i class="fa fa-database"></i></button></td>
                    <td class="center"><button class="btn btn-flat btn-primary"><i class="fa fa-times"></i></button></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-name"><a href="leggi.php">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td align="center"><button class="btn btn-flat btn-info"><i class="fa fa-database"></i></button></td>
                    <td class="center"><button class="btn btn-flat btn-primary"><i class="fa fa-times"></i></button></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-name"><a href="leggi.php">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td align="center"><button class="btn btn-flat btn-info"><i class="fa fa-database"></i></button></td>
                    <td class="center"><button class="btn btn-flat btn-primary"><i class="fa fa-times"></i></button></td>
                  </tr> 
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
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