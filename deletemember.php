<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=ecms;charset=utf8', 'root', '');

    # Set the PDO attribute that controls the error mode (PDO::ATTR_ERRMODE) to the
    # mode that throws exceptions (PDO::ERRMODE_EXCEPTION).
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
