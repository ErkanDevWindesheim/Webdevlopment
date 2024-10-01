<?php

// views
$url = $_SERVER['REQUEST_URI'];

// echo $TEST;

if($url) {
    if($url . 'contact.html') {
        require('views/contact.html');
    }

    if($url . 'about.html') {
        require('views/about.html');
    }
}