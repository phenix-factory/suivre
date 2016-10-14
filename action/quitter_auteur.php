<?php

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function action_quitter_auteur_dist($arg = null) {
	if (is_null($arg)) {
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();

		include_spip('inc/suivre_auteur');
		quitter_auteur($arg);
	}
}
