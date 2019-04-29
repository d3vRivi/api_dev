<!DOCTYPE html>
<html lang="en">
<body>
<ul class="sidebar-nav">
      <img src="http://www.natlib.lk/img/header/nldsb-logo.png" height="100" width="700" style="margin-left:10px;"><hr>

      <center><h6>Welcome <?php echo $user['first_name']; echo "!";?></h6></center><hr>

          
          <li><strong>Library</strong></li>                
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "index.php") ? "active" : ""; ?>" href="index.php"><i class="fas fa-home"></i> Home</a></li> 
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "account.php") ? "active" : ""; ?>" href="account.php"><i class="fas fa-user-circle"></i> Account</a></li>
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "rules.php") ? "active" : ""; ?>" href="rules.php"><i class="fas fa-gavel"></i> Rules and Regulations</a></li>
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "faq.php") ? "active" : ""; ?>" href="faq.php"><i class="fas fa-question-circle"></i> FAQ</a></li>   
          <br>
          <li><strong>Collection</strong></li>                
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "books.php") ? "active" : ""; ?>" href="books.php"><i class="fas fa-book"></i> Books</a></li>
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "newspaper.php") ? "active" : ""; ?>" href="newspaper.php"><i class="fas fa-newspaper"></i> Newspapers</a></li>
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "govpubs.php") ? "active" : ""; ?>" href="govpubs.php"><i class="far fa-newspaper"></i> Government Publications</a></li>
          <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "ola.php") ? "active" : ""; ?>" href="ola.php"><i class="fab fa-leanpub"></i> Ola Leaf Manuscripts</a></li>
          <br><br><br><br>
          <li><a href="includes/handlers/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
     
</body>
</html>