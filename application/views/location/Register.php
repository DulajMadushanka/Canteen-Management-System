<?php include 'partials/header.php' ?>

<br><br><br>

<style>

body{
  background-image: url("<?php echo base_url()?>templates/images/bg_top_img.jpg");
}
</style>

<?php echo form_open('Register/registerUser'); ?>


<div style="margin-left: 250px; border: 2px;" class="form-horizontal">
  <h1 style="margin-left: 113px; margin-bottom: 40px; color:white"><b>Please Register !</h1>
  <div style="margin-left: 220px;">
  	<?php echo validation_errors(); ?>
  	<div style="color: white;">
  	<?php if ($this->session->flashdata('msg')) {
  		echo "<h3>".$this->session->flashdata('msg')."</h3>";
  	}
  	 ?></div>
  </div>



  <div style="color:white; class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-10">
      <input style="width: 60%; " type="text" class="form-control" id="inputEmail3" placeholder="First Name" name="fname"><br>
    </div>
  </div>
  <div style="color:white; class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-10">
      <input style="width: 60%; " type="text" class="form-control" id="inputEmail3" placeholder="Last Name" name="lname"><br>
    </div>
  </div>
  <div style="color:white; class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input style="width: 60%; " type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email"><br>
    </div>
  </div>
  <div style="color:white; class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Birthday</label>
    <div class="col-sm-10">
      <input style="width: 60%; " type="text" class="form-control" id="inputEmail3" placeholder="Birthday" name="bday"><br>
    </div>
  </div>
  <div style="color:white; class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
      <input style="width: 60%; " type="text" class="form-control" id="inputEmail3" placeholder="Address" name="address"><br>
    </div>
  </div>
  <div style="color:white; class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Contact Number</label>
    <div class="col-sm-10">
      <input style="width: 60%; " type="text" class="form-control" id="inputEmail3" placeholder="Phone Number" name="pnum"><br>
    </div>
  </div>

    <div style="color:white; class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
    <div class="col-sm-10">
      <input style="width: 60%;  " type="text" class="form-control" id="inputEmail3" placeholder="User Name" name="uname"> <br>
    </div>
  </div>

  <div style="color:white; style="margin-top: 20px;" class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input style="width: 60%;" type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password"><br>
    </div>
  </div>

    <!--<div style="color:white; class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>
    <div class="col-sm-10">
      <input style="width: 60%;  " type="password" class="form-control" id="inputEmail3" placeholder="Confirm Password" name="uname"> <br>
    </div>
  </div>-->

  <div style="color:white; class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button  style="background-color: #87CEFA; "type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</div>
<?php echo form_close(); ?>


<?php include 'partials/footer.php' ?>
