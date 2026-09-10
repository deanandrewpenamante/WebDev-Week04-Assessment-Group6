<?php

session_start();

// Retrieve submitted values using $_POST
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$year_level = $_POST['year_level'] ?? '';

// Check if required fields are empty
if (empty($name) || empty($email) || empty($year_level)) {
    echo "<h2>Validation Error</h2>";
    echo "<p>Please fill in all required fields.</p>";
    echo "<a href='index.html'>Go Back to Form</a>";
    exit;
}

// Store submitted values in an associative array
$student = [
    "Name" => $name,
    "Email" => $email,
    "Year Level" => $year_level
];

// Store the name in the session
$_SESSION['user_name'] = $name;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Processing Result</title>
</head>
<body>

    <h1>Submitted Information</h1>

    <h3>Student Data:</h3>

    <?php
    // Display array contents using foreach
    foreach ($student as $key => $value) {
        echo "<p><strong>$key:</strong> $value</p>";
    }
    ?>

    <br>

    <a href="second.php">Go to Second Page</a>

</body>
</html>