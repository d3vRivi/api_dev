<!DOCTYPE html>
<html lang="en">
<body>
<ul class="sidebar-nav">
      <img src="http://www.natlib.lk/img/header/nldsb-logo.png" height="100" width="700" style="margin-left:2px;"><hr>

      <center><h6>Welcome <?php echo $user['first_name']; echo "!";?></h6></center><hr>

          
            
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "dashboard.php") ? "active" : ""; ?>" href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "account.php") ? "active" : ""; ?>" href="account.php"><i class="fas fa-user-circle"></i> Account</a></li> <hr>
          <li><strong>Manage</strong></li>
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "books-dash.php") ? "active" : ""; ?>" href="books-dash.php"><i class="fas fa-book"></i> Books</a></li> 
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "newspaper-dash.php") ? "active" : ""; ?>" href="newspaper-dash.php"><i class="fas fa-newspaper"></i> Newspapers</a></li>
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "govpubs-dash.php") ? "active" : ""; ?>" href="govpubs-dash.php"><i class="far fa-newspaper"></i> Government Publications</a></li>
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "ola-dash.php") ? "active" : ""; ?>" href="ola-dash.php"><i class="fab fa-leanpub"></i> Ola Leaf Manuscripts</a></li> <hr>
          <br>
          <li><a href="includes/handlers/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
     
</body>
</html>