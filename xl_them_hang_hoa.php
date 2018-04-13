<?php
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

    $uploadOk = 0;
	// Check if $uploadOk is set to 0 by an error
    $total = count($_FILES['anh_']['name']);

    //loop through each file
    for($i=0; $i<$total; $i++){
        $tmpFilePath = $_FILES['anh_']['tmp_name'][$i];

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["anh_"]["tmp_name"][$i]);
            if($check == false) {
                die("File is not an image.");
                die("Không phải file ảnh. Vui lòng kiểm tra lại");
                return;
            }
        }

        // Check if file already exists
        $target_file = "./images/" . basename($_FILES["anh_"]["name"][$i]);
        if (file_exists($target_file)) {
            die("File ảnh đã tồn tại. Vui lòng kiểm tra lại.");
            return;
        }

        if($tmpFilePath != ""){
            $newFilePath = "./images/" . $_FILES['anh_']['name'][$i];
            if(move_uploaded_file($tmpFilePath, $newFilePath)) $uploadOk++;
        }
	}

	if($uploadOk == $total) die("Đã up thành công " . $total);
?>