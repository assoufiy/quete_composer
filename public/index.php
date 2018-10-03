<?php
/**
 * Created by PhpStorm.
 * User: younesform
 * Date: 02/10/18
 * Time: 17:49
 */

// chargement de l'autoload en début de fichier
require __DIR__ . '/../vendor/autoload.php';
//...


$talk1 = new \Wcs\Hello();
echo $talk1->talk();
$talk2 = new \HelloWorld\SayHello();
echo $talk2->world();





?>

