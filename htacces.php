RewriteEngine On
ErrorDocument 404 /VIEW/pages/error.phtml
ErrorDocument 400 /VIEW/pages/error.phtml
ErrorDocument 401 /VIEW/pages/error.phtml
ErrorDocument 403 /VIEW/pages/error.phtml
ErrorDocument 500 /VIEW/pages/error.phtml

RewriteRule ^.*c-([0-9-a-z]+)\/$ index.php?accion=$1 [S]
RewriteRule ^.*c-([0-9-a-z]+)/*/v-([0-9]+)\/$ index.php?accion=$1&valor=$2 [L]