<?php
namespace App;

class ClassOne {
    public function __construct()
    {
        echo 'Hello ' . __CLASS__ . '<br>';
    }
}