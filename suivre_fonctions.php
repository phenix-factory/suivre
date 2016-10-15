<?php
/**
 * Fonctions utiles au plugin Suivre des auteurs
 *
 * @plugin     Suivre des auteurs
 * @copyright  2016
 * @author     Phenix
 * @licence    GNU/GPL
 * @package    SPIP\Suivre\Fonctions
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

// Include l'API pour la balise
include_spip('inc/suivre_auteur');

/**
 * Test l'existence d'un id_auteur. Sinon, va chercher celui de la session
 *
 * @param mixed $id_auteur
 * @access public
 * @return mixed
 */
function id_auteur_session($id_auteur) {

	if (is_null($id_auteur_source)) {
		include_spip('inc/session');
		return session_get('id_auteur');
	} else {
		return $id_auteur;
	}
}

function balise_ABONNEMENT_AUTEUR_dist($p) {
	$p->code = "lister_abonnement_auteur()";

	return $p;
}
