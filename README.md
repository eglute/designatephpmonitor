# designatephpmonitor
Simple Designate PHP monitor

Install packages:
```
apt-get install apache2
apt-get install php
apt-get install libapache2-mod-php
```

Download designatemonitor in `/var/www/html/designatephpmonitor` path. Update `openrc` in `etc/openrc` with proper cloud info. 

Assuming your `/etc/apache2/sites-available000-default.conf` looks something like this:
```
<VirtualHost *:81>

        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/html
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

And `/etc/apache2/apache2.conf` has the following enabled:
```
AccessFileName .htaccess
```

You should be able to view the monitor page at a URL similar to this: `http://172.29.236.100:81/designatephpmonitor/dns.php`
And view something similar to the following output:

```
+-----------------------------------+--------------+--------+
| hostname                          | service_name | status |
+-----------------------------------+--------------+--------+
| aio1-designate-container-9489a023 | worker       | UP     |
| aio1-designate-container-9489a023 | producer     | UP     |
| aio1-designate-container-9489a023 | mdns         | UP     |
| aio1-designate-container-9489a023 | api          | UP     |
| aio1-designate-container-9489a023 | central      | UP     |
+-----------------------------------+--------------+--------+
```
