<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
         
          ['Danh Mục', 'Số lượng sản phẩm '],
         <?php
         foreach ($Thong_ke_cate as $key => $value) {
          $category_name = $value['category_name'];
          $soluong = $value['soluong'];
          extract($value);
         
          echo "['$category_name', $soluong],";
          # code...
         }
         ?>
        ]);

        var options = {
          title: 'Biểu đồ thống kê số lượng  sản phẩm theo danh mục ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 1200px; height: 700px;"></div>
  </body>
</html>