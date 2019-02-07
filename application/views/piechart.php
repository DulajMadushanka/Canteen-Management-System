<html>
   <head>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
      <script type="text/javascript">
         // Load the Visualization API and the line package.
         google.charts.load('current', {'packages':['corechart']});
         // Set a callback to run when the Google Visualization API is loaded.
         google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
              $.ajax({
                type: 'POST',
        url: 'http://localhost/abc/index.php/charts/getdata/' + document.getElementById('month').value,
                success: function (data1) {
                  var data = new google.visualization.DataTable();
                  // Add legends with data type
                  data.addColumn('string', 'week');
                 data.addColumn('number', 'price');
                 //Parse data into Json
                 var jsonData = $.parseJSON(data1);
                 for (var i = 0; i < jsonData.length; i++) {
                   data.addRow([jsonData[i].week, parseInt(jsonData[i].price)]);
                 }

                 var options = {
                  legend: '',
                  pieSliceText: 'label',
                  title: 'UOC Canteen Price Analysis',
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
               }
            });
          }
      </script>
      <style>
    .piechart{
      margin-left: 480px;
      margin-top: 50px;
    }
    .load{
      margin-left: 1200px;
      //margin-top: 1000px;
    }
      </style>

   </head>
   <body>
     <div class="piechart">
       Month:
       <select id='month' name="barmonth" onclick="drawChart()">
      <option value="january">January</option>
      <option value="february">February</option>
      <option value="march">March</option>
      <option value="april">April</option>
      <option value="may">May</option>
      <option value="june">June</option>
      <option value="july">July</option>
      <option value="aguest">Aguest</option>
      <option value="september">September</option>
      <option value="octomber">Octomber</option>
      <option value="november">November</option>
      <option value="december">December</option>
     </select>
     </div>
      <div id="piechart" style="width: 1500px; height: 800px;"></div>
   </body>
</html>
