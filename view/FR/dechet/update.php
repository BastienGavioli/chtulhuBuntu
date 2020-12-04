<?php
echo '
<main>
<form method="get" action="index.php">
<fieldset>
		<h3>Dechet trouve</h3>
			<div><!--1-->
			<label for="position"> Localisation (nom de la commune) : </label><br><!--7-->
			<input type="text" id="position_id" name="position" required="*" required><br><br>
		</div><!--8-->
		
		<div>
			<label for="visuel"> Visibilité/Pollution visuelle sur un niveau de 0 à 5 : </label>
			<input type="number" id="visuel_id" name="visuel" min="0" max="5"><!--et 5 ! ça donne 1785 ! date de dissolution permanente par le gouvernement Bavarois-->
		</div>

		<div>
			<label for="quantite"> Quantité de déchets : <br>
			<input type="radio" id="qtte" name="quantite">
  			<label for="quantite">Moins de 500 cm3</label><br>
  			<input type="radio" id="qtte" name="quantite">
 			<label for="quantite">Environ 500cm3</label><br>
 			<input type="radio" id="qtte" name="quantite">
 			<label for="quantite">666 cm3</label><br><!--666 encore une fois, se référé à apropos ! (j\'ai commencé à commenter à l\'envers désolée)-->
 			<input type="radio" id="qtte" name="quantite">
 			<label for="quantite">Sapristi ! C\'est le 7e continent !</label><br><br>
		</div>


<input type="hidden" name="controller" value="dechet">
<input type="hidden" name="action" value="'. $updated_created .'">
<input type="hidden" name="type" value="'.$_GET["type"].'">
<p>
  <input type="submit" value="Envoyer" />
</p>
</fieldset>
</form>
</main>
';
?>
