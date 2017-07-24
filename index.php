<?php
$display_name = 'Jim Vang';
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title>PHP Basics by <?php echo $display_name; ?></title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
            <img src="img/logo.png" alt="Alt For Image">
          </div>
          <h1><?php echo $display_name; ?></h1>
          <p>Contact:<br />
          <a href="mailto:">EMAIL</a></p>
          <hr />
          <ul class="social">
            <li><a href=""><span class="icon twitter"></span></a></li>
          </ul>
          <hr />
          <p>Today: D, d M Y</p>
        </section>
        <section class="main">
          <h1>My First PHP Page</h1>

          <h2>Unit Conversion</h2>

          <hr />

          <h2>Daily Exercise</h2>
        </section>
    </div>
    <section class="footer text-center">
      &copy; <?php
     echo date('Y');
     //PHP has many built-in functions that can handle complex programming tasks for us. Let PHP work for you by utilizing built-in functionality. We'll be using the date function that we used in the Daily Exercise Program to update copyright dates.
     echo " ". $display_name . ". ";
     // outputs e.g. 'Last modified: March 04 1998 20:43:59.'
     echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
     ?>
    </section>
  </body>
</html>
