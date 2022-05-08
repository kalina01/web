<?php 
namespace Pages;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class LogPage {
    public function get($text) {
        $log_path = dirname(__DIR__, 2) . '/log';
        if (isset($text)){
            $log = new Logger("Log");
            $log->pushHandler(new StreamHandler($log_path), Logger::INFO);
            $log->info($text);
        }        

        $view = "log.html.twig";
        $loader = new FilesystemLoader(dirname(__DIR__, 2) . '/views');
        $twig = new Environment($loader);

        $lines = explode("\n", file_get_contents($log_path));
        echo $twig->render($view, ['data' => $lines]);
    }
}