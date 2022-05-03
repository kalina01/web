
<?php
spl_autoload_register(function ($class_name) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
    include $path;
});
use Classes\Class1;
use Classes\SubClasses\Class2;
$obj1 = new Class1();
$obj2 = new Class2();

$obj1->callClass1();
$obj2->callClass2();
?>
