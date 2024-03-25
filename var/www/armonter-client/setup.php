<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form submission for database setup
    $host = $_POST['db_host'];
    $username = $_POST['db_user'];
    $password = $_POST['db_pass'];
    $database = $_POST['db_name'];

    // Save database settings to config file
    updateDbConfig($host, $username, $password, $database);

    // Redirect to Pterodactyl setup page
    header("Location: pterodactyl_setup.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armonter Client - Database Setup</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Database Setup</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="db_host" placeholder="Database Host" required><br><br>
            <input type="text" name="db_user" placeholder="Database User" required><br><br>
            <input type="password" name="db_pass" placeholder="Database Password" required><br><br>
            <input type="text" name="db_name" placeholder="Database Name" required><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
