<?php 
    require 'includes/init.php';
    include 'includes/navbar.php';
?>


    <section>
<div class="row">
	<div class="col-md-4 col-md-offset-4 card-2">
<h3 class="text-center"> LOG IN</h3>

    <?php  
        if (isset($_SESSION["message"])) {
    ?>      
        <div class="alert alert-info">
            <?php echo $_SESSION["message"]; ?>   
        </div> 
    <?php
        unset($_SESSION["message"]);
        }
    ?>
 <form action = "user/index.html" method="post">
 	<div class="form-group input-group">
 		<span class="input-group-addon"><i class="fa fa-user"></i></span>
 		<input type="text" class="form-control" name="name" placeholder="Full Name" required />
 	</div>
 	<div class="form-group input-group">
 		<span class="input-group-addon"><i class="fa fa-key"></i></span>
 		<input type="password" name="password" class="form-control" placeholder="Password" required />
 	</div>
 	<div class="form-group">
 	<button type="submit" name="submit" class="btn btn-primary btn-lg"><i class="fa fa-sign-in"></i> Log In</button>
 	</div>
 </form>
 <h4 class="text-center text-info">Not registered? <a href="register.php" class="btn btn-default">Sign Up</a></h4>
</div>
 </div>
</section>

<!--//contact-->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Lightbox JavaScript-->
     <script src="js/jquery.lightbox.min.js"></script>
  <!-- Theme JavaScript -->
    <!-- <script src="js/script.js"></script> -->
 </body>
</html> 