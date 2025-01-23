<?php

// use Service\ExemploService
use Helper\ExemploHelper;
use Service\ExemploService;
use Validator\ExemploValidator;

// Definindo variaveis globais
define('DS', DIRECTORY_SEPARATOR);
define('DIR_APP', __DIR__);
// var_dump(DS);
// var_dump(DIR_APP);

// Criando um autoload de Classes
// require 'Classes/Service/ExemploService.php';
// require 'Classes/Helper/ExemploHelper.php';
require 'autoload.php';

$ExemploHelper = new ExemploHelper();
$xemploService = new ExemploService();
$ExemploValidator = new ExemploValidator();