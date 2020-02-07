//code by Bandit
//location v2
<?php
$json = (file_get_contents('php://input'));
$dejson = json_decode($json, true);
$location = $dejson['data'];
shell_exec("python3 send.py ".$location);
?>
