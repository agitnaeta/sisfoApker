###################
<h3>Starter Pack</h3>
###################
1. Helper 
2. Data tables
3. boostrap 
4. font awesome
5. select2
6. JS 
7. datepicker
8. form js

####################
<h3>.htaccess</h3>
####################
<IfModule mod_rewrite.c><br>
  RewriteEngine On<br>
  RewriteBase /nama_project<br>
  RewriteCond %{REQUEST_FILENAME} !-f<br>
  RewriteCond %{REQUEST_FILENAME} !-d<br>
  RewriteRule ^(.*)$ index.php?/$1 [L]<br>
</IfModule>
