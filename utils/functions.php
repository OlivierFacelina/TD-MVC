<?php

function render($path, $array = []) {
    extract($array);
    require_once('./views/'.$path);
    require_once('./views/template.php');
}  