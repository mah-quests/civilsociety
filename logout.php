<?php
session_start(); //start session
session_destroy(); // distroy all the current sessions
$url = 'request.php?res_id=48';
header('Location: ' . $url); // redireted to login page

?>