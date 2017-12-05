<?php
$client = new Yar_Client("http://10.211.55.2:8080/motan_yar/helloworld");
$client->SetOpt(YAR_OPT_PACKAGER, "PHP");
$result = $client->Hello(['name'=>'北京市市辖区东城区']);
$resultx = $client->Hellox('xxxxx');

print_r($result);
print_r($resultx);