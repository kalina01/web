<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

use Pages\FormPage;
use Pages\LogPage;

$form_page = new FormPage();
$log_page = new LogPage();

if($_SERVER['REQUEST_URI'] === '/'){
    $form_page->get();
}else if($_SERVER['REQUEST_URI'] === '/log'){
    $text = $_POST['text'];
    $log_page->get($text);
}