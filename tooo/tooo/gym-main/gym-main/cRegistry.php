<?php
session_start();//khai báo sử dụng $_SESSION[]
require("Model/clsAdmin.php");
if(isset($_REQUEST["tusername"])==false)//nếu chưa chạy form Login.php
{
    //echo "<a href=\"Login.php\"> Mời đăng nhập</a>";
    $thongbao = "Not logged in yet";
    $link_tieptuc = "index.php";
    require("ViewsAdmin/vKetqua.php");
    die();//dừng trang web
}
$user = $_REQUEST["tusername"];
$pass= $_REQUEST["tpassword"];
$pass = md5($pass);//sử dụng hàm của php mã hóa md5() mật khẩu mà người dùng nhập
$admin = new clsAdmin();
$ketqua = $admin->KiemTraTaiKhoan($user,$pass);
if(!$ketqua)
{
    $thongbao = "error";
    $link_tieptuc = "login.php";
    require("ViewsAdmin/vKetqua.php");
    die();
}
$row = $admin->data;
if($row!=NULL)//đăng nhập thành công
{

    if($row["quyen"]==1)
    {
        $_SESSION["logined"] ="OK";
        $_SESSION["username"] = $row["account"];
        $_SESSION["quyen"] = $row["quyen"];
        //header("location:index_admin.php");
        $thongbao = "Logged in as admin !";
        $link_tieptuc = "indexadmin.php";
        require("ViewsAdmin/vKetqua.php");
    }
    if($row["quyen"]==0)
    {
        $_SESSION["logined"] ="OK";
        $_SESSION["username"] = $row["account"];
        $_SESSION["quyen"] = $row["quyen"];
        $thongbao = "Hello user ".$_SESSION["username"];
        $link_tieptuc = "index.php";
        require("ViewsAdmin/vKetqua.php");
    }
//    else
//    {
//        $thongbao = "TÀI KHOẢN ĐÃ BỊ KHÓA";
//        $link_tieptuc = "login.php";
//        require("Views/vKetqua.php");;
//    }
}
else
{
    $thongbao = "Wrong Username or Password";
    $link_tieptuc = "Login.php";
    require("ViewsAdmin/vKetqua.php");;
}
?>