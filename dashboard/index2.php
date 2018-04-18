
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashboard</title>
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/styleZ.css">
   <script src="js/jquery-3.2.1.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js" ></script>
</head>
<body>

  <div class="container">
  <h2>Small Modal</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>
<script type="text/javascript">
  $(window).on('load',function(){
    $('#myModal').modal('show');
  })
  }
</script>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a small modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
		<a class="navbar-brand">UpWayMine</a>
		</div>
		<ul class="hidden-sm nav navbar-nav navbar-right">
			<li class="hidden-sm"><a href=""><i class="fa fa-fw fa-envelope"></i></a></li>
			<li><a href=""><i class="fa fa-fw fa-bell"></i></a></li>
			<li><a href=""><i class="fa fa-fw fa-sign-out"></i> Logout</a></li>
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
				<li><a href="settings.php"><i class="fa fa-fw fa-cog"></i> Settings</a> </li>
				<li><a href=""><i class="fa fa-fw fa-user"></i> Profile</a></li>
			</ul>
		</div>
		<div class="container">
			<div class="col-md-offset-2 col-md-10">
				<h1>Dashboard</h1>
				<div class="row">
					<div class="col-sm-4">
						<div class="card text-white bg-primary">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-btc"></i>
              </div>
              <div>BTC</div>
            </div>
            <a class="card-footer text-white" href="#">
              <span class="pull-left">View Details</span>
              <span class="pull-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
					</div>
					<div class="col-sm-4">
						<div class="card text-white bg-danger">
							<div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-dollar"></i>
              </div>
							<div>$</div>
						</div>
							<a class="card-footer text-white" href="#">
              <span class="pull-left">View Details</span>
              <span class="pull-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
						</div><br>
					</div>
					<div class="col-sm-4">
						<div class="card bg-warning text-white">
							<div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-cog"></i>
              </div>
              <div>#</div>
          </div>
          <a class="card-footer text-white" href="#">
              <span class="pull-left">View Details</span>
              <span class="pull-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
						</div>

					</div>
				</div>
			</div>
			<hr>
				<div class="row">
					<div class="col-md-8">
					</div>
			<div class="form-group" style="float: left;">
        <label>wallet Address</label>
        <input type="email" name="email" required/>
      </div>
<?php


include 'block_io.php';

?>
      <?php

      $apikey = "f284-8e41-1e29-24e6";
      $version =2;
      $pin = "linumaroh";
      $block_io = new BlockIo($apikey, $pin, $version);
      $address = $block_io->get_new_address(array('label' => 'LABEL'));
      var_dump($address);
/*      $amount = $block_io ->get_address_balance
      $address = $block_io ->get_new_address(array('label' => 'shibe1'));

      $block_io->get_new_address();
      $block_io->get_balance();*/


      ?>













				<!-- 	<hr>
					<div class="row">
						<div class="col-sm-10 col-sm-offset-2">
					<div class="card mb-3"> -->
        <!-- <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
              <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 150px;">Name</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 252px;">Position</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 105px;">Office</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 47px;">Age</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 102px;">Start date</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 82px;">Salary</th></tr>
              </thead>
              <tfoot>
                <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
              </tfoot>
              <tbody>
              <tr role="row" class="odd">
                  <td class="sorting_1">Airi Satou</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>33</td>
                  <td>2008/11/28</td>
                  <td>$162,700</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Angelica Ramos</td>
                  <td>Chief Executive Officer (CEO)</td>
                  <td>London</td>
                  <td>47</td>
                  <td>2009/10/09</td>
                  <td>$1,200,000</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td>66</td>
                  <td>2009/01/12</td>
                  <td>$86,000</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Bradley Greer</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td>41</td>
                  <td>2012/10/13</td>
                  <td>$132,000</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Brenden Wagner</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td>28</td>
                  <td>2011/06/07</td>
                  <td>$206,850</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Brielle Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td>61</td>
                  <td>2012/12/02</td>
                  <td>$372,000</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Bruno Nash</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td>38</td>
                  <td>2011/05/03</td>
                  <td>$163,500</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Caesar Vance</td>
                  <td>Pre-Sales Support</td>
                  <td>New York</td>
                  <td>21</td>
                  <td>2011/12/12</td>
                  <td>$106,450</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Cara Stevens</td>
                  <td>Sales Assistant</td>
                  <td>New York</td>
                  <td>46</td>
                  <td>2011/12/06</td>
                  <td>$145,600</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td>2012/03/29</td>
                  <td>$433,060</td>
                </tr></tbody>
            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
			</div>
		</div>
	</div> -->
</div>
</div>
</body>
</html>
 