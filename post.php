<!DOCTYPE html>
<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']); // Sanitize input
    $email = htmlspecialchars($_POST['email']);

    echo "Thanks, $name! We’ve received your email: $email";
}
?>

<!-- HTML Form -->
<form method="POST" action="">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>