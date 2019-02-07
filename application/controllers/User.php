<?php

	class User extends CI_Controller{
		public function index(){
			  redirect('Admin/items');
			//$this->load->view('admin/home');
		}
	}

 ?>





 <html>
   <head>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 </head>

     <body>

     <script>
       google.charts.load('current', {'packages':['corechart']});
       google.charts.setOnLoadCallback(drawChart);

       function drawChart() {

         var data = google.visualization.arrayToDataTable([
         <?php
           foreach ($has_offers_rate as $service) {
           echo"['".$service['ServiceNameEN']."',".$service['offers']."],";
           }

          ?>
         ]);

         var options = {
           title: 'My Daily Activities'
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart'));

         chart.draw(data, options);
       }
     </script>


     <div id="piechart" style="width: 900px; height: 500px;"></div>
   </body>
 </html>
