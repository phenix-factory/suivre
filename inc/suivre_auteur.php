<?php

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


include_spip('suivre_fonctions');
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

function quitter_auteur($id_auteur_suivre, $id_auteur_source = null) {

	include_spip('action/editer_liens');
	$id_auteur_source = id_auteur_session($id_auteur_source);

	return objet_dissocier(
		array('auteur' => $id_auteur_source),
		array('auteur' => $id_auteur_suivre)
	);
}

/**
 * Renvoie un tableau contenant la liste des abonnements de l'auteur
 *
 * @param int $id_auteur (optionnel)
 * @access public
 * @return array
 */
function lister_abonnement_auteur($id_auteur = null) {
	include_spip('action/editer_liens');

	$id_auteur = id_auteur_session($id_auteur);

	$liens = objet_trouver_liens(
		array('auteur' => $id_auteur),
		array('auteur' => '*')
	);
	$liste_abonnement = array_column($liens, 'id_objet');

	return $liste_abonnement;
}

/**
 * Compte le nombre d'abonnements d'un auteur
 *
 * @param mixed $id_auteur (optionnel)
 * @access public
 * @return int
 */
function compter_abonnement_auteur($id_auteur = null) {
	$abonnement = lister_abonnement_auteur($id_auteur);
	return count($abonnement);
}
