<?php define('INCLUDE_CHECK', true);
session_start(); 
error_reporting(0);
?>
<head>
<title>Etherian Codex</title>
<link rel="stylesheet" href="css/kin_V_2.css">
</head>

<body>
<?php 
if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
    echo '<h1>The Etherian Codex</h1>';
} else {
    include "nav.php";
}
?>
<!-- A -->
<div class="box center" id="a">
<h1>A</h1>
</div>

<div class="glossary-box">
<a href="kin/angel.php">Angel</a>
</div>

<div class="glossary-box">
<a href="kin/sethian.php">Asethian</a>
</div>

<div class="glossary-box">
<a href="energy/aether.php">Aether (Energy)</a>
</div>

<!-- C -->
<div class="box center" id="c">
<h1>C</h1>
</div>

<div class="glossary-box">
<a href="em/chakras.php">Chakras</a>
</div>

<div class="glossary-box">
<a href="energy/cosmic.php">Cosmic (Energy)</a>
</div>

<!-- D -->
<div class="box center" id="d">
<h1>D</h1>
</div>

<div class="glossary-box">
<a href="energy/darkness.php">Darkness (Energy)</a>
</div>

<div class="glossary-box">
<a href="energy/death.php">Death (Energy)</a>
</div>

<!-- E -->
<div class="box center" id="e">
<h1>E</h1>
</div>

<div class="glossary-box">
<a href="energy/elements.php">Elements</a>
</div>

<div class="glossary-box">
<a href="em/es.php">Energy System</a>
</div>

<!-- G -->
<div class="box center" id="g">
<h1>G</h1>
</div>

<div class="glossary-box">
<a href="kin/ghoul.php">Ghoul</a>
</div>


<!-- K -->
<div class="box center" id="k">
<h1>K</h1>
</div>

<div class="glossary-box">
<a href="kin/kikiyaon.php">Kikiyaon</a>
</div>
<div class="glossary-box">
<a href="kin/kitsune.php">Kitsune</a>
</div>


<!-- L -->
<div class="box center" id="l">
<h1>L</h1>
</div>

<div class="glossary-box">
<a href="deity/thelady.php">The Lady</a>
</div>

<div class="glossary-box">
<a href="energy/light.php">Light (Energy)</a>
</div>

<div class="glossary-box">
<a href="deity/thelord.php">The Lord</a>
</div>

<div class="glossary-box">
<a href="energy/lunar.php">Lunar (Energy)</a>
</div>


<!-- N -->
<div class="box center" id="ln">
<h1>N</h1>
</div>

<div class="glossary-box">
<a href="kin/kitsune.php">Nogitsune</a>
</div>


<!-- S -->
<div class="box center" id="s">
<h1>S</h1>
</div>

<div class="glossary-box">
<a href="kin/sethian.php">Sethian</a>
</div>

<div class="glossary-box">
<a href="energy/solar.php">Solar (Energy)</a>
</div>

<!-- T -->
<div class="box center" id="t">
<h1>T</h1>
</div>

<div class="glossary-box">
<a href="kin/therian.php">Therian</a>
</div>

<div class="glossary-box">
<a href="energy/time.php">Time (Energy)</a>
</div>


<!-- V -->
<div class="box center" id="v">
<h1>V</h1>
</div>

<div class="glossary-box">
<a href="energy/void.php">Void (Energy)</a>
</div>
<div class="glossary-box">
<a href="kin/voidling.php">Voidling</a>
</div>

<div class="box center" id="disclaimer">
Please note that not all the information in this Codex is mine, and rights go to their original owners.
</div>



<!-- N 
<div class="box center" id="n">
<h1>N</h1>
</div>

<div class="glossary-box">
<a href="kin/nogitsune.php">Nogitsune</a>
</div>->

</body>