<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thêm hàng hóa</title>
    <link href="them_hang_hoa.css" type="text/css" rel="stylesheet">
</head>

<body>
	<h2 class="text-center bg-primary">VUI LÒNG NHẬP ĐỦ THÔNG TIN</h2>
	<div id="left">
        <p>Thông tin chung</p>
		<form class="form_nhap_thong_tin" method="post" enctype="multipart/form-data" action="xl_them_hang_hoa.php"
        onsubmit="return check_blank_input()">
			<div class="form-group">
				<label for="loai-hh">Loại hàng</label>
				<select id="loai-hh" name = "loai_hh" class="form-control">
					<?php
					include ("database.php");
					$query_select = mysqli_query($dbConn, "Select * From loai_hang");
					while ($row = $query_select->fetch_assoc()){
						//echo "<option value=\"" . $row['ma_loai']. "\">" . $row['ten_loai'] . "</option>";
						echo "<option value='{$row['ma_loai']}'>{$row['ten_loai']}</option>";
					}
					?>
                    <script type="text/javascript">
                        var s = document.getElementById('loai-hh');
                        s.addEventListener('change', function(){
                            var value_loai_hh = s.options[s.selectedIndex].value;
                            alert(value_loai_hh);
                        })
                        s.value = 1; <!--default: smartphone-->
                    </script>
				</select>
			</div>

			<div class="form-group">
				<label for="thuong-hieu">Thương hiệu</label>
				<select id="thuong-hieu" name = "thuong_hieu" class="form-control">
					<?php
					include ("database.php");
					$query_select = mysqli_query($dbConn, "Select * From thuong_hieu");
					while ($row = $query_select->fetch_assoc()){
						//echo "<option value=\"" . $row['ma_loai']. "\">" . $row['ten_loai'] . "</option>";
						echo "<option value='{$row['ma_thuong_hieu']}'>{$row['ten_thuong_hieu']}</option>";
					}
					?>
                    
				</select>
			</div>

			<div class="form-group">
				<label for="ma-hh">Mã hàng</label>
				<input type="text" name="ma_hh" id="ma-hh" class="form-control">
			</div>

			<div class="form-group">
				<label for="ten-hh">Tên hàng</label>
				<input type="text" name="ten_hh" id="ten-hh" class="form-control">
			</div>
			<div class="form-group">
				<label for="so-luong">Số lượng</label>
				<input type="text" name="so_luong" id="so-luong" class="form-control">
			</div>
			<div class="form-group">
				<label for="gia-hh">Giá</label>
				<input type="text" name="gia_hh" id="gia-hh" class="form-control">
			</div>

           

            <p>Thông tin chi tiết</p>
            <div class="form-group">
                <label for="anh-">Ảnh</label>
                <input type="file" name="anh_[]" id="anh-" multiple class="form-control">
                <!--<p>Description</p>
                <textarea rows="10" cols="35" name="Description"></textarea>-->
            </div>
            <div class="form-group">
                <label for="man-hinh">Màn hình</label>
                <input type="text" name="man_hinh" id="man-hinh" class="form-control">
            </div>
            <div class="form-group">
                <label for="hdh-">Hệ điều hành</label>
                <input type="text" name="hdh_" id="hdh-" class="form-control">
            </div>
            <!--<div class="form-control">
                <label for="camera-sau">Camera sau</label>
                <input type="text" name="camera_sau" id="camera-sau" class="form-control">
            </div> -->
            <div class="form-group">
                <label for="camera-sau">Camera sau</label>
                <input type="text" name="camera_sau" id="camera-sau" class="form-control">
            </div>

            <div class="form-group">
                <label for="camera-truoc">Camera trước</label>
                <input type="text" name="camera_truoc" id="camera-truoc" class="form-control">
            </div>

        
            <div class="form-group">

                <label for="cpu-">CPU</label>
                <input type="text" name="cpu_" id="cpu-" class="form-control">
            </div>
            <div class="form-group">
                <label for="ram-">RAM</label>
                <input type="text" name="ram_" id="ram-" class="form-control">
            </div>
            <div class="form-group">
                <label for="bo-nho-trong">Bộ nhớ trong</label>
                <input type="text" name="bo_nho_trong" id="bo-nho-trong" class="form-control">
            </div>
            <div class="form-group">
                <label for="the-nho">Thẻ nhớ</label>
                <input type="text" name="the_nho" id="the-nho" class="form-control">
            </div>
     <div class="form-group">
                <label for="sim-">Sim</label>
                <input type="text" name="sim_" id="sim-" class="form-control">
            </div>
            <div class="form-group">
                <label for="pin-">Pin</label>
                <input type="text" name="pin_" id="pin-" class="form-control">
            </div>

         

            <div class="action">
                <button id="button-tiep-theo" type="submit">Tiếp theo</button>
                <script type="text/javascript">
                    document.getElementById('button-tiep-theo').addEventListener('click', function() {
                        var mahh = document.getElementById('ma-hh').value;
                        <?php
                        include("database.php");
                        $query_select_ma_hh = "Select ten From hang_hoa Where ma_hh = 'mahh'";
                        if (mysqli_query($dbConn, @$query_select_ma_hh)) {
                            die("Trùng mã sản phẩm");
                        }
                        ?>
                    })
                </script>
            </div>
        </form>


        </div>




            

    </div>
        </form>

</body>
</html>