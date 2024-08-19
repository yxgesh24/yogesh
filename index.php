<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
  <form action="login.php" method="post">
    <h2>Login</h2>
    <?php if(isset($_GET['error'])) { ?>
      <p class="error"> <?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label> User Name </label>
    <input type="text" name="unname" placeholder="User Name"><br>
    <label>Password</label>
    <input type="password" name="password" placeholder="password"><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>