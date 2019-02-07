<?php 
	if (!($this->session->userdata('loggedin'))){
		redirect("Home/login");
	}
 ?>
<?php include 'partials/headern.php' ?>
<h1>dashboard</h1>




<?php include 'partials/footer.php' ?>