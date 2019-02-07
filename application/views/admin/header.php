<?php

// Initializing variables.
$homeActive =  $itemsActive = $ordersActive = $customersActive = '';
$active = "active";

switch($this->uri->segment(2,"home")) {
    case 'home':
        $homeActive = $active;
    break;

    case 'items':
        $itemsActive = $active;
    break;

    case 'orders':
        $ordersActive = $active;
    break;

    case 'customers':
        $customersActive = $active;
    break;

    // By default, we assume you will be at index.php (setting $homeActive).
    //default:
    //    $homeActive = $active;
    //break;
}
?>

<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  
<link href="<?php echo base_url(); ?>css/adminStyle.css" rel="stylesheet">

<nav class = "navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Admin"> Canteens-UOC </a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav" style="color: white">
					<li class="<?php echo $homeActive; ?>"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a></li>
					<li class="<?php echo $itemsActive; ?>"><a href="<?php echo base_url(); ?>index.php/Admin/items">Items</a></li>
					<li class="<?php echo $ordersActive; ?>"><a href="<?php echo base_url(); ?>index.php/Admin/orders">Orders</a></li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">WELCOME</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- <header id="header" style="background: #333333; color: #ffffff; padding-bottom: 7px; margin-bottom: 5px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10">
					<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Profile</small></h1>
				</div>
				<div class="col-md-2">
					
				</div>
			</div>
		</div>
	</header> -->
	
	<!-- <section id="breadcrumb">
		<div class="container-fluid">
			<ol class="breadcrumb">
				<li class="active">Dashboard</li>
			</ol>
		</div>
	</section>  -->