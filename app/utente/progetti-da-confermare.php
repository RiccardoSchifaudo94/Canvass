<?php
  
  include '../../php/include/header.php';

?>

<body>
<div class="container">   
      <div class="row canvass-clear">
            <div class="col-md-1 col-sm-1 col-xs-0">
            </div>
            <div class="col-md-10 col-sm-10 col-xs-12">
                <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-legal"></i> Progetti da Confermare</a></li>
                        <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-check"></i> Progetti confermati</a></li>
                        <li><a href="#tab_3" data-toggle="tab"><i class="fa fa-times"></i> Progetti respinti</a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                          <div align="center" class="row">
                            <div class="col-md-1 col-sm-1 col-xs-0"></div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                              <div class="box">
                                <div class="canvass-post-category"><i class="fa fa-legal"></i> Progetti da confermare</div>
                                  <!-- /.box-header -->
                                  <div class="box-body no-padding table-responsive">
                                    <table class="table table-striped ">
                                      <tbody><tr>
                                        <th>Titolo idea</th>
                                        <th>Titolo progetto</th>
                                        <th>Proponente progetto</th>
                                        <th style="width: 40px">Dettagli</th>
                                        <th style="width: 40px">Contatta</th>
                                        <th style="width: 40px">Conferma</th>
                                        <th style="width: 40px">Respingi</th>
                                      </tr>
                                      <tr>
                                        <td>Idea sul trasporto</td>
                                        <td>Progetto sul trasporto</td>
                                        <td>
                                          Pinco Pallo
                                        </td>
                                        <td align="center">
                                          <form action="dettagli-progetto.php" method="post">
                                             <button class="btn btn-flat btn-info" type="submit"><i class="fa fa-eye"></i></button>
                                          </form>   
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-primary"><i class="fa fa-paper-plane"></i></button>
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-success"><i class="fa fa-check"></i></button>
                                        </td>
                                         <td align="center">
                                          <button class="btn btn-flat btn-danger"><i class="fa fa-times"></i></button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Idea sull'energia</td>
                                        <td>Progetto sull'energia</td>
                                        <td>
                                          Pinco Pallo
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-info"><i class="fa fa-eye"></i></button>
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-primary"><i class="fa fa-paper-plane"></i></button>
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-success"><i class="fa fa-check"></i></button>
                                        </td>
                                         <td align="center">
                                          <button class="btn btn-flat btn-danger"><i class="fa fa-times"></i></button>
                                        </td>
                                      </tr>
                                       <tr>
                                        <td>Idea sui rifiuti</td>
                                        <td>Progetto sui rifiuti</td>
                                        <td>
                                          Pinco Pallo
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-info"><i class="fa fa-eye"></i></button>
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-primary"><i class="fa fa-paper-plane"></i></button>
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-success"><i class="fa fa-check"></i></button>
                                        </td>
                                         <td align="center">
                                          <button class="btn btn-flat btn-danger"><i class="fa fa-times"></i></button>
                                        </td>
                                      </tr>
                                    </tbody></table>
                                  </div>
                                  <!-- /.box-body -->
                                </div>
                              </div><!-- close col-md-10 -->
                              <div class="col-md-1 col-sm-1 col-xs-0"></div>  
                          </div>  
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                              <div align="center" class="row">
                            <div class="col-md-1 col-sm-1 col-xs-0"></div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                              <div class="box">
                                <div class="canvass-post-category"><i class="fa fa-check"></i> Progetti confermati</div>
                                  <!-- /.box-header -->
                                  <div class="box-body no-padding table-responsive">
                                    <table class="table table-striped ">
                                      <tbody><tr>
                                        <th>Titolo idea</th>
                                        <th>Titolo progetto</th>
                                        <th>Proponente progetto</th>
                                        <th style="width: 40px">Dettagli</th>
                                        <th style="width: 40px">Contatta</th>
                                      </tr>
                                      <tr>
                                        <td>Idea sul trasporto</td>
                                        <td>Progetto sul trasporto</td>
                                        <td>
                                          Pinco Pallo
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-info"><i class="fa fa-eye"></i></button>
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-primary"><i class="fa fa-paper-plane"></i></button>
                                        </td>
      
                                      </tr>
                                      <tr>
                                        <td>Idea sull'energia</td>
                                        <td>Progetto sull'energia</td>
                                        <td>
                                          Pinco Pallo
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-info"><i class="fa fa-eye"></i></button>
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-primary"><i class="fa fa-paper-plane"></i></button>
                                        </td>
                                      </tr>
                                       <tr>
                                        <td>Idea sui rifiuti</td>
                                        <td>Progetto sui rifiuti</td>
                                        <td>
                                          Pinco Pallo
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-info"><i class="fa fa-eye"></i></button>
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-primary"><i class="fa fa-paper-plane"></i></button>
                                        </td>
                                      </tr>
                                    </tbody></table>
                                  </div>
                                  <!-- /.box-body -->
                                </div>
                              </div><!-- close col-md-10 -->
                              <div class="col-md-1 col-sm-1 col-xs-0"></div>  
                          </div>  
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                               <div align="center" class="row">
                            <div class="col-md-1 col-sm-1 col-xs-0"></div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                              <div class="box">
                                <div class="canvass-post-category"><i class="fa fa-times"></i> Progetti respinti</div>
                                  <!-- /.box-header -->
                                  <div class="box-body no-padding table-responsive">
                                    <table class="table table-striped ">
                                      <tbody><tr>
                                        <th>Titolo idea</th>
                                        <th>Titolo progetto</th>
                                        <th>Proponente progetto</th>
                                        <th style="width: 40px">Dettagli</th>
                                        <th style="width: 40px">Contatta</th>
                                      </tr>
                                      <tr>
                                        <td>Idea sul trasporto</td>
                                        <td>Progetto sul trasporto</td>
                                        <td>
                                          Pinco Pallo
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-info"><i class="fa fa-eye"></i></button>
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-primary"><i class="fa fa-paper-plane"></i></button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Idea sull'energia</td>
                                        <td>Progetto sull'energia</td>
                                        <td>
                                          Pinco Pallo
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-info"><i class="fa fa-eye"></i></button>
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-primary"><i class="fa fa-paper-plane"></i></button>
                                        </td>
                                      </tr>
                                       <tr>
                                        <td>Idea sui rifiuti</td>
                                        <td>Progetto sui rifiuti</td>
                                        <td>
                                          Pinco Pallo
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-info"><i class="fa fa-eye"></i></button>
                                        </td>
                                        <td align="center">
                                          <button class="btn btn-flat btn-primary"><i class="fa fa-paper-plane"></i></button>
                                        </td>
                                      </tr>
                                    </tbody></table>
                                  </div>
                                  <!-- /.box-body -->
                                </div>
                              </div><!-- close col-md-10 -->
                              <div class="col-md-1 col-sm-1 col-xs-0"></div>  
                          </div>
                        </div>
                        <!-- /.tab-pane -->
                      </div>
                      <!-- /.tab-content -->
                    </div>
            </div>  
            <div class="col-md-1 col-sm-1 col-xs-12">
            </div>    
          
        </div>  
</div>    
<?php
  
  include '../../php/include/footer.php';

?>