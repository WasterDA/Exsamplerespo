<?PHP

require 'Controller/ViewController.php';
require 'vendor/autoload.php';

use ViewController\Controller;



//View Controller


$view = new TYPO3Fluid\Fluid\View\TemplateView();

// TemplatePaths object: a subclass can be used if custom resolving is wanted.
$paths = $view->getTemplatePaths();


$paths->setTemplateRootPaths([
    __DIR__ . '/Resources/Private/Templates/'
]);
$paths->setLayoutRootPaths([
    __DIR__ . '/Resources/Private/Layouts/'
]);
$paths->setPartialRootPaths([
    __DIR__ . '/Resources/Private/Partials/'
]);

$paths->setTemplatePathAndFilename(__DIR__ . '/Resources/Private/Layouts/Default.html');

$output = $view->render();
echo $output;
// Output using helper from view_init.php



?>


