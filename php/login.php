<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $stmt=$conn->prepare("SELECT id,password FROM users WHERE email=?");
  $stmt->bind_param("s",$email);
  $stmt->execute();
  $stmt->bind_result($id,$hash);
  if($stmt->fetch() && password_verify($pass,$hash)) {
    $_SESSION['userid']=$id;
    header('Location: index.html');
    exit;
  } else $error="Invalid login";
}
?>
<!DOCTYPE html>
<html><head><link rel="stylesheet" href="assets/css/style.css"></head>
<body>
  <div class="form-container">
    <h2>Log In</h2>
    <?php echo $error ?? ''; ?>
    <form method="post">
      <input name="email" type="email" placeholder="Email" required>
      <input name="password" type="password" placeholder="Password" required>
      <button type="submit">Log In</button>
    </form>
  </div>
</body></html>
