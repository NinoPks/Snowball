<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    $safeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $usersFile = "users.txt";

    $loginSuccess = false;

    if (file_exists($usersFile)) {
        $lines = file($usersFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        foreach ($lines as $line) {
            if (preg_match('/Email:\s*(\S+)\s*\|\s*Hashed Password:\s*(\S+)/', $line, $matches)) {
                $storedEmail = trim($matches[1]);
                $storedHash = trim($matches[2]);

                if ($safeEmail === $storedEmail && password_verify($password, $storedHash)) {
                    $loginSuccess = true;
                    break;
                }
            }
        }
    }

    if ($loginSuccess) {
        echo "<h3>You're in, $safeEmail!</h3><p><a href='index.html'>Go back</a></p>";
    } else {
        echo "<h3>Login failed. Email or password is incorrect.</h3><p><a href='index.html'>Try again</a></p>";
    }
}
?>

