<?php
include ("database.php");
$loai_qc = $_POST['loai_qc'];
$noi_dung = $_POST['noi_dung'];

$total = count($_FILES['anh_']['name']);
$file_anh = "";
$file_anh = basename($_FILES['anh_']['name'][$i]) . "@";

$query_insert = "Insert Into quang_cao(anh, state, noidung) Values ('$file_anh', '$loai_qc', 'noi_dung')";

if(mysqli_query($dbConn, $query_insert)){
    echo "hang_hoa inserted";
}else{
    echo "hang_hoa ERROR";
}

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