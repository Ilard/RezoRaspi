### Configuration VNC.


#### Activation du serveur VNC.

A partir de chaque Raspberry, avec l'utilisateur 'pi', activer 'VNC' : 

```
pi@raspberry:~ $ sudo raspi-config
```


#### Test 

- Depuis un Raspberry, se connecter avec un utilisateur, le serveur VNC est alors activé.

- Depuis le serveur, lancer le client VNC :

```
technovz@technovz-serveur-rasp:~$ vncviewer
```

- Se connecter sur le Raspberry avec son adresse ip fixe.

- Taper le login 'pi' pour visualiser le bureau du Raspberry.


#### Création du lanceur sur le bureau.

```
technovz@technovz-serveur-rasp:~$ cp /usr/share/applications/realvnc-vncviewer.desktop ~/Bureau/
```


#### Activation du lancement

Lien : 
[https://linuxconfig.org/how-to-create-desktop-shortcut-launcher-on-ubuntu-20-04-focal-fossa-linux](https://linuxconfig.org/how-to-create-desktop-shortcut-launcher-on-ubuntu-20-04-focal-fossa-linux)

Dans le menu contextuel du nouvel icône "realvnc-vncviewer.desktop", sélectionner : Autoriser le lancement
L'icône est maintenant intitulé : VNCViewer


#### Lancement de l'application.

Cliquer 2 fois sur l'icône "VNCViewer".
