<?php

require_once('function.php');

$test = new NewClass();

$test->setTest('Dit is de testvariabele');

echo "<h1>".$test->test."</h1>";