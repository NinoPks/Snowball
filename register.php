<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Snowball</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>
<body class="register-body">
  <div class="register-container">
    <form class="register-form" action="register-handler.php" method="POST">
      <h2>Register</h2>

      <div class="input-group">
        <span class="material-symbols-outlined">person</span>
        <input type="text" name="username" required placeholder="Username" />
      </div>

      <div class="input-group">
        <span class="material-symbols-outlined">mail</span>
        <input type="email" name="email" required placeholder="Email" />
      </div>

      <div class="input-group">
        <span class="material-symbols-outlined">key</span>
        <input type="password" name="password" required placeholder="Password" />
      </div>

      <div class="input-group">
        <span class="material-symbols-outlined">key</span>
        <input type="password" name="confirm_password" required placeholder="Confirm Password" />
      </div>

      <button type="submit" class="register-btn">Create Account</button>
    </form>
  </div>
</body>
</html>
