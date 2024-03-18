<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["usuario"])) {
        $_SESSION["user"] = $_POST["usuario"];
    }
}

$user = isset($_SESSION["user"]) ? $_SESSION["user"] : "";

echo '<h2>'.$user.'</h2><br>';

echo '<h2>'.$user.'</h2>';

if (!isset($_SESSION["id"])) {
    session_regenerate_id();
}
$_SESSION["id"] = session_id();

echo '<h1>'.$_SESSION["id"].'</h1>';
echo '<a href="logout.php" type="button" title="Log out" name="Ingresar">Log out</a>';