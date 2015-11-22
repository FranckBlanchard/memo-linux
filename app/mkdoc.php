<?php
echo __DIR__;
/**
 * On charge l'autoloarder de composer
 */
$fileAutoload='../vendor/autoload.php';
if (file_exists($fileAutoload)) {
    include '$fileAutoload';
}

Twig_Autoloader::register();
$twigLoader=new Twig_Loader_Filesystem('templates');