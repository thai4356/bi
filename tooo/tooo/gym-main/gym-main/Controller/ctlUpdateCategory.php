<?php
$id = $_REQUEST["id"];
$tennhomsp = $_REQUEST["t1"];
$trangthai =1;
if(isset($_REQUEST["rTrangthai"]))
    $trangthai = $_REQUEST["rTrangthai"];
$ketqua = $Nhomsanpham->SuaNhomSanpham($id,$tennhomsp, $trangthai);
if($ketqua==FALSE)
    $thongbao="Something went wrong";
else
    $thongbao ="Update data successfully";
require("ViewsAdmin/vKetqua.php");
?>