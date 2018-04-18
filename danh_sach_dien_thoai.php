<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>THÔNG TIN CHI TIẾT</title>
    <link rel="stylesheet" href="css/style2.css" type="text/css">
    <?php
        include("database.php");
    ?>
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


<div class="right">
    <p style="color: orangered; font-weight: bold"><marquee>BẠN MUỐN MUA GÌ??? HÃY ĐẾN VỚI CHÚNG TÔI!!</marquee></p>
    <p style="text-align: left; color: black; font-size: 18px;padding: 10px"><b>12 KHUYẾN MÃI HOT NHẤT</b> </p>
    <div class="sanpham">
        <ul>
        <?php
        include ("database.php");
        $query_select = "Select hang_hoa.ma_hh as ma, ten, gia, anh From hang_hoa Inner Join chi_tiet_hang_hoa On hang_hoa.ma_hh = chi_tiet_hang_hoa.ma_hh";
        $result = mysqli_query($dbConn, $query_select);
        while ($row = mysqli_fetch_assoc($result)){
            $ar = array();
            $ar = explode('@', $row["anh"]);
            ?>
        <li><a href="kakaka.php?id=<?php echo $row["ma"]?>">
            <img src="img/<?php echo $ar[0] ?>" width="180" height="200">
            <p><?php echo $row["ten"] ?></p>
            <p style="color: red"><b><?php echo $row["gia"] ?></b></p>
        </a></li>;

        <!-- kết thúc vòng while -->
        <?php
            }     
        ?>               
        </ul>
    </div>
</div>

</body>
</html>