<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if($_POST["name"]) {
    echo "<h1>" . $_POST["name"] . "</h1>";
}

if($_POST["surname"]) {
    echo "<h1>" . $_POST["surname"] . "</h1>";
}