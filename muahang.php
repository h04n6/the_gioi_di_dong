<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MUA NGAY</title>
    <link rel="stylesheet" href="css/style2.css" type="text/css">

    <?php include("database.php"); ?>;

</head>
<body>
<div id="header">
    <div id="logo">
        <a href="#">            <img src="img/imagelogotgdd.jpg" width="150px" height="60px">        </a>
    </div>
    <div id="search_bar">
        <input type="text" name="seach_text" class="form-control" placeholder="Tìm kiếm">
    </div>

    <div id="menu">
        <ul>
            <li><a href="#">ĐIỆN THOẠI</a>
                <ul class="menu_down">
                    <?php 
                        $query_select_trademark = "Select * From thuong_hieu Order By ten_thuong_hieu";
                        $result = mysqli_query($dbConn, $query_select_trademark);
                         while ($row = mysqli_fetch_assoc($result)){                           
                    ?>
                <li><a href="listiphone.php?id=<?php echo $row["ma_thuong_hieu"]?>">
                    <?php echo $row['ten_thuong_hieu'] ?></a></li>
                    <?php
                        }     
                    ?>
                </ul>
            </li>

            <li><a href="#">TABLET</a>
                <ul class="menu_down">

                    <li><a href="#">IPAD</a></li>
                    <li><a href="#">IPAD</a></li>
                    <li><a href="#">IPAD</a></li>
                </ul>
            </li>
            <li><a href="#">LAPTOP</a>
                <ul class="menu_down">
                    <li><a href="#">ASER</a></li>
                    <li><a href="#">ASUS</a></li>
                    <li><a href="#">DELL</a></li>
                    <li><a href="#">HP</a></li>
                </ul>
            </li>
            <li><a href="#">PHỤ KIỆN</a>
                <ul class="menu_down">
                    <li><a href="#">Tai nghe</a></li>
                    <li><a href="#">Sạc </a></li>
                    <li><a href="#">Chuột</a></li>
                    <li><a href="#">Ốp lưng</a></li>
                </ul>
            </li>
            <li><a href="#">CŨ GIÁ RẺ</a>
                <ul class="menu_down">

                    <li><a href="#">IPhone</a></li>
                    <li><a href="#">OPPO</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Xiaomi</a></li>
                    <li><a href="#">Huawei</a></li>

                </ul>
            </li>
            <li><a href="#">KHUYẾN MÃI</a>
                <ul class="menu_down">
                    <li><a href="">ĐIỆN THOẠI</a></li>
                    <li><a href="">LAPTOP</a></li>
                    <li><a href="">PHỤ KIỆN</a></li>
                    <li><a href="">TABLET</a></li>
                </ul>
            </li>




        </ul>
    </div>
</div>
<div id="b1" style="font-size: 20px">
    <?php 
        $ma_hh = '1';
        if(isset($_GET['id'])){
            $ma_hh = $_GET['id'];
        }
        
        $query_select = "Select * From hang_hoa Inner Join chi_tiet_hang_hoa On hang_hoa.ma_hh = chi_tiet_hang_hoa.ma_hh Where hang_hoa.ma_hh = '$ma_hh' Limit 1";
        $result = mysqli_query($dbConn, $query_select);
        $row = mysqli_fetch_assoc($result);
        $ar = array();
        $ar = explode('@', $row["anh"]);
    ?>
<div class="hovergallery" > <img src="img/<?php echo $ar[0] ?>" width="160" height="180"></div>

    <p><?php echo $row["ten"] ?></p>

    <ul>
        <li>1. Giảm ngay 1 triệu</li>
        <li>2. Phiếu mua hàng Apple trị giá 1 triệu</li>
        <li>Màu: <label><input type="radio" name="mau" checked> Xám</label>
            <label><input type="radio" name="mau">Đen</label>
            <label ><input type="radio" name="mau" >Đỏ</label>
        </li>
        <label for="so-luong">Số lượng</label>
        <select name="so-luong" class="form-control-muahang-soluong">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
    </ul>
    <hr>
    <p>Tổng tiền: <b style="float: right">
        <?php  
            $select_option = $_POST['so-luong'];
            $gia = $row['gia'];
            $tong_tien = $select_option * $gia;
            echo $tong_tien;
        ?>          
        </b></p>
    <p>Giảm: <b style="float: right">1.000.000đ</b></p>
    <p><b>Cần thanh toán: </b><b style="float: right; color: red">
        <?php
            echo ($tong_tien - 1000000) . 'đ';
        ?>
    </b> </p>
    <label><input type="radio" name="gioitinh" checked> Anh</label>
    <label><input type="radio" name="gioitinh"> Chị</label>
    <br>
    <br>
    <input type="text" name="seach_text" class="form-control-muahang" placeholder="Họ và tên:">
    <br>
    <br>
    <input type="text" name="seach_text" class="form-control-muahang" placeholder="Số điện thoại:">
    <p>Để được phục vụ nhanh hơn, hãy chọn thêm:</p>
    <label><input type="radio" name="chon" checked>Giao hàng tận nhà</label>
    <label><input type="radio" name="chon" >Nhận tại cửa hàng</label>
    <hr>
    Chân thành cảm ơn quý khách!!
    <br>
    <br>
</div>
</body>
</html>