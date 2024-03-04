<?php

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
	
	try {
		
		$pdo = new PDO('mysql:host=localhost;dbname=ecms;charset=utf8', 'root', '');

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// insert data into sql
		$sql = 'INSERT INTO `members` SET `first_name` = :first_name, `middle_name` = :middle_name, `last_name` = :last_name, `email` = :email, `gender` = :gender, `occupation` = :occupation, `phone_num` = :phone_num, `date_of_birth` = :date_of_birth, `address` = :address, `membership_status` = :membership_status';

		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':first_name', $_POST['first_name']); 
		$stmt->bindValue(':middle_name', $_POST['middle_name']); 
		$stmt->bindValue(':last_name', $_POST['last_name']);
		$stmt->bindValue(':email', $_POST['email']);
		$stmt->bindValue(':gender', $_POST['gender']); 
		$stmt->bindValue(':occupation', $_POST['occupation']); 
		$stmt->bindValue(':phone_num', $_POST['phone_num']);
		$stmt->bindValue(':date_of_birth', $_POST['date_of_birth']); 
		$stmt->bindValue(':address', $_POST['address']);
		$stmt->bindValue(':membership_status', $_POST['membership_status']);
		$stmt->execute();

		header('location: members.php');


	} catch (Exception $e) {
		$title = 'An error has occurred';
		$output = 'Database error: ' . $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine();
	}
}
else
{
	$title = 'Add a new member';

	ob_start();

	include __DIR__ . '/templates/addmember.html.php';

	$output = ob_get_clean();
}

include __DIR__ . '/templates/layout.html.php';
