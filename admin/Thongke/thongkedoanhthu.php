
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

<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Thống Kê </h3>
          
        </div>
        <table>
            <thead>
                <tr>
                    <th>Ngày</th>
                    <th>Tháng</th>
                    <th>Năm</th>
                    <th>Doanh Thu</th>
                    
               
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($Sum_total_by as $key => $value) :
                   extract($value);
                ?>
                <tr class="tr-shadow">
                    <td>
                        <?= $ngay?>
                    </td>
                    <td>
                    <?= $thang?>
                    </td>
                    <td><?= $nam?></td>
                    <td><?= number_format($doanh_thu_theo_ngay, 0, '.', ',') ?></td>
                    
                  
                </tr>
                <?php endforeach;?>
               
                
             
            </tbody>    
        </table>
       
    </div>

</div>
</main>