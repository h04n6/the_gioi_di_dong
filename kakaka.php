<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OPPO F5</title>
    <link rel="stylesheet" href="css/style2.css" type="text/css">
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

                    <li><a href="#">IPhone</a></li>
                    <li><a href="#">OPPO</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Xiaomi</a></li>
                    <li><a href="#">Huawei</a></li>

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
<section>
    <p style="font-weight: bold; font-size: 20px">THÔNG SỐ KĨ THUẬT</p>

    <?php
    include ("database.php");
    //nhận dữ liệu từ form main
    $ma_hh = $_POST('ma_hh');
    $query_select = "Select * From chi_tiet_hang_hoa Inner Join hang_hoa On hang_hoa.ma_hh = chi_tiet_hang_hoa.ma_hh Where ma_hh='$ma_hh'"
    mysqli_query($dbConn, $query_select);
    ?>

    <div id="a">
        <p style=" font-size: 20px"> <?php echo $row['ten'] ?></p>
        <img src="img/oppof5.png" > </div>
    <div id="b">
       <p style="color: red; font-size: 25px">8.990.000đ</p>
        <div id="d">  <p style="font-weight: bold">KHUYẾN MÃI</p>
            <p>Phiếu mua hàng trị giá 100.000đ khi mua online </p>
            <p>Phiếu mua hàng Oppo trị giá 500.000đ </p>
            <a href="http://localhost:1124/Designing%20and%20programing%20web/ahihe.html?_ijt=ptqr1t277ksaam7jh2p0qd3lt8"><img src="img/Capture.PNG" alt=""></a>
            <a href="http://localhost:1124/Designing%20and%20programing%20web/hehehe.html?_ijt=d729e5j72o7qd8c6v85dvg2anb"><img src="img/Capture2.PNG" alt=""></a>
            <p>Gọi đặt mua ngay hôm nay: <b style="color: #3b95f5">0975.106.081</b> (Miễn phí: 10-11pm)</p>
        </div>

    </div>
    <div id="c">
        <p>Màn hình:        <?php echo $row['man_hinh'] ?>
            <br>
            <hr>
            Hệ điều hành:   <?php echo $row['hdh'] ?>
            <br>
        <hr>
            Camera sau:     <?php echo $row['camera_sau'] ?>
            <br>
        <hr>
            Camera trước:   <?php echo $row['camera_truoc']?>
            <br>
        <hr>
            CPU:            <?php echo $row['cpu']?>
            <br>
        <hr>
            RAM:            <?php echo $row['ram']?>
            <br>
        <hr>
            Bộ nhớ trong:   <?php echo $row['bo_nho_trong']?>
            <br>
        <hr>
            Thẻ nhớ:        <?php echo $row['the_nho']?>
        <br>
        <hr>
            Thẻ SIM:        <?php echo $row['sim']?>
            <br>
        <hr>
            Dung lượng pin: <?php echo $row['pin']?>
        <hr>
        </p>
        ?>
        
    </div>
</section>

</body>
</html>