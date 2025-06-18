<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"];
    $confirm = $_POST["confirm_password"];

    if ($password !== $confirm) {
        echo "<h3>Passwords do not match!</h3><a href='register.php'>Go back</a>";
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $entry = date("Y-m-d H:i:s") . " | Username: $username | Email: $email | Hashed Password: $hashedPassword\n";

    $file = fopen("users.txt", "a");
    if ($file) {
        fwrite($file, $entry);
        fclose($file);
        echo "<h3>Registration successful!</h3><a href='index.html'>Go to homepage</a>";
    } else {
        echo "<p>Could not save data. Try again.</p>";
    }
}
?>
