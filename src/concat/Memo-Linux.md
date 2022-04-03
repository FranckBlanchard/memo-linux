
Pour obtenir plus d'information sur une commande, se référer aux pages du manuel de celle-ci, ou à l'aide en ligne.

## Pour obtenir de d'information sur une commande

**man** commande

Pour la majorité des commandes il est possible d'afficher de l'aide directement depuis la commande en faisant:

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
## Opération sur les répertoires

### Créer un répertoire

**mkdir** répertoire

### Effacer un répertoire vide
**rmdir** répertoire

### Effacer un répertoire de façon récurçive

**rm** *-r* répertoire

### Afficher les fichiers du répertoire courant

**ls**

### Afficher les fichiers du répertoire courant au format long

**ls** *-l*

### Afficher les fichiers du répertoire courant au format long ainsi que les fichiers cachés

**ls** *-la*

### Afficher le répertoire courant
**pwd**

### Changer de répertoire

**cd** repertoire

### Se positionner dans le répertoire parent

**cd** ..
### Se positionner à la racine du répertoire de l'utilisateur courant

**cd** ~

### Renommer ou déplacer un répertoire

**mv** source destination

## Opération sur les archives.

### Créer une archive avec tar

Créer l'archive compréssé *archive.tar.gz* en utilisant le programme gzip, de tous les fichiers contenus dans le répertoire *documents*.

**tar** *-zcvf*  archive.tar.gz  /documents

### Afficher le contenu d'une archive créé avec *tar*.

**tar** *-ztvf* archive.tar.gz

### Extraire les fichiers d'une archive créé avec *tar*.

**tar** *-xzvf* archive.tar.gz

## Opération sur les Utilisateurs

Les commandes suivantes doivent être invoquées avec les droits d'administration.

### Ajouter un compte utilisateur

Il est impératif de consulter le manuel pour les options.

**useradd** *[option]* identifiant

### Supprimer un compte utilisateur

**userdel** utilisateur

### Supprimer un compte utilisateur et son répertoire personel

**userdel** *-r* utilisateur

#### Note

Le fichier */etc/group* ne sera pas modifié, il faut supprimer les entrées concernant
l'utilisateur manuellement.

### Modifier un compte utilisateur

Les options varient en fonction des informations à modifier, consulter le manuel avant son utilisation.

**usermod** *[option]* identifiant

## Opération sur le système

### Système **Debian** et dérivé

Mettre à jour la liste des paquets disponibles

**apt-get** *update*

Mettre à jour les paquets déjà installé

**apt-get** *upgrade*

Installation d'un paquet

**apt-get** *install* paquet

**dpkg** *-i* paquet

Déinstallation d'un paquet

**apt-get** *remove* paquet

**dpkg** *-r* paquet

Pour supprimer les fichiers de configuration.

**apt-get** *--purge remove* paquet

**dpkg** *-P* paquet

Afficher la liste des paquets installés

**dpkg** --get-selections | less

Recherche d'une chaînes de caractères «chaine» dans les paquets connus.

**apt-cache** search chaîne

 Recherche d'une chaînes de caractères «chaîne» dans le nom d'un paquet.

**apt-cache** showpkg chaîne

## Opération sur le réseau.

### Carte réseau

**ifconfig** permet de gérer les cartes réseaux.

Afficher les cartes réseaux disponibles.

**ifconfig**

### Les routes.

La commande **route** permet de gérer les routes du noyau.

Affiche la table de routage du noyau.

**route**

### Tester le réseau.

Vérifie 10 fois si un client réseau est disponible.

**Note :** attention le client peut être configurer pour ne pas répondre à un ping

**ping** *-c 10*  google.ca

Affiche la route d'un paquet pour arriver a une adresse.

**traceroute**  google.com

Affiche la correspondance entre *adresse ip* et *mac adresse*

**arp** *-an*

Affiche les connexions ainsi que les processus correspondants. La commande **netstat** possède beaucoup d'options, voir la documentation en ligne.

**netstat** *-nap*

### Connexion à distance.

SSH (Secure shell) est un protocole de communication sécurisé basé sur un système de clés. C'est aussi un programme, qui va permetre d'ouvrir un terminal sur une machine distante.
Son installion vient avec d'autres programmes pour notamment générer les clés, les copier etc...

Se connecter sur la machine à l'adresse **domaine.com**

**ssh** *login@domaine.com* ou **ssh** *login@172.217.13.110*

Génère une paire de clé, privé et public.
Le programme vous demandera une passphrase pour sécuriser les clés.
Il vous demandera aussi le nom des clés a générer. Il faut indiquer le chemin complet ainsi que le nom.
Habituellement on les sauvegarde dans */home/user/.ssh/nom_de_la_cle* .

**ssh-keygen** *-t rsa* *-b 4096*

**Backup**
rsync -avz -e "ssh -p 22" utilisateur@serveur2:/chemin/source/ /chemin/destination/

## Copyright et license

Memo-Linux Copyright (c) 2015-2021 Franck Blanchard

All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

This software is provided by the copyright holders and contributors "as is" and any express or implied warranties, including, but not limited to, the implied warranties of merchantability and fitness for a particular purpose are disclaimed. In no event shall the copyright owner or contributors be liable for any direct, indirect, incidental, special, exemplary, or consequential damages (including, but not limited to, procurement of substitute goods or services; loss of use, data, or profits; or business interruption) however caused and on any theory of liability, whether in contract, strict liability, or tort (including negligence or otherwise) arising in any way out of the use of this software, even if advised of the possibility of such damage.
