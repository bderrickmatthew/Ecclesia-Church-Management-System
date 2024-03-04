<?php

# change the below to fit your sql setup i.e password and user.
$pdo = new PDO('mysql:host=localhost;dbname=ecms;charset=utf8', 'root', '');

# Set the PDO attribute that controls the error mode (PDO::ATTR_ERRMODE) to the
# mode that throws exceptions (PDO::ERRMODE_EXCEPTION)

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
