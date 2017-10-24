<?php

require_once 'robot.php';

$robot1 = new robot ('ngik ngik',67);

$robot1->set_suara('ariz kasepak kuda');
$robot1->set_berat(120);


echo "suara robot berbunyi : " .$robot1->get_suara() .'<br>'.' Dan mempunyai berat :' .$robot1->get_berat().' kg' .'<br>';
?>