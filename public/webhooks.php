<?php
// GitHub Webhook Secret.
// Keep it the same with the 'Secret' field on your Webhooks / Manage webhook page of your respostory.
$secret = "123456zw~~";
// 项目根目录, 如: "/var/www/fizzday"
$path = "/home/wwwroot/ka.i5zw.com/ka/";
// Headers deliveried from GitHub

$HTTP_RAW_POST_DATA = file_get_contents('php://input');

$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'];
if ($signature) {
  $hash = "sha1=" . hash_hmac('sha1', $HTTP_RAW_POST_DATA, $secret);
  if (strcmp($signature, $hash) == 0) {
      $cmd = "/usr/bin/cd {$path} && /usr/bin/sudo /usr/bin/git pull origin master";
      $optput = shell_exec($cmd);
      echo "ok";
      exit();
  }else{
      echo 'false';
  }
}
http_response_code(404);
