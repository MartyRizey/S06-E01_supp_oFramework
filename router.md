# Router

#### Principe d'un `router` en php, c'est de délocaliser la partie traitement des URL côtè PHP.
https://www.grafikart.fr/tutoriels/php/router-628
---

Ce que l'on souhaiterait c'est avoir des URL propres. Par exemple quand on consulte une page d'article, on peut avoir une URL de ce type :

> - http://local.dev/Lab/Router/index.php`?page=article&id=1&slug=salut-les-gens`

Pour améliorer la réecriture de ces URL, on va utiliser _.htaccess_ ou autre, pour avoir une URL de ce type :

> - http://local.dev/Lab/Router`/article/salut-les-gens-3`

Pour éviter d'avoir à travailler sur ou dans _htaccess_, car cela rend les modification difficle. On va donc tout déléguer à PHP, c'est à dire que PHP recevra cette URL :

> - http://local.dev/Lab/Router`/article/salut-les-gens-3`

Et, il s'occupera de la parser(analyser) pour savoir ce qu'il doit exécuter. Derrière il va chercher les codes, les paramètres et autres...
- parser : https://fr.wikipedia.org/wiki/Analyse_syntaxique
