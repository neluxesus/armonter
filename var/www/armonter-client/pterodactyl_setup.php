<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form submission for Pterodactyl setup
    $pterodactyl_url = $_POST['pterodactyl_url'];
    $api_key = $_POST['api_key'];
    $admin_api_key = $_POST['admin_api_key'];

    // Save Pterodactyl settings to config file
    updatePterodactylConfig($pterodactyl_url, $api_key, $admin_api_key);

    // Redirect to login page
    header("Location: pages/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armonter Client - Pterodactyl Setup</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Pterodactyl Setup</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="pterodactyl_url" placeholder="Pterodactyl URL" required><br><br>
            <input type="text" name="api_key" placeholder="Pterodactyl API Key" required><br><br>
            <input type="text" name="admin_api_key" placeholder="Pterodactyl Admin API Key" required><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
