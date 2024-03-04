<?php

// include the file that creates the $pdo variable and connection
include_once __DIR__ . '/includes/DatabaseConnection.php';

// include the file that provides the `totalMembers` function
include_once __DIR__ . '/includes/DatabaseFunctions.php';

// call the function
echo totalMembers($pdo);
