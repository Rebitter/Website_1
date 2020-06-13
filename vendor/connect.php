<?php

    $connect = mysqli_connect('localhost', 'root', '123', 'mysite');

    if (!$connect) {
        die('Error connect to DataBase');
    }