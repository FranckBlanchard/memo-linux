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

**Note :** attention le client peut être configurer pour ne pas répondre a un ping

**ping** *-c 10*  google.ca

Affiche la route d'un paquet pour arriver a une adresse.

**traceroute**  google.com

Affiche la correspondance entre *adresse ip* et *mac adresse*

**arp** *-an*

Affiche les connexions ainsi que les processus correspondant. La commande **netstat** possède beaucoup d'options, voir la documentation en ligne.

**netstat** *-nap*
