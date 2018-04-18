<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashboard</title>
  <link href="css/materialize/css/materialize.min.css" rel="stylesheet" type="text/css">
 <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->
  <link href="css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/styleX.css">
  <!--<script src="js/bootstrap.min.js" ></script>-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="css/materialize/js/materialize.min.js"></script>
</head>
<body>
  <nav class="blue darken-4 nav">
    <a href="#" class="brand-logo"> UpWayMine </a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href=""><i class="fa fa-fw fa-envelope"></i></a></li>
      <li><a href=""><i class="fa fa-fw fa-bell"></i></a></li>
      <li><a href="#logout" class="nav-link modal-trigger"><i class="fa fa-sign-out"></i> Logout</a></li>

    </ul>
  </div>
  </nav>
   <div id="logout" class="modal">
    <div class="modal-content">
      <h4><i class="fa fa-warning"></i> Warning!</h4>
      <p>Are you sure you want to logout?</p>
    </div>
    <div class="modal-footer">
      <a href="?logout" class="modal-action waves-effect btn btn-primary">Yes</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">No</a>
    </div>
  </div>
  <script type="text/javascript">
    
    //var elem = document.querySelector('.modal');
    //var instance = M.Modal.init(elem);
     $(document).ready(function(){
    $('.modal').modal();

    $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  });  
          
  </script>
  <a href="#" data-target="slide-out" class="sidenav-trigger show-on-medium-and-down hide-on-large-only"><i class="fa fa-fw fa-2x fa-navicon"></i></a>
  <ul id="slide-out" class="darken-4 sidenav sidenav-fixed">
    <li><div class="user-view">
      <a href="#!user">Welcome <i class="fa fa-user"></i> User</a>
      <a href="#!name"><span class="black-text name">John Doe</span></a>
      <a href="#!email"><span class="black-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="fa fa-cloud"></i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  
</body>
</html>