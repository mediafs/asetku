<?php
$json    = file_get_contents('../fsdomain.json');
$data    = json_decode($json, true);
//echo $json['target'];
echo "mohon tunggu ;) (fsteam ID Bot Lagi Bekerja)";
echo "\n";
foreach ($data as $value) {
echo "HOST : ".$value['hostku']."\n";
echo "Target : ".$value['target']."\n";
echo "\n";
}
