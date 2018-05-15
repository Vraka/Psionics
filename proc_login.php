<?php
session_start();
if(isset($_POST['pass']) && $_POST['pass'] == "nevermore") {
    $_SESSION['login'] = true;
    header("Location: index.php");
} else {
    unset($_SESSION['login']);
    header("Location: index.php");
}
?>