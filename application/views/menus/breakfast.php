
<html>
<head>



	<title>Breakfast Menu</title>



		<link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/css2/mystyle.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/css2/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/css2/responsive.css">



<body>


    <header class="headerBar hideMob large">



					<div class="a">
								<ul class="menu">
									<li><a  href="http://localhost/abc/index.php/welcome/index">Home</a></li>
								<li><a href="http://localhost/abc/index.php/Charts2/index5">Open Canteen</a></li>
								<li><a href="http://localhost/abc/index.php/Charts2/index1">Management Canteen</a></li>
								<li><a href="http://localhost/abc/index.php/Charts2/index4">UCSC Canteen</a></li>
								<li><a href="http://localhost/abc/index.php/Charts2/index2">Art Canteen</a></li>
								<li><a href="http://localhost/abc/index.php/Charts2/index3">Law Canteen</a></li>
								</ul>
					</div>

    </header>




    <div class="bodyBar">

		<div class="pageTitleBar">
			<div class="siteGrid">
				<h1>Breakfast Menu</h1>
			</div>
		</div><br>





<?php if($this->session->flashdata('a')){
	echo"<h3>".$this->session->flashdata('a')."</h3>";
}?>

  <form action="online/isempty" method="POST">
<div class="rice">
	<h1>Rice</h1>
	<ul>
		<li class="sudukakulu">Sudu Kakulu Rice<input class="checkbox1" name="sudu" type="text" value="" placeholder="Order Details"></li><br>
		<li class="rathu kakulu">Rathu Kakulu Rice<input class="checkbox2" name="rathu" type="text" value=""placeholder="Order Details"></li><br>


	</ul>

</div>
<br>
<div class="curry">
	<h1>Curries</h1>
	<ul>
		<li>Kiri Hodi<input class="checkbox3" name="kiri" type="text" value=""placeholder="Order Details"></li><br>
		<li>Dhal Curry<input class="checkbox4" name="dhal" type="text" value="" placeholder="Order Details"></li><br>
		<li>Fish Curry<input class="checkbox5" name="fish" type="text" value="" placeholder="Order Details"></li><br>
		<li>Leese Curry<input class="checkbox6" name="leese" type="text" value="" placeholder="Order Details"></li><br>
	</ul>

</div>
<br>
<div class="other">
	<h1>Others</h1>
	<ul>
		<li>Hoppers<input class="checkbox7" name="hop" type="text" value="" placeholder="Order Details"></li><br>
		<li>String Hoppers<input class="checkbox8" name="shop" type="text" value="" placeholder="Order Details"></li><br>

		<li>Parata<input class="checkbox10" name="para" type="text" value="" placeholder="Order Details"></li><br>
		<li>Those<input class="checkbox11" name="thos" type="text" value="" placeholder="Order Details"></li><br>
		<li>Egg Roti<input class="checkbox12" name="eroti" type="text" value="" placeholder="Order Details"></li><br>
		<li>Noodles<input class="checkbox13" name="noold" type="text" value="" placeholder="Order Details"></li><br>


	</ul>

</div>

 <button type="submit"  name="me">Order</button>
</form>


</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



</div>



    </body>










		</html>
