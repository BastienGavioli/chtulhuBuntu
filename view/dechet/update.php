<?php
echo '
<form method="get" action="index.php">
<fieldset>
<legend>Ajouter un nouveau déchet:</legend>
<p>
  <label for="position_id">Position</label> :
  <input type="text" placeholder="Coordonnées des déchets" name="position" id="position_id" value="'.$position.'" required/>
</p>
<p>
  <label for="type_id">Type</label> :
  <input type="text" placeholder="Ex : Sachet plastique" name="type" id="type_id" value="'.$type.'" required/>
</p>
<p>
  <label for="quantite_id">Quantite (en g)</label> :
  <input type="float" placeholder="Ex : 15.2" name="quantite" id="quantite_id" value="'.$quantite.'" required/>
</p>
<p>
  <input type="submit" value="Submit" />
</p>
<input type="hidden" name="controller" value="dechet">
<input type="hidden" name="action" value="'. $updated_created .'">
</fieldset>
</form>
';
?>
