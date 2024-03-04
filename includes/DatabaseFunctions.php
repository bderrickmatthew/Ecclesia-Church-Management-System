<?php

/**
 * totalMembers
 *
 * @param  mixed $database
 * @return void
 */
function totalMembers($database)
{
    $query = $database->prepare('SELECT COUNT(*) FROM `members`');
    $query->execute();

    $row = $query->fetch();

    return $row[0];
}

/**
 * query
 *
 * @param  mixed $pdo
 * @param  mixed $sql
 * @param  mixed $parameters
 * @return void
 */
function query($pdo, $sql, $parameters = [])
{
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}
