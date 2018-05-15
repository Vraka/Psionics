<?php defined('INCLUDE_CHECK') || die("Maybe if you throw your computer out the window...");

if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
    echo '<div class="box center">
        <img src="../img/class.png" style="width:10%;height:auto;float:left;">
        <img src="../img/vraka.png" style="width:30%;height:auto;">
        <h2>Incarnation</h2>
        <p>The Lord of the Nogitsune is currently incarnated as Vraka or Vali. Also, I made this website. Tada.</p>
        </div>';
} else {
    echo '<img src="../img/class.png" style="width:30%;height:auto;">';
}

?>
