<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>contact-us</title>
 
    <!-- Bootstrap -->
    <link href="contact-us.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>public/js/jquery-1.6.js" ></script>
<script src="<?php echo base_url(); ?>public/js/cufon-yui.js"></script>
<script src="<?php echo base_url(); ?>public/js/cufon-replace.js"></script>
<script src="<?php echo base_url(); ?>public/js/Forum_400.font.js"></script>
<script src="<?php echo base_url(); ?>public/js/atooltip.jquery.js"></script> 
 <?php $this->load->helper('url'); ?>      
  <style type="text/css">  
.col1{
	margin:1px;
	background-attachment: fixed;
	background-size:100% 100%;
	min-height:400px;
	background-color:black;
        background-image: url("<?php echo base_url(); ?>public/images/man2.jpg");
	text-align:center;
	background-repeat: no-repeat;
	background-size:100% 100%;
	vertical-align: middle;
	line-height: 400px;  
}
#contact{
	font-size:50px;
	color:white;
	float:center;
}
#cms{
	font-size:30px;
}
#info{
	font-size:25px;
}
.col2{
	margin:3px;
	min-height:50px;
	background:url("<?php echo base_url(); ?>public/images/bg_bot.jpg");
	text-align:center;
	vertical-align: middle;
	line-height: 50px;  
}
.col4{
	margin:3px;
	min-height:100px;
	background-color:  #80ff80;
	text-align:center;
	vertical-align: middle;
	line-height: 100px;  
}
#success_msg{
    font-size:30px;
    color:black;
}
#submit{
	background-color:rgb(153, 204, 0);
}
#req{
	font-size:12px;
	color:red;
	float:right;
}
.fa { 
padding: 30px; 
font-size: 30px; 
width: 30px; 
text-align: center; 
text-decoration: none; 
margin: 5px 2px; 
border-radius: 50%; 
}
/**.fa:hover { 
opacity: 0.7; 
}
.fa-google { 
background: #dd4b39; 
color: white; 
}
.fa-twitter { 
background: #55ACEE; 
color: white; 
}
.fa-facebook { 
background: #3B5998; 
color: white; 
}**/
.body1 {
	background:url("<?php echo base_url(); ?>public/images/bg_top_img.jpg") top center no-repeat
}
.body6 {
	background:url("<?php echo base_url(); ?>public/images/bg_top.jpg") top repeat-x
}
.main {
	margin:0 auto;
	width:960px
}
#top_nav {
	float:right;
	padding:4px 43px 30px 0
}
#top_nav li {
	float:left;
	padding:3px 26px 5px 0;
	background:url("<?php echo base_url(); ?>public/images/top_line.gif") right 0 no-repeat;
	margin-right:25px
}
#top_nav li a {
	display:block;
	line-height:0
}
#top_nav .end {
	background:none;
	padding-right:0;
	margin-right:0
}
nav,li,ul{
        background: transparent;
	border: 0 none;
	font-size: 100%;
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	vertical-align: top;
}
ol, ul {
	list-style: none;
}
footer, header,nav{
    display:block
}
header {
        background:url(../images/bg_top_img.jpg);
	height:200px;
	width:100%;
	overflow:hidden
}
/*new*/

#menu {
	width:633px;
	float:right;
	padding:0 0 0 0
}
#menu li {
	float:left;
	padding-left:3px
}
#menu li a {
	display:block;
	font-size:24px;
	color:#faf3ed;
	line-height:40px;
	padding:0 20px;
	height:44px;
	letter-spacing:-1px
}
#menu li a:hover, #menu .active a {
	text-decoration:none;
	background:url("<?php echo base_url(); ?>public/images/menu_bg.png") repeat
}

.list1 li a {
	font-style:italic;
	padding-left:12px;
	background:url(../images/marker_1.gif) 1px 8px no-repeat;
	color:#faf3ed
}
.list_1 {
	color:#fff
}
.list_1:hover {
	text-decoration:none
}

/*end of new*/
body{
    background:url("<?php echo base_url(); ?>public/images/bg_bot.jpg");

</style>
  </head>
  
 
  
  <body>
      
  <div class="body6">
  <div class="body1">
    <div class="main">
      
      <header>
        <!--<h1><a href="index.html" id="logo">UOC canteen management system</a></h1>-->
        <h1 style="color:white; font-size:40px"><b>Canteens</b></h1>
          <div>
          <h1 style="color:white; font-size:25px"><b>University of Colombo</b></h1>
          </div>
        <!--not needed
        <nav>
          <ul id="top_nav">
            <li><a href="index.html"><img src="<?php echo base_url(); ?>public/images/icon_1.gif" alt=""></a></li>
            <li><a href="#"><img src="<?php echo base_url(); ?>public/images/icon_2.gif" alt=""></a></li>
            <li class="end"><a href="<?php echo base_url(); ?>public/contacts.html"><img src="images/icon_3.gif" alt=""></a></li>
          </ul>
        </nav> -->
        <nav>
          <ul id="menu">
              <li><a href="#">Home</a></li>
              <li><a href="#">Locations</a></li>
              <li class="active"><a href="#">Contact Us</a></li>
              <li><a href="#">Menu</a></li>
              <li><a href="#">Login</a></li>

          </ul>
        </nav>
      </header>
        
     </div>
     </div>
     </div> 
      
	<div class="container-fluid">
		<div class="row">
				<div class="col-sm-12" class="col-md-12">
				<div class="col1">
	                 <p id="contact"><b>CONTACT</b></p>
				</div>
				</div>
		</div> 
		
		<div class="row">
				<div class="col-sm-5" class="col-md-5">
				<div class="col2">
					<p id="cms"><b>UOC-CMS</b></p>
					<p id="info"> phone:<br> + 94 0 00 00 00 00<Br/>
                                            email:<br> <a href="https://www.google.com/gmail/">uoccms@gmail.com</a><Br/>
					 Also you can follow us on<Br/></p>
					 <a href="https://www.facebook.com/" class="fa fa-facebook"></a> <Br/> 
					 <a href="https://twitter.com/" class="fa fa-twitter"></a> <Br/> 
					 <a href="https://www.google.co.in/" class="fa fa-google"></a>
				</div>
				</div>
				
				
				<div class="col-sm-7" class="col-md-7">
				<div class="col4">
                                 
                                    
                               
                                    
                                    
				<fieldset>
				 
                                  
                                
                                    <p id="success_msg"><b>Message sent successfully!!</b></p>
                                  
                                  
				  
				  
				</fieldset>
                               
	
				</div>
				</div>
		</div>
		
		
	
 
	
	
	
	
	
	
	
	
	
	
	
     <!--<p> <img src="contact-us.jpg"> </p>-->
	 </div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>



