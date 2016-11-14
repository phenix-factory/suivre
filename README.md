# Suivre

Plugin SPIP pour ajouter la possibilité aux auteurs de ce "suivre" façon Twitter

La balise #ABONNEMENT_AUTEUR renvoie la liste des id_auteur

Deux actions SPIP sont disponible pour gérer les follow/unfollow :

* suivre_auteur
* quitter_auteur

une autorisation permet de testé si un auteur peu en suivre un autre.

Un peux de code :

```html
[(#REM)
Bouton suivre qui ce transforme automatiquement en "ne plus suivre"
]
[(#AUTORISER{suivre, auteur, #ID_AUTEUR}|oui|et{#SESSION{id_auteur}!={#ID_AUTEUR}|oui})
[(#BOUTON_ACTION{Suivre auteur, #URL_ACTION_AUTEUR{suivre_auteur, #ID_AUTEUR, #SELF}, button ajax, Suivre cet auteur ?})]
]

[(#AUTORISER{suivre, auteur, #ID_AUTEUR}|non|et{#SESSION{id_auteur}|!={#ID_AUTEUR}|oui})
[(#BOUTON_ACTION{Ne plus suivre, #URL_ACTION_AUTEUR{quitter_auteur, #ID_AUTEUR, #SELF}, button ajax, Ce désabonner ?})]
]
```

Une boucle pour récupérer les articles d'un auteur suivit : 

```html
<BOUCLE_storys(ARTICLES){id_auteur IN #ABONNEMENT_AUTEUR}>
...
</BOUCLE_storys>
```
