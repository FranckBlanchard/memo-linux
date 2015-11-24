<?php

/**
 * makeBookHtml.php
 *  
 */
use \Michelf\Markdown;

define('EOL', "\n");
// Répertoire des templates
$templateDir = __DIR__ . '/templates';
// Titre html pour le fichier html
$title = "memo linux";
// Fichier mardown a transformer
$mdFile = __DIR__ . "/../src/concat/Memo-Linux.md";
// Fichier html a créer
$htmlFile = __DIR__ . "/../build/html/memo-linux.html";
// Iniatilisation de la variable $mdContent avec le contenu du fichier a transformer
if (file_exists($mdFile)) {
    $mdContent = file_get_contents($mdFile);
} else {
    $mdContent = "## Le fichier $mdFile ne semble pas exister !";
}
// Date de création du document
$fuseauHoraire = new \DateTimeZone("America/Montreal");
$date = new \DateTime(date("Y-m-d H:i:s"), $fuseauHoraire);
// Template Twig a utiliser
$twigTemplate = "memo-linux.html.twig";
/**
 * Initialisation de l'autoloarder de composer
 */
$fileAutoload = __DIR__ . "/../vendor/autoload.php";
if (file_exists($fileAutoload)) {
    echo EOL . 'Chargement de l\'autoloader ' . $fileAutoload . EOL;
    require_once $fileAutoload;
} else {
    echo EOL . 'erreur de chargement de ' . $fileAutoload . EOL;
}
/**
 * Initialisation du parser markdown
 */
$htmlBook = Markdown::defaultTransform($mdContent);

/**
 * Initialisation du moteur de template Twig
 */
$loader = new Twig_Loader_Filesystem($templateDir);
$twig = new Twig_Environment($loader, array(
    "autoescape" => false
        ));
echo EOL . 'Génération de la page html' . EOL;
$html = $twig->render($twigTemplate, array(
    "htmlTitleBar" => $title,
    "htmlTitle" => $title,
    "dateCompilation" => $date->format("Y-m-d H:i:s"),
    "htmlFromMdFile" => $htmlBook
        ));

echo EOL . 'Enregistrement de la page ' . $htmlFile . EOL;
file_put_contents($htmlFile, $html);
