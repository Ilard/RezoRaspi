### Création d'un répertoire partagé.


##### Création du répertoire partagé 'partage'.

Sur le serveur : 

```
technovz@technovz-serveur-rasp:~$ sudo mkdir /srv/nfs/user/partage
```


#### Permission pour le répertoire de partage.

Lien :
[https://www.pluralsight.com/blog/it-ops/linux-file-permissions](https://www.pluralsight.com/blog/it-ops/linux-file-permissions)

Tous les utilisateurs peuvent écrire et lire dans ce répertoire.

```
technovz@technovz-serveur-rasp:~$ sudo chmod ugo+rwx /srv/nfs/user/partage/
```


#### Vérification.

```
technovz@technovz-serveur-rasp:~$ ls -l /srv/nfs/user
...
drwxrwxrwx  2 root root  4096 juin  30 10:54 partage
...
```


#### Créer un raccourci sur le bureau Raspberry Pi.

```
pi@raspberry:~ $ ln -s /home/users/partage/
```

#### Vérification : 

```
pi@raspberry:~ $ ls -l Desktop/
total 0
lrwxrwxrwx 1 pi pi 20 juin  30 12:17 partage -> /home/users/partage/
```


### Modification de squelette de 'home.'

```
pi@raspberry:~ $ cd /etc/skel/
pi@raspberry:/etc/skel $ sudo mkdir Desktop
pi@raspberry:/etc/skel $ cd Desktop/
pi@raspberry:/etc/skel/Desktop $ sudo ln -s /home/users/partage/
pi@raspberry:/etc/skel/Desktop $ cd ..
pi@raspberry:/etc/skel $ sudo chown pi:pi Desktop/
```

#### A partir du serveur : 

```
technovz@technovz-serveur-rasp:~$ cd /srv/nfs/user/cachiere/Desktop/
technovz@technovz-serveur-rasp:/srv/nfs/user/cachiere/Desktop$
```

```
technovz@technovz-serveur-rasp:/srv/nfs/user/cachiere/Desktop$ sudo ln -s /home/users/partage/
```



