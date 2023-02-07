</div>
    
</div>

</div>



</header>

<footer> 
  <div class="footer-widget">
  <div class="container">
      <div class="row">
          <div class="row justify-content-center">
          <div class="col-sm-6">
              <div class="single-widget">
                  <h2>About Cecile</h2>
                  <ul class="nav nav-pills nav-stacked">
                      <li><a href="404.php">About us</a></li>
                      <li><a href="404.php">Work with us</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-sm-6">
              <div class="single-widget">
                  <h2>Information</h2>
                  <ul class="nav nav-pills nav-stacked">
                      <li><a href="404.php">Track order</a></li>
                      <li><a href="404.php">Delivery and Returns</a></li>
                      
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="footer-bottom">
  <div class="container">
      <div class="row">
        <p> <img src="images/logo.png" alt="logo2"></p>
          <p class="pull-left">Copyright © 2023 Cecile. All rights reserved.<br>
          <?php 
          $filename = 'variable.php';
          if (file_exists($filename)) {
          echo " Last modified: " . date ("l, dS F, Y, h:i a", filemtime($filename));}
          ?></p> </div>
      </div>
  </div>
</div>
</footer>
</body>
</html>