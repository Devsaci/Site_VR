<?php ob_start() ?>

ici le contenu de la page d'accueil des Artistes
<?php
$content = ob_get_clean();
$titre = "Les artistes";
require "template.php";
?>