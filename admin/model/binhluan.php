<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){

        $sql="select * from binhluan where 1";
        if($idpro>0) $sql.=" AND idpro='".$idpro."'";
        $sql.=" order by id desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
}
function load_ten_taikhoan($iduser){
     $sql = "select * from taikhoan where id=".$iduser;
     $dm = pdo_query_one($sql);
     extract($dm);
     return $user;
    }
    function delete_binhluan($id){
        $sql="delete from binhluan where id=".$id;
        pdo_execute($sql);
    }
?>