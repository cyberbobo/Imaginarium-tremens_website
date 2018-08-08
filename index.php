<?php

echo "caca";

/* Redirection vers une page différente du même dossier */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'pages/accueil.html';
header("Location: http://$host$uri/$extra");
exit;

?>