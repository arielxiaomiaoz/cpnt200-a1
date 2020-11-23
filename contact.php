<?php
include('includes/config.php');
$page_title = "Contact-us";
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

    <section class="container">
      <!-- 3 team cards -->
      <figure class= "profile">
        <img src= "images/profile.png" alt= "pastry making">
        <h1>Katy - Pastry Cook</h1>
        <figcaption>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur enim a facilis cumque fugiat minus obcaecati? Voluptas nobis vero eligendi id repudian</p>
        </figurecaption>
        <hr>            
        <ul class= "icon">
          <li>
            <i class="fab fa-github"></i>
          </li>
          <li>
            <i class="fab fa-facebook"></i>
          </li>
          <li>
            <i class="fab fa-twitter"></i>
          </li>
          <li>
            <i class="fab fa-instagram"></i>
          </li>
        </ul>
      </figure>

      <figure class= "profile">
        <img src= "images/profile2.png" alt= "pastry making">
        <h1>Jessica - Pastry Cook</h1>
        <figcaption>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur enim a facilis cumque fugiat minus obcaecati? Voluptas nobis vero eligendi id repudian</p>
        </figurecaption>
        <hr>            
        <ul class= "icon">
          <li>
            <i class="fab fa-github"></i>
          </li>
          <li>
            <i class="fab fa-facebook"></i>
          </li>
          <li>
            <i class="fab fa-twitter"></i>
          </li>
          <li>
            <i class="fab fa-instagram"></i>
          </li>
        </ul>
      </figure>

      <figure class= "profile">
        <img src= "images/profile1.png" alt= "pastry making">
        <h1>Bill - Pastry cook</h1>
        <figcaption>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur enim a facilis cumque fugiat minus obcaecati? Voluptas nobis vero eligendi id repudian</p>
        </figurecaption>
        <hr>            
        <ul class= "icon">
          <li>
            <i class="fab fa-github"></i>
          </li>
          <li>
            <i class="fab fa-facebook"></i>
          </li>
          <li>
            <i class="fab fa-twitter"></i>
          </li>
          <li>
            <i class="fab fa-instagram"></i>
          </li>
        </ul>
      </figure>
    </section>
    
    <!-- contact us part -->
    <div class= "contact">
      <form action="https://formspree.io/f/{form_id}" method="post">
        <h1>Send us a message...</h1>

        <label for="name">Full Name<abbr title="requried" aria-label="required">*</abbr></label>
        <input name="name" id="name" type="text" placeholder="Your name">

        <label for="email">Email<abbr title="requried" aria-label="required">*</abbr></label>
        <input name="Email" id="email" type="email" placeholder="Your email address">

        <label for="phone">Phone Number</label>
        <input name="phone" id="phone" type="text">
        <label for="message">Message<abbr title="requried" aria-label="required">*</abbr></label>
        <input name="message" id="message" type="text" style="width:265.8px; 
        height:40px" placeholder="Say something to us...">
        <p></p>
        <button type="submit">Submit</button>
      </form>
    </div>
    <div class="push"></div>
  </div>

  <?php include("includes/partials/footer.php"); ?>
  <!-- footer here -->

</body>
</html>

