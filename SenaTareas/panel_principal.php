<?php
include 'includes/header.php';


if ($_SESSION['rol'] == 'instructor') {
    echo('Biienvenido Instructor');
    require __DIR__.'/includes/panel_instructor.php';

} else {
    echo('Bienvenido Aprendiz');
    require __DIR__.'includes/panel_aprendiz.php';

}

?>

