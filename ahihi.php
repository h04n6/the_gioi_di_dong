<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WELCOME TO TGDD</title>
    <link href="css/style2.css" type="text/css" rel="stylesheet">
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
<!--
<div id="vertical_menu">
    <ul>
        <li><a href="#"> ĐIỆN THOẠI</a></li>
        <ul>
            <li><a href="#"> Iphone</a></li>
            <li><a href="#">OPPO</a></li>
            <li><a href="#">Samsung</a></li>
        </ul>
        <li><a href="#">TABLET</a></li>
        <li><a href="#">LAPTOP</a></li>
        <li><a href="#">PHỤ KIỆN</a></li>
        <li><a href="#">CŨ GIÁ RẺ</a></li>
        <li><a href="#">KHUYẾN MÃI</a></li>
    </ul>
</div>-->

<div class="adver">
    <?php
    //lấy ra 2 ảnh mới nhất để làm quảng cáo
    $query_select_image_adver = "Select * From quang_cao Where state = 2 Order By ma_quang_cao DESC Limit 2";
    $result = mysqli_query($dbConn, $query_select_image_adver);
     while ($row = mysqli_fetch_assoc($result)){ 
    ?>
        <a href="quang_cao.php?id=<?php echo $row["ma_quang_cao"]?>">
            <img src="img/<?php echo $row["anh"] ?>">
        </a>
    <?php
    }    
    ?>

    <img src="img/qc.png">
    <img src="img/qc2.png">
</div>

<div id="main">
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">

            <a href="adver1_oppo.html"><img src="img/st.png"></a>

        </div>

        <div class="mySlides fade">

            <a href="adver_issac.html"><img src="img/issac.png"  ></a>

        </div>

        <div class="mySlides fade">

            <a href="adver_vivo.html"></a><img src="img/mh.png"  ></a>

        </div>
        <div class="mySlides fade">

            <a href="Adver_ship.html"><img src="img/fade.png"  ></a>

        </div>
        <div class="mySlides fade">

            <img src="img/fade2.png"  >

        </div>
        <div class="mySlides fade">

            <a href="Adver_phukien.html"><img src="img/fade3.png"  ></a>

        </div>


        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->

    <script type="text/javascript">
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides fade");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 3500); // Change image every 2 secondsdsd
        }
    </script>
  </div>


<div>
    <a href="#">            <img src="img/pic.png" >        </a>
</div>

<div class="right">
    <p style="color: orangered; font-weight: bold"><marquee>BẠN MUỐN MUA GÌ??? HÃY ĐẾN VỚI CHÚNG TÔI!!</marquee></p>
    <p style="text-align: left; color: black; font-size: 18px;padding: 10px"><b>12 KHUYẾN MÃI HOT NHẤT</b> </p>
    <div class="sanpham">
        <ul>
        <?php
        include ("database.php");
        $query_select = "Select hang_hoa.ma_hh as ma, ten, gia, anh From hang_hoa Inner Join chi_tiet_hang_hoa On hang_hoa.ma_hh = chi_tiet_hang_hoa.ma_hh Limit 12";
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
















