<?php
session_start();

echo '<h2>'.$_SESSION["user"].'</h2>';

$_SESSION["user"] = null;
$_SESSION["id"] = null;
session_unset();
session_destroy();
header("Location: index.php");

exit();