# Memo Linux
Aide mémoire sur les commandes **Linux**.

Pour obtenir plus d'information sur une commande, se référer au pages du manuel de celle-ci, ou a l'aide en ligne.

## Pour obtenir de d'information sur une commande
**man** commande

Pour la majoritée des commandes il est possible d'afficher de l'aide directement depuis la commande en faisant:

**commande** *--help*
## Opération sur les fichiers.
### Créer un fichier.
**touch** fichier
### Supprimer un fichier.
**rm** fichier
### Copier un fichier.
**cp** fichier1 fichier2
### Afficher un fichier.
**cat** fichier
### Afficher un fichier avec un pager
**less** fichier

**more** fichier
### Afficher les *n* premières lignes d'un fichier
**head** *-n* fichier
### Afficher les *n* dernières lignes d'un fichier
**tail** *-n* fichier
### Renommer ou déplacer un fichier
**mv** source destination
##Opération sur les répertoires
###Créer un répertoire
**mkdir** répertoire
###Effacer un répertoire vide
**rmdir** répertoire
###Effacer un répertoire de façon récurçive
**rm** *-r* répertoire
###Afficher les fichiers du répertoire courant
**ls**
###Afficher les fichiers du répertoire courant au format long
**ls** *-l*
###Afficher les fichiers du répertoire courant au format long ainsi que les fichiers cachés
**ls** *-la*
###Afficher le répertoire courant
**pwd**
###Changer de répertoire
**cd** repertoire
###Se positionner dans le répertoire parent
**cd** ..
###Se positionner à la racine du répertoire de l'utilisateur courant
**cd** ~
###Changer  
###Renommer ou déplacer un répertoire
**mv** source destination
##Opération sur les archives.
###Créer une archive avec tar

Créer l'archive compréssé *archive.tar.gz* en utilisant le programme gzip, de tous les fichiers contenus dans le répertoire *documents*.

**tar** *-zcvf*  archive.tar.gz  /documents

###Afficher le contenu d'une archive créé avec *tar*.

**tar** *-ztvf* archive.tar.gz

###Extraire les fichiers d'une archive créé avec *tar*.

**tar** *-xzvf* archive.tar.gz
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
