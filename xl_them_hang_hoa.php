<?php
include ("database.php");
/*$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["anh_"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES["anh_"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
*/

$total = count($_FILES['anh_']['name']);
$file_anh = "";

for($i = 0; $i < $total; $i++){
    $file_anh .= basename($_FILES['anh_']['name'][$i]) . "@";
}

//todo select querry
$loai_hh = $_POST['loai_hh'];
$ma_hh = $_POST['ma_hh'];
$ten_hh = $_POST['ten_hh'];
$so_luong = $_POST['so_luong'];
$gia_hh = $_POST['gia_hh'];

$man_hinh = $_POST['man_hinh'];
$hdh_ = $_POST['hdh_'];
$camera_sau = $_POST['camera_sau'];
$camera_truoc = $_POST['camera_truoc'];
$cpu_ = $_POST['cpu_'];
$ram_ = $_POST['ram_'];
$bo_nho_trong = $_POST['bo_nho_trong'];
$the_nho = $_POST['the_nho'];
$sim_ = $_POST['sim_'];
$pin_ = $_POST['pin_'];

$query_insert_hanghoa = "Insert Into hang_hoa Values ('$ma_hh', '$ten_hh', '$so_luong', '$gia_hh', '$loai_hh')";
$query_insert_chitiet_hanghoa = "Insert Into chi_tiet_hang_hoa Values ('$ma_hh', '$file_anh', '$man_hinh', '$hdh_', '$camera_sau', '$camera_truoc', '$cpu_', '$ram_', '$bo_nho_trong', '$the_nho', '$sim_', '$pin_')";

if(mysqli_query($dbConn, $query_insert_hanghoa)){
    echo "hang_hoa inserted";
}else{
    echo "hang_hoa ERROR";
}

if(mysqli_query($dbConn, $query_insert_chitiet_hanghoa)){
    echo "chi_tiet_hang_hoa inserted";
}else{
    echo "hang_hoa ERROR";
}

//mysqli_close($dbConn);

//todo Upload ảnh
$uploadCount = 0;
$uploadOk = 1;

//loop through each file
for($i=0; $i<$total; $i++){
    $tmpFilePath = $_FILES['anh_']['tmp_name'][$i];

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($tmpFilePath);
        if($check == false) {
            $uploadOk = 0;
            die("Không phải file ảnh. Vui lòng kiểm tra lại");
        }
    }

    // Check if file already exists
    $target_file = "./img/" . basename($_FILES['anh_']['name'][$i]);
    if (file_exists($target_file)) {
        $uploadOk = 0;
        die("File ảnh đã tồn tại. Vui lòng kiểm tra lại.");
    }

    if($tmpFilePath != "" && $uploadOk == 1){
        $newFilePath = "./img/" . $_FILES['anh_']['name'][$i];
        if(move_uploaded_file($tmpFilePath, $newFilePath)) $uploadCount++;
    }
}
if($uploadOk == $total) echo "Đã up thành công " . $total;
?>