<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = $_POST['job_id'];
    $user_id = $_POST['user_id']; 
    $application_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO applications (job_id, user_id, application_date) VALUES ('$job_id', '$user_id', '$application_date')";

    if ($conn->query($sql) === TRUE) {
        echo "Application submitted successfully";
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
    <title>Apply for Job</title>
</head>
<body>
    <h1>Apply for Job</h1>
    <form method="post" action="apply_job.php">
        <input type="hidden" name="job_id" value="1"> <!-- Example job_id -->
        <input type="hidden" name="user_id" value="123"> <!-- Example user_id -->
        <button type="submit">Apply</button>
    </form>
</body>
</html>