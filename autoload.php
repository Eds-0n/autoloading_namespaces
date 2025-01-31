<?php

function autoload($classe)
{
    $diretorioBase = DIR_APP . DS;
    $classe = $diretorioBase . 'Classes' . DS . str_replace('\\', DS, $classe) . '.php';
    // var_dump($classe);exit;

    if (file_exists($classe) && !is_dir($classe)) {
        include $classe;
    }
}

spl_autoload_register('autoload');