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
function suivre_autoriser(){}

function autoriser_suivre_auteur_dist($faire, $type, $id, $qui, $opt) {

	// Il faut être un véritable auteur
	if ($qui['id_auteur'] !== 0) {
		return false;
	}

	// On ne peu pas suivre quelqu'un que l'on suis déjà
	include_spip('inc/editer_liens');
}
