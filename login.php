
<html>
<header>
<title>Anfal ixl</title>
</header>

<body>

<?php
    include_once('template/navbar.php');
  ?> 

<div class="container mb-5 mt-5">

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form method="POST" action="login.php" class="form-signin">

              <div class="form-label-group">
                <label for="inputEmail">Email address</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              </div>

              <div class="form-label-group mb-5">
                <label for="inputPassword">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
              </div>

              <button class="btn btn-success btn-block" name="login" type="submit">Login</button>

              <hr class="my-4">

              <div class="text" style="text-align: center;" style="padding-top: 10px">
                 Not registered ? click <a href="register.php">here</a> to register.
              </div>
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</div>


<?php
  include_once('./template/footer.php');
?>

</body>
</html>


<!-- Foundation install links -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>

<!-- Bootstrap install links -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

