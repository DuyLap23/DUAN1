<main>
    <div class="head-title">
        <div class="left">
            <h1>Thống Kê</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php?act=home">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Thống Kê </a>
                </li>
            </ul>
        </div>

    </div>
    <div>
        <form action="index.php?act=listthongke" class="d-flex" method="post">
            <div>
                <label for="">Từ Ngày
                    <input type="date" name="from" id="">
                </label>
            </div>
            <div>
                <label for="">Đến Ngày
                    <input type="date" name="to" id="">
                </label>
            </div>
            <div>

                <input type="submit" id="" name="loc" value="Lọc ">

            </div>
        </form>
    </div>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Thống Kê </h3>

            </div>
            <canvas id="myChart" width="400" height="200"></canvas>

    </div>
</main>

<script>

var bieudo = JSON.parse('<?= $data ?>');
    var data = {
      labels: bieudo.date,
      datasets: [{
        yAxisID: 'doanhThu',
        label: 'Doanh thu',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1,
        data: bieudo.doanhthu,
      }, {
        yAxisID: 'soDon',
        label: 'Số lượng đơn hàng',
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1,
        data: bieudo.luotmua, // Mức số đơn hàng nhỏ từ 1 đến 5
      }]
    };

    var options = {
      scales: {
        y: [
          {
            id: 'doanhThu',
            type: 'linear',
            position: 'left',
          },
          {
            id: 'soDon',
            type: 'linear',
            position: 'right',
          },
        ]
      }
    };

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: data,
      options: options
    });
  </script>
<!-- <script>
    // Dữ liệu mẫu
 

    var data = {
      labels: bieudo.date,
      datasets: [{
        label: 'Doanh thu',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1,
        data: [1000, 1500, 1200, 2000, 1800], // Dữ liệu doanh thu
      }, {
        label: 'Số lượng đơn hàng',
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1,
        data: [20, 25, 18, 30, 28], // Dữ liệu số lượng đơn hàng
      }]
    };

    var options = {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    };

    // Vẽ biểu đồ
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: data,
      options: options
    });
    
  </script> -->