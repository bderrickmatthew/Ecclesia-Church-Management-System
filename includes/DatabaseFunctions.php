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

/**
 * insertMember
 *
 * @param  mixed $pdo
 * @param  mixed $first_name
 * @param  mixed $middle_name
 * @param  mixed $last_name
 * @param  mixed $email
 * @param  mixed $gender
 * @param  mixed $occupation
 * @param  mixed $phone_num
 * @param  mixed $date_of_birth
 * @param  mixed $address
 * @param  mixed $membership_status
 * @return void
 */
function insertMember($pdo, $first_name, $middle_name, $last_name, $email, $gender, $occupation, $phone_num, $date_of_birth, $address, $membership_status)
{
    $query = 'INSERT INTO `members`(`first_name`,`middle_name`, `last_name`, `email`, `gender`, `occupation`, `phone_num`, `date_of_birth`, `address`, `membership_status`) VALUES (:first_name, :middle_name, :last_name, :email, :gender, :occupation, :phone_num, :date_of_birth, :address, :membership_status)';

    $parameters = [':first_name' => $first_name, ':middle_name' => $middle_name, ':last_name' => $last_name, ':email' => $email, ':gender' => $gender, ':occupation' => $occupation, ':phone_num' => $phone_num, ':date_of_birth' => $date_of_birth, ':address' => $address, ':membership_status' => $membership_status];

    query($pdo, $query, $parameters);
}
