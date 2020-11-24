<?php ob_start() ?>
ici le contenu de la page Liste des Disques

<?php
$content = ob_get_clean();
$titre = "Liste des disques";
require "template.php";
?>