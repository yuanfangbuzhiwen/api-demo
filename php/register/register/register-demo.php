<?php

require "../lib/httpclient.php";
use shumei\httpclient\SMCurl;
$mycurl = new SMCurl();
$mycurl->url = "http://api.fengkongcloud.com/v2/saas/register";
//set your own accessKey
$postData = array("accessKey"=>"xxxxxxxxxxxxxxxxxxxx", "data"=>array("registerTime"=>1477050308, "tokenId"=>"tokenId_test", "ip"=>"127.0.0.1")); 
$response = $mycurl->Post($postData);
print_r($response);
