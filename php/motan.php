<?php
require 'vendor/autoload.php';
define('MOTAN_PHP_ROOT', '/media/psf/g/idevz/code/z/git/motan-examples/php/vendor/motan/motan-php/src/Motan/');
require MOTAN_PHP_ROOT . 'init.php';
$time = microtime(true);
define('FFF_TIME', $time);
define('AGENT_RUN_PATH', '/media/psf/g/idevz/code/z/git/motan-examples/weibo-mesh');


// define('D_CONN_DEBUG', '10.211.55.3:2234');
// // define('D_AGENT_ADDR', '10.75.71.23:9981');
// $url_str = 'motan2://127.0.0.1:9783/com.weibo.motan.HelloWorldService?group=motan-openresty-example';
// $url = new \Motan\URL($url_str);
// $cx = new \Motan\Client($url);
// $rs = $cx->Hello(['hello'=>'motan-php']);
// if (null === $rs) {
//    print_r($cx->getResponseException());
// }
// // print_r($cx->getResponseHeader());
// // print_r($cx->getResponseMetadata());
// print_r($rs);
// die;


define('D_CONN_DEBUG', '10.211.55.3:8100');
// define('D_AGENT_ADDR', '10.75.71.23:9981');
$url_str = 'motan2://127.0.0.1:9783/com.weibo.motan.HelloWorldService?group=motan-go-example';
$url = new \Motan\URL($url_str);
$cx = new \Motan\Client($url);
$rs = $cx->Hello(['hello'=>'motan-php']);
if (null === $rs) {
   print_r($cx->getResponseException());
}
// print_r($cx->getResponseHeader());
// print_r($cx->getResponseMetadata());
print_r($rs);
die;