<?php 

     $user = new User();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="includes/css/bootstrap.min.css">
  <link rel="stylesheet" href="includes/css/jquery-ui.min.css">
  <link rel="stylesheet" href="includes/css/style.css">
</head>
<body>
  

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Budget_app</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <?php if ($user->isLoggedIn()) : ?>
              <li><a href="dashboard.php">Budget</a></li>
              <?php endif; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <?php 
         
              if ($user->isLoggedIn()) :
             ?>
              <li><a href="logout.php">Logout</a></li>
              <li><a href="update.php">Update</a></li>
              <li><a href="changepassword.php">Change password</a></li>
              <li><a href="profile.php?user=<?php echo escape($user->data()->username); ?>">My Profile</a></li>
            <?php else : ?>
              <li><a href="login.php">log in</a></li>
              <li><a href="register.php">Register</a></li>
            <?php endif ; ?>
            </ul>

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>