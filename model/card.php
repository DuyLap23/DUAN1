<?php
function viewcard($del) {
    $tong = 0;
    $i = 0;

    foreach ($_SESSION['mycard'] as $card) {
        $tien = $card[2] * $card[4];
        $tong += $tien;  
        if ($del == 1) {
            $xoa_th = '<th>THAO TÁC</th>';
            $xoa_td = '<td><a href="index.php?act=deletecard&idcarfd='.$i.'"><input type="button" value="Xoa"></a></td>';
        } else {
            $xoa_th = "";
            $xoa_td = "";
        }
        echo '<tr>
                <th class="mb20">MÃ SẢN PHẨM</th>
                <th>TÊN</th>
                <th>GIÁ</th>
                <th>ẢNH</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ TIỀN</th>
                '.$xoa_th.'
            </tr>
            <tr>
                <td>'.$card['0'].'</td>
                <td>'.$card['1'].'</td>
                <td>'.$card['2'].'</td>
                <td><img src="./admin/image/'.$card[3].'" width="150px" alt=""></td>
                <td>'.$card['4'].'</td>
                <td>'.$tien.'</td>
                '.$xoa_td.'
            </tr>';
        $i += 1;
    }

    // Hiển thị tổng tiền ở đây
    echo '<tr>
            <td>Tổng tiền: '.$tong.'</td>
          </tr>';
}

function tongdonhang() {
    $tong = 0;

    foreach ($_SESSION['mycard'] as $card) {
        $tien = $card[2] * $card[4];
        $tong += $tien; 
    }

    return $tong;
}

function them_bill($bill_name, $bill_address, $bill_tel, $bill_pttt, $ngaydathang, $tongdonhang){
    $sql = "INSERT INTO bill (bill_name, bill_address, bill_tel, bill_pttt, ngaydathang, tongdonhang) VALUES ('$bill_name', '$bill_address', '$bill_tel', '$bill_pttt',  '$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertID($sql);
}

function insert_cart($iduser, $idpro , $img, $name, $price, $soluong, $thanhtien, $idbill){
    $sql = "INSERT INTO cart (iduser, idpro , img, name, price, soluong, thanhtien, idbill) VALUES ('$iduser', '$idpro' , '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id){
    $sql = "SELECT * FROM bill WHERE id=?";
    $bill =  pdo_query_one($sql, $id);
    return $bill;
}

function loadone_cart($idbill){
    $sql = "SELECT * FROM cart WHERE idbill=?";
    $bill =  pdo_query_one($sql, $idbill);
    return $bill;
}
?>
