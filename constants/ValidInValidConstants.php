<?php
    //Good Practise 1: Always use UPPERCASE to define constants
    define( LANGUAGE, "PHP");
    define( VERSION, 7.3);

    //Good Practise 2: Do not use constants like __CONSTANT__
    define( __CONSTANTS__, "Wrong Practise");

    //Good Practise 3: Avoid the same name as Variable to avoid confusion
    $name = "John, Smith";
    define(NAME, "John, Smith");

    //Good Practise: Use the same naming convention
    //Do not start variable or constant name with integers
    $_1message = "Hello";
    define ($_1message, "Hello" );
    echo $_1message . _1message;


