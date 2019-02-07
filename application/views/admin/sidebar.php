<?php

// Initializing variables.
$homeActive =  $itemsActive = $salesActive = $ordersActive = '';
$active = "active main-color-bg";

switch($this->uri->segment(2,"home")) {
    case 'home':
        $homeActive = $active;
    break;

    case 'items':
        $itemsActive = $active;
    break;

    case 'saless':
        $salesActive = $active;
    break;

    case 'orders':
        $ordersActive = $active;
    break;
    case 'Analysis Barchart':
        $ordersActive = $active;
    break;
    case 'Analysis Piechart':
        $ordersActive = $active;
    break;




    //  By default, we assume you will be at index.php (setting $homeActive).
    // default:
    //     $homeActive = $active;
    // break;
}
?>

<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>css/adminStyle.css" rel="stylesheet">

<div class="list-group">
    <a href="<?php echo base_url(); ?>index.php/" class="list-group-item <?php echo $homeActive; ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
    <a href="<?php echo base_url(); ?>index.php/Admin/items" class="list-group-item <?php echo $itemsActive; ?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Items</a>
    <a href="<?php echo base_url(); ?>index.php/Admin/sales" class="list-group-item <?php echo $salesActive; ?>"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span> Sales</a>
    <a href="<?php echo base_url(); ?>index.php/Admin/orders" class="list-group-item <?php echo $ordersActive; ?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Orders</a>
    <a href="<?php echo base_url(); ?>index.php/Charts/index2" class="list-group-item <?php echo $ordersActive; ?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Analysis Pie Chart</a>
    <a href="<?php echo base_url(); ?>index.php/Charts/index1" class="list-group-item <?php echo $ordersActive; ?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Analysis Bar Chart</a>
</div>
