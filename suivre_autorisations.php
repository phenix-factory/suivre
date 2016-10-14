<?php
/**
 * Définit les autorisations du plugin Suivre des auteurs
 *
 * @plugin     Suivre des auteurs
 * @copyright  2016
 * @author     Phenix
 * @licence    GNU/GPL
 * @package    SPIP\Suivre\Autorisations
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Fonction d'appel pour le pipeline
 * @pipeline autoriser */
function suivre_autoriser() {}


function autoriser_auteur_suivre_dist($faire, $type, $id, $qui, $opt) {

	// Il faut être un véritable auteur
	if (empty($qui['id_auteur'])) {
		return false;
	}
	// On ne peux pas ce suivre soit même
	if ($id == $qui['id_auteur']) {
		return false;
	}

	// On ne peu pas suivre quelqu'un que l'on suis déjà
	include_spip('action/editer_liens');
	$liens = objet_trouver_liens(
		array('auteur' => $qui['id_auteur']),
		array('auteur' => $id)
	);
	if (!empty($liens)) {
		return false;
	}

	return true;
}
