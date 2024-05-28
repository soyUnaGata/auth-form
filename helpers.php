<?php

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}