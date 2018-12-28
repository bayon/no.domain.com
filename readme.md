# no.domain.com

# Description
Features:
  - One-Click-Wordpress from Digital Ocean

### Installation

```sh

SETUP PROCESS:
Migrating Wordpress site to Digital Ocean

CREATE ONE-CLICK WORDPRESS DROPLET(example configs must be changed):
    wordpress-s-1vcpu-1gb-nyc1-01
    After creation of droplet you get an email with:
    Droplet Name: wordpress-s-1vcpu-1gb-nyc1-01
    IP Address: 198.199.81.8
    Username: root
    Password: 9176d63b4ea5bc754429e5888c  => newPassword1234
    (First login they ask you to change password)

DO THE WORDPRESS DEFAULT SITE REGISTRATION PROCESS
    go to the url and finish setting up WP

WORDPRESS 'ADMIN' USERNAME AND PASSWORD:
    site title: wp-vr-micro
    username: wp-vr-micro
    password: wp-vr-micro

GITHUB CONNECTION:



FIND HOSTING/DATABASE CREDENTIALS:
    Find the mysql user and pass in the wp-config.php file
    MYSQL DB INFO:
    define('DB_NAME', 'wordpress');
    define('DB_USER', 'wordpress');
    define('DB_PASSWORD', 'd46ad7dc643632eb7048ac669cda492107bd51c373d6783e');
    define('DB_HOST', 'localhost');
    define('DB_CHARSET', 'utf8');
    define('DB_COLLATE', '');


TRANSFER SQL TO DROPLET( that was converted by WP Migrate DB Plugin)
$    mysql -u wordpress -p wordpress < wp-vr-micro-wp_.sql
    password: d46ad7dc643632eb7048ac669cda492107bd51c373d6783e

TRANSFER THE FILES TO DROPLET:
$   scp -r wp-content root@198.199.81.8:/var/www/html 

TEST THE SITE:
http://198.199.81.8/
admin:
    username: bforte 
    password: bayonforte 

Transferring Droplet via Snapshot:
https://www.digitalocean.com/docs/images/snapshots/how-to/change-owners/
```

### Plugins

| Plugin | Description |
| ------ | ------ |
| WP Migrate DB | For migrating database SQL |
| ACF | Advanced Custom Fields required . |
| Fix Image Rotation | Fixes uploads from iphone. |
| Theme My Login | Styles admin login to match theme. |

 
To Do:
  - see Project Kanban: 

References:
  - 

