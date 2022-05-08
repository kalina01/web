<?php 
namespace Pages;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class FormPage {
    public function get() {
        $view = "form.html.twig";
        $loader = new FilesystemLoader(dirname(__DIR__, 2) . '/views');
        $twig = new Environment($loader);
        echo $twig->render($view);
    }
}