<?php

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
 }

function action_suivre_auteur_dist($arg = null) {
	if (is_null($arg)) {
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
	}

	$suivre_auteur = charger_fonction('suivre_auteur', 'inc');
	$suivre_auteur($arg);
}
