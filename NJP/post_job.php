<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $company = $_POST['company'];
    $location = $_POST['location'];
    $description = $_POST['description'];

    $sql = "INSERT INTO jobs (title, company, location, description) VALUES ('$title', '$company', '$location', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New job posted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Job</title>
</head>
<body>
    <h1>Post a Job</h1>
    <form method="post" action="post_job.php">
        <label for="title">Job Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        <label for="company">Company:</label>
        <input type="text" id="company" name="company" required><br><br>
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required><br><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>
        <button type="submit">Post Job</button>
    </form>
</body>
</html>