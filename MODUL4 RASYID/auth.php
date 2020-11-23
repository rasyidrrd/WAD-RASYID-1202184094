<?php

session_stop();
if(!isset($_SESSION["user"])) header("Location: login.php");
?>