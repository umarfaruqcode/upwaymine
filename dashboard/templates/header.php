<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?=$title;?></title>
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/styleZ.css">
   <script src="js/jquery-3.2.1.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js" ></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
		<a class="navbar-brand">UpWayMine</a>
		</div>
		<ul class="hidden-sm nav navbar-nav navbar-right">
			<li class="hidden-sm"><a href=""><i class="fa fa-fw fa-envelope"></i></a></li>
			<li><a href=""><i class="fa fa-fw fa-bell"></i></a></li>
			<li><a href="" data-toggle="modal" data-target="logoutModal" id="logout"><i class="fa fa-fw fa-sign-out"></i> Logout</a></li>
		</ul>
	</div>
	</nav>
	<div class="container-fluid main">
	<div class="row">
		<div class="col-md-2 hidden-sm sidebar">
			<ul class="nav nav-sidebar ">
				<li><a href="index2.php" class="nav-link"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
				<li><a href=""><i class="fa fa-fw fa-envelope"></i> Messages</a></li>
				<li><a href=""><i class="fa fa-fw fa-bell"></i> Alerts</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li><a href="settings.php"><i class="glyphicon fa-fw glyphicon-cog"></i> Settings</a> </li>
				<li><a href=""><i class="fa fa-fw fa-user"></i> Profile</a></li>
			</ul>
		</div>
		<div class="container main admin">
			<div class="col-md-offset-2 col-md-10">
				<!-- Modal Start -->
				<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"  
   aria-labelledby="logoutModalLabel" aria-hidden="true"> 
   <div class="modal-dialog">
				 <div class="modal-content"> 
         <div class="modal-header"> 
            <button type="button" class="close"  
               data-dismiss="modal" aria-hidden="true"> 
                  &times; 
            </button> 
            <h4 class="modal-title" id="myModalLabel"> 
               <i class="fa fa-fw fa-warning"></i> Warning!
            </h4> 
         </div> 
         <div class="modal-body"> 
            Are you sure you want to logout? 
         </div> 
         <div class="modal-footer"> 
            <button type="button" class="btn btn-default"  
               data-dismiss="modal">No 
            </button> 
            <a href="?logout" class="btn btn-primary"> 
               Yes 
            </a></div> 
      </div>
</div>
				</div>
				<!-- Modal End -->