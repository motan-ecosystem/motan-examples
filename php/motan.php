<?php
require 'vendor/autoload.php';
define('MOTAN_PHP_ROOT', '/Volumes/g/idevz/code/www/motan-php-test/vendor/motan/motan-php/src/Motan/');
// define('MOTAN_PHP_ROOT', '/media/psf/g/idevz/code/www/motan-php-test/vendor/motan/motan-php/src/Motan/');
require MOTAN_PHP_ROOT . 'init.php';
$time = microtime(true);
define('FFF_TIME', $time);
define('IDS', '4128430025001588,4128430025001588,4128430025001588,4128430025001588,4128430025001588,4128430025001588,4128430025001588,4128430025001588,4128430025001588,4128430025001588');
// define('AGENT_RUN_PATH', '/media/psf/g/idevz/code/z/git/go/src/git.intra.weibo.com/openapi_rd/motan-go/main');
define('AGENT_RUN_PATH', '/media/psf/g/idevz/code/z/git/go/src/git.intra.weibo.com/openapi_rd/weibo-motan-go/main');
// define('D_CONN_DEBUG', '10.211.55.3:1234');
// define('D_AGENT_ADDR', '10.75.71.23:9981');

$url_str = 'motan2://127.0.0.1:9783/com.weibo.motan.status?group=idevz-test-static';
$url = new \Motan\URL($url_str);
$cx = new \Motan\Client($url);
// $rs = $cx->show_batch(['bigint'=>pack('N', 65793)]);
// $rs = $cx->show_batch(['bigint'=>pack('J', 18446744073709490000)]);
if (null === $rs) {
   print_r($cx->getResponseException());
}
// print_r($cx->getResponseHeader());
// print_r($cx->getResponseMetadata());
print_r($rs);
die;