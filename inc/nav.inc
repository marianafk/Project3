  <nav class = "menu-bar">
    <ul>
     	<li <?php if($currentPage == 'index') { echo 'class="active"'; } ?> ><a href="index.php">Home</a></li>
     	<li <?php if($currentPage == 'portfolio') { echo 'class="active"'; } ?> ><a href="portfolio-page.php">Portfolio</a></li>
     	<li <?php if($currentPage == 'contact') { echo 'class="active"'; } ?> ><a href="contact-form.php">Contact Form</a></li>
    </ul>
  </nav>