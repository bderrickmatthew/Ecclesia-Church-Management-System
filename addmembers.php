<?php

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit']))
{

	try
	{

		include __DIR__ . '/includes/DatabaseConnection.php';
		include __DIR__ . '/includes/DatabaseFunctions.php';

		insertMember($pdo,
		 $_POST['first_name'],
		 $_POST['middle_name'],
		 $_POST['last_name'],
		 $_POST['email'],
		 $_POST['gender'],
		 $_POST['occupation'],
		 $_POST['phone_num'],
		 $_POST['date_of_birth'],
		 $_POST['address'],
		 $_POST['membership_status']
		);

		header('location: members.php');


	}
	catch (Exception $e)
	{
		$title  = 'An error has occurred';
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
