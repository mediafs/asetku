<?php
require 'tes.php';
$ch = curl_init();
$headers = array(
    'X-Auth-Email: fsteamcyber@gmail.com',
    'X-Auth-Key: 81628a9dacae6961b2c52767f92c2bab5b269',
    'Content-Type: application/json',
);

$data = array(
    'type' => 'CNAME',
    'name' => $value['hostku'],
    'content' => $value['target'],
    'ttl' => '0',
);
$json = json_encode($data);
curl_setopt($ch, CURLOPT_URL, "https://api.cloudflare.com/client/v4/zones/7ed0026cbdc2f4814ac7f61b1c0f27a0/dns_records");
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_exec($ch);
curl_close($ch);
