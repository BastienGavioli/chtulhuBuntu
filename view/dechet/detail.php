<?php
  echo htmlspecialchars("Le dechet d'ID {$v->getId()} est un {$v->getType()}. La quantité trouvée en {$v->getPosition()} dans une quantité de {$v->getQuantite()} grammes.");
  echo '<br/>';
  echo '<a href="./index.php?controller=dechet&action=update&data='.htmlspecialchars(rawurlencode($v->getId())).'">Editer le déchet</a>';
  echo '<br/>';
  echo '<a href="./index.php?controller=decjet&action=delete&data='.htmlspecialchars(rawurlencode($v->getId())).'"> Supprimer le déchet de la base de données </a>';
?>
