<?php

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Suivre un auteur
 *
 * @param int $id_auteur_suivre
 * @param int (optionnel) $id_auteur_source S'il n'y en a pas, celui présent
 * dans la session sera utilisé
 * @access public
 */
function inc_suivre_auteur_dist($id_auteur_suivre, $id_auteur_source = null) {

	include_spip('action/editer_liens');
	$id_auteur_source = id_auteur_session($id_auteur_source);

	return objet_associer(
		array('auteur' => $id_auteur_source),
		array('auteur' => $id_auteur_suivre)
	);
}

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

function quitter_auteur($id_auteur_suivre, $id_auteur_source = null) {

	include_spip('action/editer_liens');
	$id_auteur_source = id_auteur_session($id_auteur_source);

	return objet_dissocier(
		array('auteur' => $id_auteur_source),
		array('auteur' => $id_auteur_suivre)
	);
}
