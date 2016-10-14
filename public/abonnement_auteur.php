<?php

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Un critère pour n'avoir que les objets des auteurs auxquels on est abonné.
 *
 * @param mixed $idb
 * @param mixed $boucles
 * @param mixed $crit
 * @access public
 */
function critere_abonnement_auteur_dist($idb, &$boucles, $crit) {
	$boucle = &$boucles[$idb];
	$id_table = $boucle->id_table; // articles
	$primary = $boucle->primary; // id_article
	$objet = objet_type($id_table); // article


}
