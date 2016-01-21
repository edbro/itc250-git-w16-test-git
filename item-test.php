<?php
//item-test.php

/*

This serves as a resource for our second Group project

We are going to create some classes that represent food items for a food truck

*/


/* each class should have its own file */
include 'item.php';

$myItem[] = new Item('Burrito', 'Includes awesome!', 7.95);
$myItem[] = new Item('Taco', 'Includes guacamole!', 4.95);
$myItem[] = new Item('Fried Ice Cream', 'Includes sprinkles', 3.95);

echo '<pre>';
var_dump($myItem);
echo '</pre>';
