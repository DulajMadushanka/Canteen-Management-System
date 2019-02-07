

<link href ="<?php echo base_url();?>/css/side_nav.css" rel="stylesheet" type="text/css" media="all" />
<link href ="<?php echo base_url();?>/css/top_bar.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/side_nav.js"></script>

<center><h1>Faculty of Arts</h1></center>


<div class="topnav" id="myTopnav">
  <a href="#home">Home</a>
  <a href="#news">Location</a>
  <a href="#contact">Services</a>
  <a href="#about">Contact us</a>
</div>

<center><img src="<?php echo base_url();?>/template1/images/ARTS.jpg" alt="science faculty canteen" width="1000" height="600"></center><br><br>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Breakfast</a>
  <a href="#">Lunch</a>
  <a href="#">Dinner</a>
  <a href="#">Other</a>
  </div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Monday</span><br>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Tuesday</span><br>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Wednesday</span><br>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Thursday</span><br>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Friday</span><br>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

