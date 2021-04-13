<?php
spl_autoload_register(function($fileName) {
    if(file_exists("app/Controllers/{$fileName}.php")) {
        require_once("app/Controllers/{$fileName}.php");
    }else if(file_exists("app/Core/{$fileName}.php")){
        require_once("app/Core/{$fileName}.php");
    }else if(file_exists("app/Models/{$fileName}.php")){
        require_once("app/Models/{$fileName}.php");
    }else if(file_exists("app/Database/{$fileName}.php")) {
        require_once("app/Database/{$fileName}.php");
    }
});