<?php
	
	include '../../php/include/header.php';

?>

<body>
<div class="container">	
	<div class="row canvass-clear">
		<div class="col-md-2 col-sm-2">
		</div>
		<div class="col-md-8 col-sm-8">
			<div class="canvass-post">
				<div class="canvass-post-category">Modifica Profilo <i class="fa fa-user"></i></div>
				<div class="row">
					<div class="col-md-2 col-sm-2">
					</div>
					<div class="col-md-8 col-sm-8">
						<h2>Riccardo Schifaudo</h2>
						<div class="canvass-circle-img" style="background-image:url('../../img/ricky.jpg');"></div>
						<h3>Generalità</h3>
							<p><b>Sono un </b> Cittadino</input></p>
							<p><b>Abito a </b></p>
							<div class="canvass-form">
								<input type="text" name="comune_residenza" value="Volvera - Italy"></input>
							</div>
						<h3>Qualcosa du di me...</h3>
						<div class="canvass-form">
							<textarea  type="text" name="biografia" rows="20">
							        Mi chiamo Riccardo Schifaudo, sono nato il 5 Gennaio del 1994 a Moncalieri, provincia di Torino. Sono un aspirante sviluppatore web e anche di sviluppo e realizzazione di applicazioni su sistemi mobile per Android e I-Phone.Di recente ho scoperto una passione per il web, perciò spero in futuro di svolgere il lavoro in tal ambito, non appena maturare; le competenze necessarie. Non mi tiro indietro davanti le sfide e farò; di tutto per soddisfare le vostre esigenze. Le mie competenze tecniche convergono nella programmazione in C++,sto maturando discrete competenze in ambito grafico. Possiedo discrete conoscenze nelle sviluppo web, anche se sono intenzionato a sviluppare e migliorare in questo ambito. Buona capacità; nell'analisi e nello sviluppo del programma applicativo. Esperienza pregressa nel testing dei software maturate in contesto scolastico e personale. Mi piace sperimentare nuove forme di programmazione. Attualmente studio per imparare come distribuire i miei prodotti multimediali attraverso canali di promozione e soprattuto come renderli funzionali, efficienti ed interattivi per l'utente. Linguaggi di programmazione conosciuti: C/C++,Java e Java per Android,Html,CSS,JQuery,Arduino. Conoscenza e utilizzo del pacchetto Office ed Adobe Indegn,Illustrator e Photoshop.
							</textarea>
						</div>	
						<h3>Interessi</h3>
						<div class="canvass-form">
							<textarea  type="text" name="interessi" rows="20">
						     Sono molto amante della lettura. I miei libri preferiti sono quelli riguardanti l'esoterismo, la fantascienza e le arti marziali. Mi piacciono molto le arti marziali, tra cui il ninjutsu, jeet kune do e aikido. Ho praticato per un breve periodo Taekwondo. Adoro la vita all'aria aperta e andare in bicicletta. Trovo interessante viaggiare all'estero anche se l'ho fatto per poco tempo. Vorrei vivere in Nuova Zelanda. Sono appassionato di programmazione informatica e di elettronica, anche se la prima mi interessa molto rispetto alla seconda. Mi piace Arduino. Sono sempre stato anche interessato all'ambito ferroviario, anche se ho deciso di intraprendere lo sviluppo software. Sono stato per 12 anni un Scout e mi sono occupato di quasi tutti i tipi di volontariato: dalle associazione no-profit, al servizio di anziani o persone affette da invalidità;. Ho scoperto recente la passione per il lo sviluppo web ma anche mobile su Android e penso che possa essere uno dei possibili sbocchi che potrei intraprendere finiti gli studi. Studio personale di tecniche di comunicazione PNL(programmazione neuro linguistica), tecniche di vendita e persuasione, mentalismo, ipnosi e tutto ciò che inerente al mentale. Profondo interesse politico e sulla democrazia diretta.
						    </textarea> 
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
					</div>	
				</div>
				<hr>
				<form action="dettagli-idea.php">
				<button class="canvass-btn-navy"><i class="fa fa-check"></i>Salva Profilo</button>	
				</form>	
			</div>
		</div>	
		<div class="col-md-2 col-sm-2">
		</div>		
	</div>
	<div class="row">
		<div class="col-md-2 col-sm-2">
		</div>
		<div class="col-md-8 col-sm-8">
			<div class="canvass-post">
				<div class="canvass-post-category">Modifica credenziali <i class="fa fa-key"></i></div>
				<div class="row">
					<div class="col-md-2 col-sm-2">
					</div>
					<div class="col-md-8 col-sm-8">
						<h3>Credenziali</h3>
							<label>Password</label>
							<div class="canvass-form">
								<input type="password" name="password" value="1234"></input>
							</div>
							<label>Conferma Password</label>
							<div class="canvass-form">
								<input type="password" name="conferma_password" value="1234"></input>
							</div>
					</div>
					<div class="col-md-4 col-sm-4">
					</div>	
				</div>
				<hr>
				<form action="dettagli-idea.php">
				<button class="canvass-btn-navy"><i class="fa fa-check"></i>Salva password</button>	
				</form>	
			</div>
		</div>	
		<div class="col-md-2 col-sm-2">
		</div>		
	</div>
</div><!-- close container -->		
<?php
	
	include '../../php/include/footer.php';

?>