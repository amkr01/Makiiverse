<?php // register.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Create Makiiverse Account</title>

<style>
body {
  background-image: url('background.png');
  background-size: cover;
  font-family: 'Lilita One', Arial, sans-serif;
  text-align: center;
  margin: 0;
  overflow: hidden;
}

.miiverse-card {
  background: #ffffff;
  border-radius: 25px;
  box-shadow: 0px 10px 25px rgba(0,0,0,0.18);
  width: 520px;
  height: 330px;
  padding: 25px;
  margin: 40px auto 0 auto;
  text-align: center;
}

.miiverse-card h1 {
  color: #2cb32c;
  font-size: 26px;
  margin-bottom: 10px;
}

.input-box {
  width: 80%;
  padding: 10px;
  margin-top: 10px;
  border-radius: 10px;
  border: 2px solid #2cb32c;
  font-size: 18px;
}

.btn-green {
  background: #2cb32c;
  color: white;
  font-size: 20px;
  border: none;
  padding: 10px 25px;
  border-radius: 10px;
  margin-top: 15px;
  cursor: pointer;
}

.back {
  width: 130px;
  position: fixed;
  bottom: 15px;
  left: 12px;
  cursor: pointer;
}
</style>

</head>

<body>

<div class="miiverse-card">
  <h1>Create Account</h1>

  <form action="register_action.php" method="POST">
    <input type="text" name="user" class="input-box" placeholder="Username" required><br>
    <input type="password" name="pass" class="input-box" placeholder="Password" required><br>

    <button type="submit" class="btn-green">Register</button>
  </form>

  <br>
  Already have an account? <a href="login.php">Login</a>
</div>

<a href="index.php"><img src="img/back.png" class="back"></a>

</body>
</html>
