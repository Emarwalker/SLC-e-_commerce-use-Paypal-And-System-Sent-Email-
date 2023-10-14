<?php

session_start();

unset($_SESSION["uid"]);

unset($_SESSION["name"]);

unset($_SESSION["l_name"]);

unset($_SESSION["email"]);

unset($_SESSION["phone"]);

unset($_SESSION["address1"]);

unset($_SESSION["address2"]);

header("location:index.php");

?>