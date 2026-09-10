<?php

session_start();

// Retrieve the name stored in the session
$user_name = $_SESSION['user_name'] ?? 'No name found';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Second Page</title>
</head>
<body>

    <h1>Second Page</h1>

    <p>
        Welcome, <strong><?php echo htmlspecialchars($user_name); ?></strong>!
    </p>

    <p>
        Your name was successfully retrieved from the session.
    </p>

    <a href="index.html">Back to Form</a>

</body>
</html>