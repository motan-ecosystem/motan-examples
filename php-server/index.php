<?php
echo ">>> Motan-Mesh-CGI:" . PHP_EOL;
print_r($_SERVER);
print_r($_REQUEST);

// >>> Motan-Mesh-CGI:
// Array
// (
//     [USER] => www
//     [HOME] => /home/www
//     [MOTAN_M_p] => com.weibo.motan.HelloWorldService
//     [DOCUMENT_ROOT] => /media/psf/g/idevz/code/z/git/motan-examples/php-server
//     [SERVER_SOFTWARE] => Motan / CGI
//     [QUERY_STRING] => hello=motan-php
//     [MOTAN_SERIALIZATION] => simple
//     [MOTAN_M_g] => motan-server-mesh-example
//     [MOTAN_M_m] => Hello
//     [SCRIPT_FILENAME] => /media/psf/g/idevz/code/z/git/motan-examples/php-server/index.php
//     [REQUEST_METHOD] => GET
//     [MOTAN_M_pp] => motan2
//     [FCGI_ROLE] => RESPONDER
//     [PHP_SELF] =>
//     [REQUEST_TIME_FLOAT] => 1511945161.3896
//     [REQUEST_TIME] => 1511945161
// )
// Array
// (
//     [hello] => motan-php
// )