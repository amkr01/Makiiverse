<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Makiiverse Home</title>

<style>
body {
  background-image: url('background.png');
  background-size: cover;
  font-family: 'Lilita One', Arial, sans-serif;
  text-align: center;
}

.miiverse-card {
  background: #ffffff;
  border-radius: 25px;
  box-shadow: 0px 10px 25px rgba(0,0,0,0.18);
  width: 520px;
  padding: 25px;
  margin: 40px auto;
}

h1 {
  color: #2cb32c;
  font-size: 28px;
}
</style>

</head>

<body>
<div class="miiverse-card">
    <h1>Welcome, <?php echo $user; ?>!</h1>
    <p>You are now logged into Makiiverse ✨</p>
</div>
</body>
</html>
