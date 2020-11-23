<?php
include('includes/config.php');
$page_title = "Register";
?>
<!-- config first-->
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("includes/partials/head.php"); ?>
  <!-- put head here -->
</head>
<body>
  <div class="wrapper">
    <?php include("includes/partials/header.php"); ?>
    <!-- put header here -->
    <fieldset class="signup">
      <div class="title">
        <h1>Sign up</h1>
      </div>
      <form action="https://formspree.io/f/{form_id}" method="post">
        <div class="textfield">
              
          <p><label for="username">Username:<abbr title="requried" aria-label="required">*</abbr></label>
            <input type="email" name="username" placeholder="Your email address"></p>
            <!-- make the password minimum length of 10 characters -->
          <p><label for="password">Password:<abbr title="requried" aria-label="required">*</abbr></label>
            <input type="password" name="password" minlength="10" placeholder="Your password"></p>
          <p><label for="password">Repeat Password:<abbr title="requried" aria-label="required">*</abbr></label>
            <input type="password" name="password" minlength="10" placeholder="Your password"></p>
              
          <button type="submit">Register</button>
        </div>
      </form>
    </fieldset>
    <div class="push"></div>
  </div>
  <?php include("includes/partials/footer.php"); ?>
  <!-- put footer here -->
  </body>
  </html>