<?php
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <?php
      include ("sidebar.php");
      ?>
    </div>


    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="col-lg-12">
          <!-- <a href="#" class="btn btn-success" id="menu-toggle">Menu</a> -->
          <center><h5>Welcome to the National Library of Sri Lanka<h5></center><hr>
          <p style="font-size:14px">
          National Library has a vast collection of library materials in the form of print, 
          audio-visual and electronic media. The collection which is of a high standard both qualitative 
          and quantitative reflects the objectives of the National Library and the needs of the users. 
          The National Library collection currently comprises of twenty seven (27) collections as indicated below: 
          The current book stock of approximately over 500 000 volumes will form the nucleus of the future national collection.
          </p>





      </div>
    </div>



  </div>

  <!-- Menu toggle script -->
  <!-- <script>
    $("#menu-toggle").click( function (e){
      e.preventDefault();
      $("#wrapper").toggleClass("menuDisplayed");
    });
  </script> -->
</body>
</html>