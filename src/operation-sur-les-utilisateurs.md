##Opération sur les Utilisateurs

Les commandes suivantes doivent être invoquées avec les droits d'administration.

###Ajouter un compte utilisateur

Il est impératif de consulter le manuel pour les options.

**useradd** *[option]* identifiant

###Supprimer un compte utilisateur

**userdel** utilisateur

###Supprimer un compte utilisateur et son répertoire personel

**userdel** *-r* utilisateur

####Note

Le fichier */etc/group* ne sera pas modifié, il faut supprimer les entrées concernant
l'utilisateur manuellement.

###Modifier un compte utilisateur

Les options varient en fonction des informations a modifier, consulter le manuel avant son utilisation.

**usermod** *[option]* identifiant
