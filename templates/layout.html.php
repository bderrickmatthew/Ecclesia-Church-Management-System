<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <header>Ecclessia Church Management System</header>

    <nav>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="members.php">Members</a>
            </li>
            <li>
                <a href="addmember.php">Add Member</a>
            </li>
        </ul>
    </nav>

    <main>
        <?= $output ?>
    </main>
    <footer>
        &copy; ECMS 2024
    </footer>
</body>

</html>
