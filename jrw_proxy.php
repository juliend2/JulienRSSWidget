<?php
$curlsess = curl_init($_GET['rsswidget_url']);
curl_setopt($curlsess, CURLOPT_HEADER, false);
curl_setopt($curlsess, CURLOPT_RETURNTRANSFER, true);
$xml = curl_exec($curlsess);
header("Content-Type: text/xml");
echo $xml;
curl_close($curlsess);