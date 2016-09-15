<?php

/*
 * How to use Magic Function __destruct();
 * 
 * print_r() is used for printing the array in human readable format. 
 * they both are language constructs. echo returns void and print returns 1. 
 * echo is considered slightly faster than print
 * 
 * */

class MyDestructableClass {

    function __construct() {
        print "In constructor </br>";
        $this->name = "MyDestructableClass";
    }

    function __destruct() {
        print "Destroying " . $this->name . "</br>";
    }

}

$obj = new MyDestructableClass();
