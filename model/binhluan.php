<?php
    function them_bl($noidung, $iduser, $idpro, $ngaybinhluan){
        $sql = "INSERT INTO binh_luan(noidung, iduser, idpro, ngaybinhluan) VALUES ('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
        pdo_execute($sql);
    }

    function hien_thi_bl($idpro){
        $sql = "SELECT * FROM binh_luan WHERE idpro = $idpro";
        return pdo_query($sql);
    }

    function hien_thi_binh_luan(){
        $sql = "SELECT * FROM binh_luan ORDER BY id DESC";
        return pdo_query($sql);
    }

    function xoa_binh_luan($id){
        $sql = "DELETE FROM binh_luan WHERE id=?";
        pdo_execute($sql, $id);
    }

?>