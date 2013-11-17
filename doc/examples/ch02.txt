chapter: Installation
==================

<?php phpinfo(  ); ?>

    
    
====================================

sudo vi /etc/httpd/httpd.conf

    
    
====================================

%s/#LoadModule php/LoadModule php/

    
    
====================================

%s/#AddModule php/addModule php/

    
    
====================================

:%s/index.html/index.html index.php/

    
    
====================================

Include /private/etc/httpd/users

    
    
====================================

<IfModule mod_php4.c>
AddType application/x-httpd-php .php
AddType application/x-httpd-php .php4
AddType application/x-httpd-php-source .phps
</IfModule>

    
    
====================================

<escape>:wq

    
    
====================================

vi ~/Sites/test.php
o
<?php phpinfo(  ) ?>
<escape>:wq

    
    
====================================

extension_dir = C:\php\extensions
extension=php_mysql.dll

    
    
====================================

sudo apt-get install mysql
sudo apt-get install mysql-client
daemonic enable mysql

    
    
==================