
## Opération sur le système

### Système **Debian** et dérivé

#### Mettre à jour la liste des paquets disponibles

**apt-get** *update*

#### Mettre à jour les paquets déjà installé

**apt-get** *upgrade*

#### Installation d'un paquet

**apt-get** *install* paquet

**dpkg** *-i* paquet

#### Déinstallation d'un paquet

**apt-get** *remove* paquet

**dpkg** *-r* paquet

Pour supprimer les fichiers de configuration.

**apt-get** *--purge remove* paquet

**dpkg** *-P* paquet

#### Afficher la liste des paquets installés

**dpkg** --get-selections | less

#### Recherche d'une chaînes de caractères «chaine» dans les paquets connus.

**apt-cache** search chaîne

#### Recherche d'une chaînes de caractères «chaine» dans le nom d'un paquet.

**apt-cache** showpkg chaîne
