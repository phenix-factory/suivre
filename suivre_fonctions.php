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

	if (is_null($id_auteur)) {
		include_spip('inc/session');
		return session_get('id_auteur');
	} else {
		return $id_auteur;
	}
}

function balise_ABONNEMENT_AUTEUR_dist($p) {
	$id_auteur = interprete_argument_balise(1, $p);
	if (empty($id_auteur)) {
		$id_auteur = champ_sql('id_auteur', $p);
	}

	$p->code = "lister_abonnement_auteur($id_auteur)";
	return $p;
}

function balise_ABONNE_AUTEUR_dist($p) {
	$id_auteur = interprete_argument_balise(1, $p);
	if (empty($id_auteur)) {
		$id_auteur = champ_sql('id_auteur', $p);
	}

	$p->code = "lister_abonne_auteur($id_auteur)";
	return $p;
}

function balise_COMPTEUR_ABONNEMENT_dist($p) {
	$id_auteur = interprete_argument_balise(1, $p);
	if (empty($id_auteur)) {
		$id_auteur = champ_sql('id_auteur', $p);
	}

	$p->code = "compter_abonnement_auteur($id_auteur)";
	return $p;
}

function balise_COMPTEUR_ABONNE_dist($p) {
	$id_auteur = interprete_argument_balise(1, $p);
	if (empty($id_auteur)) {
		$id_auteur = champ_sql('id_auteur', $p);
	}

	$p->code = "compter_abonne_auteur($id_auteur)";
	return $p;
}

/**
 * Tester si un auteur en suis un autre
 *
 * @param int $id_auteur_suivre
 * @param int $id_auteur_source optionnel pris dans la session si null
 * @access public
 * @return bool
 */
function suivre_tester_lien($id_auteur_suivre, $id_auteur_source = null) {

	$id_auteur_source = id_auteur_session($id_auteur_source);

	// On ne peu pas suivre quelqu'un que l'on suis déjà
	include_spip('action/editer_liens');
	$liens = objet_trouver_liens(
		array('auteur' => $id_auteur_source),
		array('auteur' => $id_auteur_suivre)
	);
	if (!empty($liens)) {
		return false;
	} else {
		return true;
	}
}
