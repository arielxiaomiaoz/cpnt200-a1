<?php
include('includes/config.php');
$page_title = "Home";
?>
<!-- config first-->
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("includes/partials/head.php"); ?>
  <!-- put head here -->
</head>
<body>>
  <section class="hero">
    <h1>Halo Cake</h1>
    <p>Cake & Coffee & Bubble tea</p>
    <div class="logo">
      <img src="images/logo.png" alt="logo">
    </div>

    <?php include("includes/partials/header.php"); ?>
    <!-- nav bar here -->
  </section>

  <section class="content">
    <!-- at least one page (viewport) of content -->
    <h3> Here is our gorgeous products...</h3>
       
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolorem illum totam laborum. Modi obcaecati cum repudiandae, sequi voluptatibus sed minima voluptatem reiciendis, repellat, unde adipisci error accusamus? Perferendis, animi?</p>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolorem illum totam laborum. Modi obcaecati cum repudiandae, sequi voluptatibus sed minima voluptatem reiciendis, repellat, unde adipisci error accusamus? Perferendis, animi?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolorem illum totam laborum. Modi obcaecati cum repudiandae, sequi voluptatibus sed minima voluptatem reiciendis, repellat, unde adipisci error accusamus? Perferendis, animi?</p>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolorem illum totam laborum. Modi obcaecati cum repudiandae, sequi voluptatibus sed minima voluptatem reiciendis, repellat, unde adipisci error accusamus? Perferendis, animi?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolorem illum totam laborum. Modi obcaecati cum repudiandae, sequi voluptatibus sed minima voluptatem reiciendis, repellat, unde adipisci error accusamus.</p>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolorem illum totam laborum. Modi obcaecati cum repudiandae, sequi voluptatibus sed minima voluptatem reiciendis, repellat, unde adipisci error accusamus? Perferendis, animi?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolorem illum totam laborum. Modi obcaecati cum repudiandae, sequi voluptatibus sed minima voluptatem reiciendis, repellat, unde adipisci error accusamus.</p>  
    <!-- make it sticky -->
    <div class="push"></div>
  </section>
  <!-- Footer -->
  <?php include("includes/partials/footer.php"); ?>
</body>
</html>