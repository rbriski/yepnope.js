<?php
header("Expires: Thu, 31 Dec 2020 20:00:00 GMT");
header('Content-Type: text/javascript');
$qs = '';
if (isset($_GET['sleep'])) {
  sleep($_GET['sleep']);
  $qs = '?sleep=' . $_GET['sleep'];
}
echo 'window.' . basename($_SERVER['REQUEST_URI'], '.js' . $qs) . ' = true;';
