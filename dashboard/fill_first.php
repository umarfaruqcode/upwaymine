<?php 
    require '..//includes/init.php';
    include '..//includes/navbar.php';
?>
 <!DOCTYPE html>
 <html>
 <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Bootstrap Website Templates">

    <title>Upwaymine</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="..//css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="..//css/font-awesome.min.css">
    <link rel="stylesheet" href="..//css/simple-line-icons.css">
    <link rel="stylesheet" href="..//css/jquery.lightbox.min.css">

    <!-- Theme CSS -->
    <link href="..//css/style.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
     <title>Register</title>
 </head>
<body>
	<style type="text/css">
		.tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 140px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 150%;
            left: 50%;
            margin-left: -75px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
	</style>
<section>
<form action = "..//user/index.html" method="post">
<div class="row">
	<div class="col-md-4 col-md-offset-4 card-2">
		<h3 class="text-center">FILL  THE FOLLOWING </h3>
		<p class="text-info text-center">All fields are required!</p>
		<form action="" method="POST">
			<div class="form-group ">
				<label>YOUR WALLET ADDRESS</label>
				<input type="text" name="walletadd" required class="form-control" value="enter your wallet address"/>			
			</div>
			<div class="form-group">
				<label>COMPANY WALLET ADDRESS</label>
				<input type="text" name="walletadd2" required class="form-control" value="0x6463334rthrestg" id="myInput" disabled="" />
				<div class="tooltip">
				<button onclick="myFunction()" onmouseout="outFunc()">jfuly
				  <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
				  Copy address
				  </button>
				</div>
				<script>
				function myFunction() {
				  var copyText = document.getElementById("myInput");
				  copyText.select();
				  document.execCommand("Copy");
				  
				  var tooltip = document.getElementById("myTooltip");
				  tooltip.innerHTML = "Copied: " + copyText.value;
				}

				function outFunc() {
				  var tooltip = document.getElementById("myTooltip");
				  tooltip.innerHTML = "Copy to clipboard";
				}
				</script>
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-block btn-success">Continue</button>
			</div>
		</form>
	</div>
</div>
</section>
<!--//contact-->

    <!-- jQuery -->
    <script src="..//js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="..//js/bootstrap.min.js"></script>
    <!-- Lightbox JavaScript-->
     <script src="..//js/jquery.lightbox.min.js"></script>
  <!-- Theme JavaScript -->
    <!-- <script src="js/script.js"></script> -->
 </body>
</html> 