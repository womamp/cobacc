<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Result</title>
</head>
<body>
    <h2>Submitted Data</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
        } else {
            echo "<p>No data submitted.</p>";
        }
    ?>
    <br>
    <a href="form.php">Back to Form</a>
</body>
</html>
