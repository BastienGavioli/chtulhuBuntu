<?php
echo '
<main>
<form method="get" action="index.php">
<fieldset>
		<h3>Waste found</h3>
			<div>
			<label for="position"> Location (name of the nearest city) : </label><br>
			<input type="text" id="position_id" name="position" required="*" required><br><br>
		</div>
		
		<div>
			<label for="visuel"> Visibility / visual pollution on a scale of 0 to 5 : </label>
			<input type="number" id="visuel_id" name="visuel" min="0" max="5">
		</div>

		<div>
			<label for="quantite"> Quantity of waste : <br>
			<input type="radio" id="qtte" name="quantite">
  			<label for="quantite">Less than 500 cm3</label><br>
  			<input type="radio" id="qtte" name="quantite">
 			<label for="quantite">Approximately 500cm3</label><br>
 			<input type="radio" id="qtte" name="quantite">
 			<label for="quantite">666 cm3</label><br>
 			<input type="radio" id="qtte" name="quantite">
 			<label for="quantite">Sacrebleu ! It\'s the 7th continent!</label><br><br>
		</div>


<input type="hidden" name="controller" value="dechet">
<input type="hidden" name="action" value="'. $updated_created .'">
<input type="hidden" name="type" value="'.$_GET["type"].'">
<p>
  <input type="submit" value="Submit" />
</p>
</fieldset>
</form>
</main>
';
?>
