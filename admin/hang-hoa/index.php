<?php
require "../../global.php";
require "../../dao/loai.php";
require "../../dao/hang-hoa.php";
//--------------------------------//

check_login();

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST); 

if(exist_param("btn_insert")){
    $hinh = save_file("hinh", "$IMAGE_DIR/products/");
    try {
        hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
        unset($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
        $MESSAGE = "Thêm mới hàng hoá thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Thêm mới hàng hoá thất bại!";
    }
    $VIEW_NAME = "hang-hoa/new.php";
}
else if(exist_param("btn_update")){
    try {
        hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
        $MESSAGE = "Cập nhật hàng hoá thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Cập nhật hàng hoá thất bại!";
    }
    $VIEW_NAME = "hang-hoa/edit.php";
}
else if(exist_param("btn_delete")){
    try {
        hang_hoa_delete($ma_hh);
        $items = hang_hoa_select_all();
        $MESSAGE = "Xóa hàng hoá thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa hàng hoá thất bại!";
    }
    $VIEW_NAME = "hang-hoa/list.php";
}
else if(exist_param("btn_edit")){
    $item = hang_hoa_select_by_id($ma_hh);
    extract($item);
    $VIEW_NAME = "hang-hoa/edit.php";
}
else if(exist_param("btn_list")){
    $items = hang_hoa_select_all();
    $VIEW_NAME = "hang-hoa/list.php";
}
else{
    $VIEW_NAME = "hang-hoa/new.php";
}

require "../layout.php";