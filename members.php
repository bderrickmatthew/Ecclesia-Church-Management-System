<?php

try
{

    include __DIR__ . '/includes/DatabaseConnection.php';
    include __DIR__ . '/includes/DatabaseFunctions.php';

    $sql = 'SELECT * FROM `members`';

    $members = $pdo->query($sql);

    $title = 'List of Members';

    ob_start(); // start the buffer

    // include the template. the PHP code will be executed,
    // but the resulting HTML will be stored in the buffer
    // rather than sent to the browser.

    include __DIR__ . '/templates/members.html.php';

    $output = ob_get_clean();


}
catch (PDOException $e)
{

    $output = 'Unable to connect to database server: ' .
    $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}

include __DIR__ . '/templates/layout.html.php';
