<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IPHONE</title>
    <link rel="stylesheet" href="css/style2.css"type="text/css">
    <?php
    include ("database.php");
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
            
            <li><a href="danh_sach_dien_thoai.php">ĐIỆN THOẠI</a>
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
    <p style="text-align: left; color: black; font-size: 18px;padding: 10px"><b>DANH SÁCH SẢN PHẨM</b> </p>
    <div class="sanpham">
        <ul>
        <?php
        $ma_thuong_hieu = "1";
        if(isset( $_GET['id'])){
            $ma_thuong_hieu = $_GET['id'];
        }
        
        $query = "Select * From hang_hoa 
            Inner Join thuong_hieu On hang_hoa.ma_thuong_hieu = thuong_hieu.ma_thuong_hieu 
            Inner Join chi_tiet_hang_hoa On chi_tiet_hang_hoa.ma_hh = hang_hoa.ma_hh 
            Where thuong_hieu.ma_thuong_hieu = $ma_thuong_hieu";
        $query_select = mysqli_query($dbConn, $query);
        while ($row = $query_select->fetch_assoc()){
            $arr = array();
            $arr = explode('@', $row["anh"]);
        ?>
            <li>
                <a href="kakaka.php?id=<?php echo $row['ma_hh']?>">
                    <img src="img/<?php echo $arr[0] ?>" width="180" height="200">
                    <p><?php echo $row['ten'] ?></p>
                    <p style="color: red"><b><?php echo $row['gia'] ?>đ</b></p>
                    <a href="muahang.php"><img src="img/Capture.png" width="180" ></a>
                    <img src="img/Capture2.png" alt="" width="180">
                </a>
            </li>
        <?php
            }
        ?>
        </ul>
    
</body>
</html>