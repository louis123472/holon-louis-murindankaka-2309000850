<?php
session_start();

// Generate a random number if not already set
if (!isset($_SESSION['number'])) {
    $_SESSION['number'] = rand(1, 100);
    $_SESSION['tries'] = 0;
}

$message = "";

if (isset($_POST['guess'])) {
    $guess = intval($_POST['guess']);
    $_SESSION['tries']++;

    if ($guess < $_SESSION['number']) {
        $message = "Too low! Try again.";
    } elseif ($guess > $_SESSION['number']) {
        $message = "Too high! Try again.";
    } else {
        $message = "Congratulations! You guessed the number in " . $_SESSION['tries'] . " tries.";
        session_destroy(); // Game over, destroy session
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Number Guessing Game</title>
</head>
<body>
    <h1>Guess the Number (1-100)</h1>
    <form method="post">
        <input type="number" name="guess" required />
        <button type="submit">Submit Guess</button>
    </form>
    <p><?php echo $message; ?></p>
</body>
</html>