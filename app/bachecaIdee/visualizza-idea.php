<?php
	
	include '../../php/include/header.php';

?>

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

<body>
    <div class="container">		
        <div class="row canvass-clear">
		<div class="col-md-2 col-sm-2">
		</div>
		<div class="col-md-10 col-sm-10">
			
		 <div class="body">
		
			<!-- tabs -->
			<div class="canvass-tabs canvass-tabs-pos-right canvass-tabs-anim-flip canvass-tabs-response-to-icons">
				<input type="radio" name="canvass-tabs" checked id="canvass-tab1" class="canvass-tab-content-1">
				<label for="canvass-tab1"><span><span><i class="fa fa-lightbulb-o"></i>Idea in breve</span></span></label>
				
				<input type="radio" name="canvass-tabs" id="canvass-tab2" class="canvass-tab-content-2">
				<label for="canvass-tab2"><span><span><i class="fa fa-bars"></i>Descrizione</span></span></label>
				
				<input type="radio" name="canvass-tabs" id="canvass-tab3" class="canvass-tab-content-3">
				<label for="canvass-tab3"><span><span><i class="fa fa-link"></i>Link</span></span></label>
				
				<input type="radio" name="canvass-tabs" id="canvass-tab4" class="canvass-tab-content-4">
				<label for="canvass-tab4"><span><span><i class="fa fa-comments-o"></i>Suggerimenti</span></span></label>
				
				<ul>
					<li class="canvass-tab-content-1">					
						<div class="typography">
							<h1>Nikola Tesla</h1>
							<p>Serbian-American inventor, electrical engineer, mechanical engineer, physicist, and futurist best known for his contributions to the design of the modern alternating current (AC) electrical supply system.</p>
							<p>Tesla started working in the telephony and electrical fields before emigrating to the United States in 1884 to work for Thomas Edison. He soon struck out on his own with financial backers, setting up laboratories/companies to develop a range of electrical devices. His patented AC induction motor and transformer were licensed by George Westinghouse, who also hired Tesla as a consultant to help develop an alternating current system. Tesla is also known for his high-voltage, high-frequency power experiments in New York and Colorado Springs which included patented devices and theoretical work used in the invention of radio communication, for his X-ray experiments, and for his ill-fated attempt at intercontinental wireless transmission in his unfinished Wardenclyffe Tower project.</p>
							<p>Tesla's achievements and his abilities as a showman demonstrating his seemingly miraculous inventions made him world-famous. Although he made a great deal of money from his patents, he spent a lot on numerous experiments. He lived for most of his life in a series of New York hotels although the end of his patent income and eventual bankruptcy led him to live in diminished circumstances. Tesla still continued to invite the press to parties he held on his birthday to announce new inventions he was working and make (sometimes unusual) statements. Because of his pronouncements and the nature of his work over the years, Tesla gained a reputation in popular culture as the archetypal "mad scientist". He died in room 3327 of the New Yorker Hotel on 7 January 1943.</p>
							<p class="text-right"><em>Find out more about Nikola Tesla from <a href="http://en.wikipedia.org/wiki/Nikola_Tesla" target="_blank">Wikipedia</a>.</em></p>
						</div>
					</li>
					
					<li class="canvass-tab-content-2">
						<div class="typography">
							<h1>Leonardo da Vinci</h1>
							<p>Italian Renaissance polymath: painter, sculptor, architect, musician, mathematician, engineer, inventor, anatomist, geologist, cartographer, botanist, and writer. His genius, perhaps more than that of any other figure, epitomized the Renaissance humanist ideal. Leonardo has often been described as the archetype of the Renaissance Man, a man of "unquenchable curiosity" and "feverishly inventive imagination". He is widely considered to be one of the greatest painters of all time and perhaps the most diversely talented person ever to have lived. According to art historian Helen Gardner, the scope and depth of his interests were without precedent and "his mind and personality seem to us superhuman, the man himself mysterious and remote". Marco Rosci states that while there is much speculation about Leonardo, his vision of the world is essentially logical rather than mysterious, and that the empirical methods he employed were unusual for his time.</p>
							<p>Born out of wedlock to a notary, Piero da Vinci, and a peasant woman, Caterina, at Vinci in the region of Florence, Leonardo was educated in the studio of the renowned Florentine painter, Verrocchio. Much of his earlier working life was spent in the service of Ludovico il Moro in Milan. He later worked in Rome, Bologna and Venice, and he spent his last years in France at the home awarded him by Francis I.</p>
							<p class="text-right"><em>Find out more about Leonardo da Vinci from <a href="http://en.wikipedia.org/wiki/Leonardo_da_Vinci" target="_blank">Wikipedia</a>.</em></p>
						</div>
					</li>
					
					<li class="canvass-tab-content-3">
						<div class="typography">
							<h1>Albert Einstein</h1>
							<p>German-born theoretical physicist who developed the general theory of relativity, one of the two pillars of modern physics (alongside quantum mechanics). While best known for his mass–energy equivalence formula E = mc2 (which has been dubbed "the world's most famous equation"), he received the 1921 Nobel Prize in Physics "for his services to theoretical physics, and especially for his discovery of the law of the photoelectric effect". The latter was pivotal in establishing quantum theory.</p>
							<p>Near the beginning of his career, Einstein thought that Newtonian mechanics was no longer enough to reconcile the laws of classical mechanics with the laws of the electromagnetic field. This led to the development of his special theory of relativity. He realized, however, that the principle of relativity could also be extended to gravitational fields, and with his subsequent theory of gravitation in 1916, he published a paper on the general theory of relativity.</p>
							<p>He continued to deal with problems of statistical mechanics and quantum theory, which led to his explanations of particle theory and the motion of molecules. He also investigated the thermal properties of light which laid the foundation of the photon theory of light. In 1917, Einstein applied the general theory of relativity to model the large-scale structure of the universe.</p>
							<p class="text-right"><em>Find out more about Albert Einstein from <a href="http://en.wikipedia.org/wiki/Albert_Einstein" target="_blank">Wikipedia</a>.</em></p>
						</div>
					</li>
					
					<li class="canvass-tab-content-4">
						<div class="typography">
							<h1>Isaac Newton</h1>
							<p>English physicist and mathematician who is widely regarded as one of the most influential scientists of all time and as a key figure in the scientific revolution. His book Philosophiæ Naturalis Principia Mathematica ("Mathematical Principles of Natural Philosophy"), first published in 1687, laid the foundations for most of classical mechanics. Newton also made seminal contributions to optics and shares credit with Gottfried Leibniz for the invention of the infinitesimal calculus.</p>
							<p>Newton's Principia formulated the laws of motion and universal gravitation that dominated scientists' view of the physical universe for the next three centuries. It also demonstrated that the motion of objects on the Earth and that of celestial bodies could be described by the same principles. By deriving Kepler's laws of planetary motion from his mathematical description of gravity, Newton removed the last doubts about the validity of the heliocentric model of the cosmos.</p>
							<p class="text-right"><em>Find out more about Isaac Newton from <a href="http://en.wikipedia.org/wiki/Isaac_Newton" target="_blank">Wikipedia</a>.</em></p>
						</div>
					</li>					
				</ul>
			</div>
			<!--/ tabs -->
			
		</div>

		</div>			
      </div>
</div>      	
<?php
	
	include '../../php/include/footer.php';

?>	