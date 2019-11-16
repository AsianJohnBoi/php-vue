# DirScanner

Scans image files inside of a given folder '/images' and displays details  (Filename, Date, Size, Thumbnail) in a table. Clicking on a thumbnail will show a preview. Client side was developed in Vue.JS. Server-side uses Apache2 with PHP interpreter (libapache2_mod_php). 



### Folders

There are two folders:

- Development - For developing Vue framework.
- docs (Production) - Built for immediate deployment on a server.



### Deployment

Linux (Debian) install:

```
sudo apt-get update
sudo apt-install apache2
sudo apt-install libapache2-mod-php

# Copy production/ contents to /var/www/html
sudo cp production/* /var/www/html/

# Go to localhost IP
```

Windows and Mac:

XAMPP can be used to run this project.

https://www.apachefriends.org/index.html
