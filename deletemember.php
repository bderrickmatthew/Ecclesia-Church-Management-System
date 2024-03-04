<?php

try
{
    include __DIR__ . '/includes/DatabaseConnection.php';

    $sql = 'DELETE FROM `members` WHERE `id` = :id';

    $stmt = $pdo->prepare($sql);

    $stmt->bindvalue(':id', $_POST['id']);
    $stmt->execute();

    header('location: members.php');

}
catch (PDOException $e)
{

    $title = "An error has occurred.";

    $output = "Unable to connect to the database server: " .
    $e->getMessage() . ' in ' . $e->getFile() . $e->getLine();
}

include __DIR__ . '/templates/layout.html.php';
