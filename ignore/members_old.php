<?php

try
{

    $pdo = new PDO('mysql:host=localhost;dbname=ecms;charset=utf8', 'root', '');

    # Set the PDO attribute that controls the error mode (PDO::ATTR_ERRMODE) to the
    # mode that throws exceptions (PDO::ERRMODE_EXCEPTION).
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT * FROM `members`';

    //$result = $pdo->query($sql);
    $members = $pdo->query($sql);

    //while ($row = $result->fetch()) {
    //		$members[] = $row;
    //}

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
