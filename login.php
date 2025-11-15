<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Makiiverse Login</title>

<style>
/* Fondo */
body {
  background: url('background.png');
  background-size: cover;
  font-family: Arial;
  text-align: center;
  margin: 0;
}

/* Caja estilo Miiverse (compatibilidad Wii U) */
.miiverse-card {
  background: #ffffff;
  width: 520px;
  height: 300px;
  padding: 20px;
  margin-top: 40px;
  margin-left: auto;
  margin-right: auto;

  /* Sombras compatibles */
  border: 2px solid #d0d0d0;
  border-radius: 12px;
}

/* Título */
.miiverse-card h1 {
  color: #2cb32c;
  font-size: 24px;
  margin: 0 0 10px 0;
}

/* Inputs compatibles */
.input-box {
  width: 80%;
  padding: 10px;
  margin-top: 10px;
  border: 2px solid #2cb32c;
  border-radius: 6px;
  font-size: 16px;
}

/* Botón verde */
.btn-green {
  background: #2cb32c;
  color: white;
  font-size: 18px;
  border: 0;
  padding: 10px 20px;
  border-radius: 6px;
  margin-top: 15px;
  cursor: pointer;
}

/* Botón atrás */
.back {
  width: 130px;
  position: fixed;
  bottom: 10px;
  left: 10px;
  cursor: pointer;
}
</style>

</head>

<body>

<div class="miiverse-card">
  <h1>Login to Makiiverse</h1>

  <form action="auth.php" method="POST">
    <input type="text" name="user" class="input-box" placeholder="Username"><br>
    <input type="password" name="pass" class="input-box" placeholder="Password"><br>

    <input type="submit" value="Login" class="btn-green">
  </form>

  <br>
  <a href="register.php">Create new account</a>
</div>

<a href="index.php"><img src="img/back.png" class="back"></a>

</body>
</html>
