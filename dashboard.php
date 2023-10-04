<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.html"); // Redirect to the login page if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $_SESSION["username"]; ?></h1>
    </header>

    <section class="dashboard-content">
        <!-- Your dashboard content here -->
    </section>

    <footer>
        <p>&copy; 2023 My Homepage</p>
    </footer>
</body>
</html>
