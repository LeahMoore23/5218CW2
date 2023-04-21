<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestsOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> <!-- Font Awesome -->

  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet"> <!-- Google Fonts -->
  
  <link rel="stylesheet" href="assets/css/style.css"> <!-- Custom Styling -->

  <title>Login</title>
</head>
<body>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <div class="auth-content">
    <form action="login.php" method="post">
      <h2 class="form-title">Login</h2>

      <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?> <!-- Runs through this .php file -->

      <div>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo ($username); ?>" class="text-input">
      </div> <!-- Where the user will enter their username -->
	  
      <div>
        <label>Password</label>
        <input type="password" name="password" value="<?php echo ($password); ?>" class="text-input">
      </div> <!-- Where the user will enter their password -->
	  
      <div>
        <button type="submit" name="login-btn" class="btn btn-big">Login</button>
      </div> <!-- Where the user will enter their submit -->
	  
      <p>Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
    </form> <!-- User can click on sign up link and taken to the register page -->
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- JQuery -->
</body>
</html>