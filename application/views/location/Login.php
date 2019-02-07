<?php include 'partials/header.php' ?>

<br><br><br><br><br><br>

<style>
body{
	background-image: url("<?php echo base_url()?>templates/images/bg_top_img.jpg"); 
}
</style>
<?php echo form_open('Login/loginUser'); ?>

<div style="margin-left: 250px; border: 2px;" class="form-horizontal">
  <h1 style="margin-left: 113px; margin-bottom: 40px; color:white;"><b>Please Login !</h1>

  <div style="margin-left: 220px;">
  	<?php echo validation_errors(); ?>
  	<div style="color: red;">
  	<?php if ($this->session->flashdata('msgs')) {
  		echo "<h3>".$this->session->flashdata('msgs')."</h3>";
  	}
  	 ?></div>
  </div>

  <div style="color:white; margin-top: 20px;" class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
    <div class="col-sm-10">
      <input style="width: 60%; " type="text" class="form-control" id="inputEmail3" placeholder="User Name" name="uname">
    </div>
  </div>
  <div style="color:white; margin-top: 20px;" class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input style="width: 60%;" type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button style="background-color: #87CEFA; type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</div>
<?php echo form_close(); ?>


<?php include 'partials/footer.php' ?>