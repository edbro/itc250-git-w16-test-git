<?php
//item-test.php

/*

This serves as a resource for our second Group project

We are going to create some classes that represent food items for a food truck

*/


/* each class should have its own file */
include 'item.php';
$myItem = new Item('Borrito", "Includes awesome!', 7.95);

echo '<pre>';
var_dump($myItem);
echo '</pre>';
