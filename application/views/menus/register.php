<html>
<head>

<title>Well Come to Online page</title>



<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<style>
.datepicker {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
}

.date {
  display: inline-block;
  width: 300px;
}

.date1:invalid+span:after {
    content: '✖';
    padding-left: 5px;
}

.date1:valid+span:after {
    content: '✓';
    padding-left: 5px;
}



.timepicker {
  margin-bottom: 10px;
  position: relative;
}

.time1[type="number"] {
  width: 100px;
}
.time1 + .validity {
  padding-right: 30px;
}


.time1:invalid+span:after {
  position: absolute;
  content: '✖';
  padding-left: 5px;
}

.time1:valid+span:after {
  position: absolute;
  content: '✓';
  padding-left: 5px;
}

</style>





</head>

<body>
  <div class="container">
    <br><br><br>

    <h1>WelCome To UOC Canteen<br>Online Page:</h1>
    <form method="post" action="<?php echo base_url()?>index.php/online/form_validation">
      <?php

        if($this->uri->segment(2) == "inserted"){
          echo'<p class="text-success">Data Succesfully Inserted</p>';
            //var_dump($this->uri->segment(2));
          die();

        }
        ?>

       <br>
      <div class="form-group">
        <label>First Name:</label>
        <input type="text" name="first_name" class="form-control" placeholder="First Name" required />
        <span class="text-danger"><?php echo form_error("first_name"); ?></span>
      </div><br>
      <div class="form-group">
        <label>Last Name:</label>
          <input type="text" name="last_name" class="form-control" placeholder="Last Name" />
            <span class="text-danger"><?php echo form_error("last_name"); ?></span>
        </div><br>
        <div class="form-group">
          <label>Contact No:</label>
          <input type="text" name="contact_no" class="form-control" placeholder="Contact No" required/>
          <span class="text-danger"><?php echo form_error("contact_no"); ?></span>
        </div><br>

        <div class="form-group">
          <label>Address:</label>
          <input type="text" name="address" class="form-control" placeholder="Address" required/>
          <span class="text-danger"><?php echo form_error("address"); ?></span>
        </div><br>
        <div class="form-group">
           <label for="type" >Type:</label>
           <select class="form-contact" id="type" name="type">
               <option value="breakfast">Breakfast</option>
               <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>

           </select>
         </div><br>
           <div class="form-group">
             <label>Foods Item Deatails:</label>
             <input type="text" name="foodsitem" class="form-control" value="<?php echo"$rathu";echo"$sudu";echo"$kiri";echo"$dhal  ";echo"$fish  ";echo"$leese  ";echo"$hop  ";echo"$shop  ";echo"$para  ";echo"$thos  "; ?>" />
           </div><br>

           <div class="form-group">
             <label>Price:</label>
             <input type="text" name="price" class="form-control" placeholder="Price"/>
           </div><br>

           <div class="form-group">
              <label for="day" >Day:</label>
              <select class="form-contact" id="day" name="day">
                  <option value="monday">Monday</option>
                  <option value="tuesday">Tuesday</option>
                  <option value="wednesday">Wednesday</option
                  <option value="thursday">Thursday</option>
                  <option value="friday">Friday</option>
                  <option value="saturday">Saturday</option>
                  <option value="sunday">Sunday</option>


              </select>
            </div><br>


            <div class="datepicker">

              <?php
              $data=date('Y-m-d');
              ?>
    <label clas="date" for="party">date:</label>
    <input class="date1" type="date" id="party"name="date_picker" min<=<?php echo"$data"; ?> max=$data required >
    <span class="validity"></span>
  </div><br>

    <div class="timepicker">
  <label class="time" for="appt-time">time (opening hours 6.30:00 to 19:00): </label>
  <input class="time1" id="appt-time" type="time" name="time_picker"
         min="6:30" max="19:00" required>
  <span class="validity"></span>


</div><br><br>
  <div class="form-group">
          <input type="submit" name="insert" value="Insert" class="btn btn-info" />
        </div>
      </form>
    </div>

</body>

<script src="<?php echo base_url(); ?>assests/js/bootstrap.min.js"></script>
</html>
