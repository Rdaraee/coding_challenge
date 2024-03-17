<?php
namespace Verso;

require 'vendor/autoload.php';

use Verso\App\FizzBuzz;
use Verso\App\SimpleView;

try
{
    $fizzBuzz = new FizzBuzz();
    $result = $fizzBuzz->operate(1, 100);
    echo SimpleView::render($result);
}
catch(\Exception $e) {
    echo "Error: " . $e->getMessage();
}


