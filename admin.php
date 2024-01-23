<?php
session_start();

// Replace with your actual username and hashed password
$correctUsername = 'garxulogy';
$correctHashedPassword = password_hash('admin@garxulogy', PASSWORD_BCRYPT);

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    // Verify username and hashed password
    if ($enteredUsername === $correctUsername && password_verify($enteredPassword, $correctHashedPassword)) {
        // Successful login, set session variable
        $_SESSION['authenticated'] = true;
        header('Location: admin_panel.php'); // Redirect to the admin panel page
        exit;
    } else {
        // Incorrect credentials, show an error message
        $errorMessage = 'Incorrect username or password. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Login</title>
    <!-- Your existing styles here -->
</head>
<body>

    <?php if (isset($errorMessage)) : ?>
        <p><?php echo $errorMessage; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>

</body>
</html>
