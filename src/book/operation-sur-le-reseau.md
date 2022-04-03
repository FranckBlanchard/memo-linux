
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
