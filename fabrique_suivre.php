<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2016-10-10 23:45:02
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined("_ECRIRE_INC_VERSION")) return;

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'suivre',
    'nom' => 'Suivre des auteurs',
    'slogan' => 'Fonction pour la gestion des liens entre des auteurs',
    'description' => '',
    'version' => '1.0.0',
    'auteur' => 'Phenix',
    'auteur_lien' => 'http://p.henix.be',
    'licence' => 'GNU/GPL',
    'categorie' => 'communication',
    'etat' => 'dev',
    'compatibilite' => '[3.1.3;3.1.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => 'Configuration de la gestion des liens entre auteurs',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'options',
      3 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => '',
  ),
  'objets' => 
  array (
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
    ),
  ),
);