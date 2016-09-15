<?php 
/*
 * How to use Magic Function __construct();
 * 
 * print_r() is used for printing the array in human readable format. 
 * they both are language constructs. echo returns void and print returns 1. 
 * echo is considered slightly faster than print
 * 
 * */

class BaseClass {

    function __construct() {
        print "In BaseClass constructor </br>";
    }

}

class SubClass extends BaseClass {

    function __construct() {
        parent::__construct();
        print "In SubClass constructor </br>";
    }

}

class OtherSubClass extends BaseClass {
    // inherits BaseClass's constructor
}

// In BaseClass constructor
$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();

// In BaseClass constructor
$obj = new OtherSubClass();
