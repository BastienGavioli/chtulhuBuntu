<?php
foreach ($tab as $v)
    echo '<p> Dechet d\'id :' . '<a href="./index.php?controller=dechet&action=read&data=' . rawurlencode($v->getId()) . '">' . htmlspecialchars($v->getId()).'</a></p>';
?>
