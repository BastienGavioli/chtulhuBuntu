<?php
echo '
<main>
<form method="get" action="index.php">
<fieldset>
		<h3>Dechet trouve</h3>
			<div>
			<label for="place"> Localisation (nom de la commune) : </label><br>
			<input type="text" id="position_id" name="place" required="*"  value="'.$position.'" required><br><br>
		</div>
		
		<div>
			<label for="vsblty"> Visibilité/Pollution visuelle sur un niveau de 0 à 5 : </label>
			<input type="number" id="quantite_id" name="vsblty" min="0" max="5">
		</div>

		<div>
			<label for="qtty"> Quantité de déchets : <br>
			<input type="radio" id="qtte" name="qtty">
  			<label for="qtty">Moins de 500 cm3</label><br>
  			<input type="radio" id="qtte" name="qtty">
 			<label for="qtty">Environ 500cm3</label><br>
 			<input type="radio" id="qtte" name="qtty">
 			<label for="qtty">666 cm3</label><br>
 			<input type="radio" id="qtte" name="qtty">
 			<label for="qtty">Sapristi ! C\'est le 7e continent !</label><br><br>
		</div>

<p>
  <input type="submit" value="Submit" />
</p>
<input type="hidden" name="controller" value="dechet">
<input type="hidden" name="type" value="'.$_GET["type"].'">
<input type="hidden" name="action" value="'. $updated_created .'">

</fieldset>
</form>
</main>
';
?>
