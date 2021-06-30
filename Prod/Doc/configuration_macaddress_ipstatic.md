### Configuration des ip statiques par les adresses MAC


#### Fichier de configuration.

Ouvrir : 

```
/etc/dnsmasq.conf 
```


Ajouter : 

```
dhcp-host=dc:a6:32:b7:fe:da,192.168.1.1
dhcp-host=dc:a6:32:b7:fd:78,192.168.1.2 
dhcp-host=dc:a6:32:df:bf:b0,192.168.1.3
dhcp-host=dc:a6:32:df:bf:a1,192.168.1.4
dhcp-host=dc:a6:32:df:bf:b9,192.168.1.5
dhcp-host=dc:a6:32:df:bf:d4,192.168.1.6
dhcp-host=dc:a6:32:df:a8:37,192.168.1.7
dhcp-host=dc:a6:32:df:bf:e9,192.168.1.8
dhcp-host=dc:a6:32:df:bf:41,192.168.1.9
dhcp-host=dc:a6:32:df:bf:c2,192.168.1.10
dhcp-host=dc:a6:32:df:bf:bc,192.168.1.11
dhcp-host=dc:a6:32:df:bf:8f,192.168.1.12
dhcp-host=dc:a6:32:df:c1:00,192.168.1.13
dhcp-host=dc:a6:32:df:c0:0a,192.168.1.14
dhcp-host=dc:a6:32:df:bf:ef,192.168.1.15
dhcp-host=00:1b:a9:83:59:bc,192.168.1.101
```


#### Redémarrer le service DHCP.

```
technovz@technovz-serveur-rasp:~$ sudo systemctl restart dnsmasq
```


#### Vérification.

```
technovz@technovz-serveur-rasp:~$ sudo systemctl status dnsmasq.service
```
