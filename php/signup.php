<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=password_hash($_POST['password'],PASSWORD_DEFAULT);
  $stmt = $conn->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?)");
  $stmt->bind_param("sss",$name,$email,$pass);
  if($stmt->execute()) {
    header('Location: login.php');
  } else echo "Error: " . $conn->error;
  exit;
}
?>
<!DOCTYPE html>
<html><head><link rel="stylesheet" href="assets/css/style.css"><script src="assets/js/auth.js"></script></head>
<body>
  <div class="form-container">
    <h2>Sign Up</h2>
    <form method="post">
      <input name="name" placeholder="Name" required>
      <input name="email" type="email" placeholder="Email" required>
      <input name="password" type="password" placeholder="Password" required>
      <input name="confirm_password" type="password" placeholder="Confirm Password" required>
      <button type="submit">Sign Up</button>
    </form>
  </div>
</body></html>
