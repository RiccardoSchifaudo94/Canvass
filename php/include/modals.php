<div id="deleteIdea" class="modal fade" role="dialog">
  <div class="modal-dialog">
		<!-- Modal content-->
		    <div class="modal-content canvass-form">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title"><i class="fa fa-lightbulb-o"></i> Vuoi cancellare questa idea?</h4>
		      </div>
		      <div class="modal-body">
		      	<p>Stai per cancellare questa idea e non sarà più visualizzabile nella bacheca delle idee.</p>
		      	<p>Vuoi procedere con questa operazione?</p>
		      </div>
		      <div class="modal-footer">
		       <div class="row">
		       	   <div class="col-md-6 col-sm-6">
		       	   	<form action="index.php" method="post">
		       	     	<button type="submit" class="canvass-bnt-modal"><i class="fa fa-check"></i> Conferma</button>
		       	    </form>
		       	   </div>	
		           <div class="col-md-6 col-sm-6"> 
		            <button type="button" class="canvass-bnt-modal" data-dismiss="modal" style="background-color:#1D5789;"><i class="fa fa-close"></i> Annulla</button>
		           </div>
		            
		       </div> 
		      </div>
		    </div>
  </div>
</div>
<!-- Modal -->
<div id="writeComment" class="modal fade" role="dialog">
  <div class="modal-dialog">
		<!-- Modal content-->
		    <div class="modal-content canvass-form">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title"><i class="fa fa-comments-o"></i> Scrivi commento</h4>
		      </div>
		      <div class="modal-body">
		      	<label>Commento</label>
		        <textarea rows="15">"Scrivi ..."</textarea>
		      </div>
		      <div class="modal-footer">
		       <div class="row">
		       	   <div class="col-md-6 col-sm-6">
		       	   	<button type="button" class="canvass-bnt-modal" data-dismiss="modal"><i class="fa fa-check"></i> Pubblica</button>
		       	   </div>	
		           <div class="col-md-6 col-sm-6"> 
		            <button type="button" class="canvass-bnt-modal" data-dismiss="modal" style="background-color:#1D5789;"><i class="fa fa-close"></i> Annulla</button>
		           </div>
		            
		       </div> 
		      </div>
		    </div>
  </div>
</div>
<!-- Modal -->
<div id="createIdea" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content canvass-form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-lightbulb-o"></i> Proponi idea</h4>
      </div>
      <div class="modal-body">
      	<label>Titolo</label>
        <input type="text" name="" placeholder="Inserisci titolo..">
        <label>Sottotitolo</label>
        <input type="text" name="" placeholder="Inserisci sottotitolo ...">
        <label>Descrizione</label>
        <textarea rows="15">"Scrivi descrizione..."</textarea>
        <label>Seleziona categoria</label>
        <select>
        	<option>Economia Virtuosa</option>
        	<option>Mobilità sostenibile</option>
        	<option>Cittadinza Attiva</option>
        	<option>Altro</option>
        </select>
        <label>Aggiungi un link</label>
        <input type="link" name="" placeholder="Inserisci link ...">
        <label>Aggiungi immagine</label>
        <input type="file" name="">
        <span>Inserisci immagine in formato .png .jpg .gif</span>
      </div>
      <div class="modal-footer">
       <div class="row">
       	   <div class="col-md-6 col-sm-6">
       	   	<button type="button" class="canvass-bnt-modal" data-dismiss="modal"><i class="fa fa-check"></i> Conferma</button>
       	   </div>	
           <div class="col-md-6 col-sm-6"> 
            <button type="button" class="canvass-bnt-modal" data-dismiss="modal" style="background-color:#1D5789;"><i class="fa fa-close"></i> Annulla</button>
           </div>
            
       </div> 
      </div>
    </div>

  </div>
</div>