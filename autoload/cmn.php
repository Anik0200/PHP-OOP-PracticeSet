<?php

spl_autoload_register(function ($class) {
    require 'autoload/' . $class . '.php';
});

new first;
new second;
