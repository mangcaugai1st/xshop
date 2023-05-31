<?php
require '../../global.php';
require '../../dao/hang-hoa.php';
//-------------------------------//

extract($_REQUEST);
// Truy vấn mặt hàng theo mã
$hang_hoa = hang_hoa_select_by_id($ma_hh);
extract($hang_hoa); //$ma_hh=1081, $ten_hh="Chao", $don_gia=19;

// Tăng số lượt xem lên 1
hang_hoa_tang_so_luot_xem($ma_hh);

$VIEW_NAME = "hang-hoa/chi-tiet-ui.php";
require '../layout.php';