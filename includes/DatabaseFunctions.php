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
