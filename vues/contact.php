<?php

include_once('modeles/contact.php');
?>

<!-- formulaire de contact -->
	<form class="container">
		<div class="row d-flex justify-content-between">
			<!-- premiere colonne celle de gzuche pour la MAP -->
			<div  class="col-md-5 d-flex align-items-start flex-column map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.9823948706885!2d-0.5850352488184279!3d44.84229188264195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527e77936472d%3A0x2854ac5dbdd54926!2sSoci%C3%A9t%C3%A9+Philomathique+de+Bordeaux!5e0!3m2!1sfr!2sfr!4v1522916086755" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
 				<p class="d-flex align-items-start flex-column">Notre addresse : 66 Rue Abbé de l'Épée, 33000 Bordeaux</p>
				
			</div>
			<!-- div pour le trait entre les deux div col-md-5 -->
			<div class="milieu">
				
			</div>

			<!-- deuxième colonne celle de droite pour le formulaire de CONTACT -->
			<div class="col-md-5 ">
			  <div class="form-group m-0">
			    <label for="exampleFormControlInput1">Email address</label>
			    <input name="prenom" type="text" class="form-control" id="" placeholder="Votre Prénom">
			  </div>
			  <div class="form-group m-0">
			    <label for="exampleFormControlInput1">Email address</label>
			    <input name="nom" type="text" class="form-control" id="" placeholder="Votre Nom">
			  </div>
			  <div class="form-group m-0">
			    <label for="exampleFormControlInput1">Objet</label>
			    <input name="email" type="email" class="form-control" id="" placeholder="Objet">
			  </div>
			  <div class="form-group m-0">
			    <label for="exampleFormControlInput1">Email address</label>
			    <input name="email" type="email" class="form-control" id="" placeholder="name@example.com">
			  </div>
			  <div class="form-group m-0">
			    <label for="exampleFormControlTextarea1">Example textarea</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" ></textarea>
			    <input class="btn btn-secondary" type="submit" value="Submit">
			  </div>
			</div>
		</div>
		
	</form>
	


