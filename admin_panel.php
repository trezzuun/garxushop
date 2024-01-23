<?php
session_start();

// Check if user is authenticated
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    // Redirect to the login page if not authenticated
    header('Location: admin.php');
    exit;
}

// Logout functionality
if (isset($_GET['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page after logout
    header('Location: admin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Unbounded:wght@900&display=swap');

        body {
            font-family: 'Unbounded', sans-serif;
            background-color: #080808;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Align items to the left */
            justify-content: space-between; /* Align items to the space between content and footer */
            min-height: 100vh;
            overflow: hidden;
        }

        nav {
            width: 100%;
            background-color: transparent; /* Set the background to transparent */
            padding: 10px 20px;
            display: flex;
            align-items: center; /* Align items to the center */
            position: absolute;
            top: 0;
        }

        .welcome-container {
            display: flex;
            align-items: center;
            margin-left: 0; /* Adjusted margin-left to move it to the left */
        }

        .welcome-text {
            color: #ffffff; /* Updated welcome-text color */
            margin-left: 30px; /* Updated margin-left for welcome-text */
        }

        .logout-container {
            margin-left: 1500px; /* Updated margin-left for logout-container */
        }

        footer {
            width: 100%;
            padding: 0; /* Updated padding for footer */
            color: #242424; /* Updated color for footer text */
            text-align: center;
            margin-top: auto; /* Pushes the footer to the bottom */
            font-size: 14px; /* Updated font size for footer text */
        }

        p {
            margin-top: 20px;
            margin-left: 10px;
        }

        a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        a:hover {
            text-decoration: underline;
            color: #2980b9;
        }

        p a {
            margin-left: 10px;
        }
    </style>
</head>
<body>

    <nav>
        <div class="welcome-container">
            <span class="welcome-text">Welcome back, Garxu</span>
        </div>
        <div class="logout-container">
            <p><a href="?logout">Logout</a></p>
        </div>
    </nav>

    <!-- Your admin panel content here -->

    <footer>
        <p>&copy; 2024 Garxu. All rights reserved.</p>
    </footer>

</body>
</html>
