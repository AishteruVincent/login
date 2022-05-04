<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
     
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <?php echo 'Welcome!'; ?>
     <h1>Hello Sir <?php echo $_SESSION['name']; ?>, Good Morning!</h1>
     <nav class="home-nav">
     	<a href="change-password.php">Change Password</a>
          <a href="logout.php" 
          onclick="return confirm('Are you sure?');">Logout</a>
     </nav>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>