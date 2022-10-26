<?php

if (isset($_POST['btnDangBai'])) {
    // NẾU CÓ THÌ MỚI THỰC THI TIẾP
    $title = $_POST['txtTitle'];
    $description = $_POST['txtDescription'];
    // $images = file_get_contents($_FILES['txtImages']['tmp_names']);
    // var_dump($_FILES['txtImages']);
    // die;
    $conn = mysqli_connect('localhost', 'root', '', 'electronic');

    if (!$conn) {
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }

    //Thư mục bạn sẽ lưu file upload
    $target_dir    = "uploads/";
    //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
    $target_file   = $target_dir . basename($_FILES["txtImages"]["name"]);

    $allowUpload   = true;

    //Lấy phần mở rộng của file (jpg, png, ...)
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    // Cỡ lớn nhất được upload (bytes)
    $maxfilesize   = 800000;

    ////Những loại file được phép upload
    $allowtypes    = array('jpg', 'png', 'jpeg', 'gif');


    // Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
    if ($_FILES["txtImages"]["size"] > $maxfilesize) {
        echo "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
        $allowUpload = false;
    }



    if ($allowUpload) {
        // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
        if (move_uploaded_file($_FILES["txtImages"]["tmp_name"], $target_file)) {
            echo "File " . basename(
                $_FILES["txtImages"]["name"]
            ) .
                " Đã upload thành công.";

            echo "File lưu tại " . $target_file;
        } else {
            echo "Có lỗi xảy ra khi upload file.";
        }
    } else {
        echo "Không upload được file, có thể do file lớn, kiểu file không đúng ...";
    }


    $sql = "  
      INSERT INTO posts(title, description, images)  
      VALUES('$title','$description', '$target_file');  
      ";

    if ($conn->query($sql) === TRUE) {
        $success = " Đăng bài thành công";
        header("location: TheGioi.php?success=$success"); // Có lỗi => chuyển hướng sang 1 trang thông báo lỗi
    } else {
        $thongBaoLoi = " Đăng bài không thành công ";
        header("location: form-posts.php?error=$thongBaoLoi"); // Có lỗi => chuyển hướng sang 1 trang thông báo lỗi  
    }
}
