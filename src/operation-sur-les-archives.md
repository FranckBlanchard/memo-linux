##Opération sur les archives.
###Créer une archive avec tar

Créer l'archive compréssé *archive.tar.gz* en utilisant le programme gzip, de tous les fichiers contenus dans le répertoire *documents*.

**tar** *-zcvf*  archive.tar.gz  /documents

###Afficher le contenu d'une archive créé avec *tar*.

**tar** *-ztvf* archive.tar.gz

###Extraire les fichiers d'une archive créé avec *tar*.

**tar** *-xzvf* archive.tar.gz
