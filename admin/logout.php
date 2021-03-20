<?php
session_start();
session_unset();#logout
header("Location:login.php");


?>