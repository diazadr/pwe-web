<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>
  <link rel="stylesheet" href="bab11.css"/>
</head>
<body>
  <br/>
  <div class="button-atas">
    <a href="user/index.php" class="atas">KEMBALI</a>
  </div>

  <br/><br/>
  <div class="form-container">
    <form method="post" action="proseslogin.php" target="_top">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <input type="submit" value="MASUK">
    </form>

    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color:red;'>Username atau password salah!</p>";
    }
    ?>
  </div>
</body>
</html>
