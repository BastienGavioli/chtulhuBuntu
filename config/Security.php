<?php
class Security {
    //private static $seed = '4cca42ae01';

	public static function hacher($texte_en_clair) {
        $seed = '4cca42ae01';
        $texte_en_clair = $seed . $texte_en_clair;
		$texte_hache = hash('sha256', $texte_en_clair);
		return $texte_hache;
	}
}
?>
