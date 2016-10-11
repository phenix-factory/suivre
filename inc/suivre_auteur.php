<?php

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function inc_suivre_auteur_dist($id_auteur_suivre, $id_auteur_source = null) {

	include_spip('action/editer_liens');

	if (is_null($id_auteur_source)) {
		include_spip('inc/session');
		$id_auteur_source = session_get('id_auteur');
	}

	objet_associer(
		array('auteur' => $id_auteur_source),
		array('auteur' => $id_auteur_suivre)
	);
}
