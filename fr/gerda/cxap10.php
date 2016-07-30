<?php 
$titolo="10 (dek)";
$leciono = 10;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "gerdakapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('GR',$leciono,$section);
		?>
		<?php
		if ($section=="1") {
			include "gerdasono.inc.php";
		?>
			<h3>Nefidinda flegistino</h3>
			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Fakte, Tom ne estas ema fidi la flegistinon. Kial? ĉu vi
					scias, kara amiko, vi kiu sekvas ĉi tiun aventuron ekde la unua vorto?
					ĉu vi scias, kial Tom ne emas fidi la flegistinon?</p>
					<p>Ne. Certe vi ne scias. Ankaŭ mi ne scias. Sed fakto restas
					fakto, eĉ se ni ne komprenas ĝin. Kaj la fakto estas, ke Tom ne emas
					ŝin kredi.</p>
					<p>Tom estas agema knabo, eĉ iom aventurema, kaj eble tiu tro
					parolema flegistino ne ŝajnas al li kredinda. Eble li opinias, ke tiu
					flegistino tro emas paroli, kaj do ne estas fidinda. Aŭ ĉu temas pri
					io alia?</p>
					<p>Tom ege ŝatas sian amikon Bob. Li ŝategas lin. Li lin amas,
					fakte. Bob kaj li amikiĝis antaŭ longe en la urbego, kie ili vivis
					tiutempe – ili dumtempe eĉ iradis al la sama lernejo – sed poste Tom
					devis iri al malsama urbo, kaj ili ne plu vidis sin reciproke.  Kiam,
					antaŭ kelkaj tagoj, ili retrovis unu la alian en la sama universitato,
					ambaŭ ege dankis la destinon.</p>
					<p>Ili treege ŝatas la tiean bonegan vivon. Ili ŝategas ĝin.
					Ambaŭ estas agemaj, laboremaj knaboj, kun speciala ŝato al la iom
					timemaj studentinoj. Eble ĉar timema junulino estas malpli timinda ol
					ino neniam ema timi, ol sen-tim-ulino. Ĉu vi komprenas?</p>
				</div>
				<div class="col s12 m4">
					<img src="bildoj/gerda10-1.gif" class="responsive-img">
				</div>
			</div>

			<div class="row dialogo">
				<div class="col s12 m8">
					<p>Sed nun Tom malŝatas la aventuron. Li sin demandas, kial li
					sentas tiun flegistinon nefidinda. Li preferus silenteman,
					grav-aspektan sinjorinon. Tiu ĉi ne aspektas tre zorgeme, kaj li ne
					trovas ŝin atentema pri liaj demandoj. Verdire, li opinias ŝin ema
					fuŝi sian laboron. Li timas, ke ŝi ofte agas fuŝe. Fuŝemaj homoj
					ekzistas en la mondo. Kial tiu tro parolema flegistino ne estus unu el
					ili? ĉu li mispaŝis, kiam li turnis sin al ŝi? Sed al kiu alia li
					povus sin turni? ŝi estis la sola flegistino, kiu troviĝis en la
					universitato. Aŭ ĉu li mispensas?</p>
					<p>Kaj nun li sentas sin ema zorgi pri Linda. ĉu tiu belega
					knabino ne troviĝas en danĝero? Li amas ŝin, li eĉ amegas ŝin, pli
					kaj pli, kaj la ideo, ke danĝeraj homoj povus fari ion al ŝi, apenaŭ
					estas travivebla. La vivo ne estas facila, kaj ŝajnas nun, ke la tuta
					afero iĝas pli kaj pli malŝatinda.</p>
					<div class="col s12 m4">
						<img src="bildoj/gerda10-2.gif" class="responsive-img">
					</div>
				</div>
			</div>
		
		<?php 
		} // fin section 1
		if ($section=="2") {
		?>

			<section class="klarigo">
		
				<h4>-eg- : <i>augmente le caract&egrave;re, la qualité</i></h4>
		
				<p><span class="eo">bona</span> : bon(ne) → <span class="eo">bonega</span> : excellent(e)</p>
				<p><span class="eo">bela</span> : beau (belle) → <span class="eo">belega</span> : splendide</p>
				<p><span class="eo">urbo</span> : ville → <span class="eo">urbego</span> : grande ville</p>
				<p><span class="eo">labori</span> : travailler →
				<span class="eo">laboregi</span> : travailler énormément</p>
		
				<h4>-em- : <i>indique le penchant, la tendance, la disposition</i></h4>
		
				<p><span class="eo">paroli</span> : parler → <span class="eo">parolema</span> : bavard(e)</p>
				<p><span class="eo">agi</span> : agir → <span class="eo">agema</span> : actif, active ; entreprenant(e)</p>
				<p><span class="eo">timi</span> : craindre → <span class="eo">timema</span> : craintif,(-ive) ; timide</p>
		
		
				<h4>mis- : <i>indique l'erreur, la maladresse</i></h4>
		
				<p><span class="eo">kompreni</span> : comprendre → <span class="eo">miskompreni</span> : mal comprendre</p>
				<p><span class="eo">paŝo</span> : (un) pas → <span class="eo">mispaŝo</span> : un faux pas</p>
			</section>

		<?php 
		} // fin section 2
		if ($section=="3") {
		?>

			<div class="vortlisto row">
				<div class="col s12 l6">
					<p><span class="eo">aventuro</span> : aventure</p>
					<p><span class="eo">danĝero</span> : danger</p>
					<p><span class="eo">danki</span> : remercier</p>
					<p><span class="eo">ege</span> : extrêmement</p>
					<p><span class="eo">emi</span> : incliner à</p>
					<p class="sekva"><span class="eo">ema</span> : ayant tendance à</p>
					<p><span class="eo">facila</span> : facile</p>
				</div>
				<div class="col s12 l6">
					<p><span class="eo">fidi</span> : faire confiance</p>
					<p><span class="eo">fuŝi</span> : faire rater, gâcher, bousiller</p>
					<p><span class="eo">reciproke</span> : réciproquement, mutuellement</p>
					<p><span class="eo">silenti</span> : être silencieux</p>
					<p class="sekva"><span class="eo">silento</span> : silence</p>
					<p><span class="eo">sinjoro</span> : monsieur</p>
					<p><span class="eo">ŝati</span> : apprécier, aimer</p>
				</div>
			</div>
					

		<?php 
		} // fin section 3
		if ($section=="4") {
		?>

			<fieldset class="ekzerco">
				<legend><b>Demandoj</b> </legend>
				<input>
				<div class="tasko">
				?>
				</div>
			</fieldset>

		<?php 
		} // fin section 4
		if ($section=="5") {
		?>

			<h3>xxxx</h3>

		<?php 
		} // fin section 5
		?>

		</section>
		
		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('GR',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('GR',$leciono,$section); ?>
				<?php getLecioneroVenonta('GR',$leciono,$section); ?>
			</div>
		</section>
		
	</article>
	
	<aside class="col s12 m10 l3 offset-m1 push-l1">
								
		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('GR',$leciono); 
			?>
		</ul>	
		
		<p>
			Elŝutu ĉiujn rakontojn (entute: 25) en unu dosiero:
			 <a href="<?php echo $vojo;?>fr/gerda/son/gerda-malaperis.zip">gerda-malaperis.zip</a>
		</p>
		
	</aside>
</div>

<?php include "gerdapiedo.inc.php"; ?>