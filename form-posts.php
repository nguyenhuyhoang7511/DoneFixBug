<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.css">

</head>

<body>
    <form enctype='multipart/form-data' style=" width: 800px; padding: 16px; margin-left: 450px; margin-top: 120px;" class="border border-primary" action="process-form-post.php" method="POST">
        <div class="container ">
            <h4 style="text-align: center; " class="text-danger text-uppercase">Nhập thông tin của bài đăng</h4>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><b>Title posts</b></label>
                <input name="txtTitle" type="text" class="form-control" placeholder="Enter title ?">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1"><b>Description</b></label>
                <textarea name="txtDescription" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3 mt-4">
                <label for="exampleInputPassword1" class="form-label"><b>Chọn ảnh</b></label>
                <input name="txtImages" type="file" class="form-control">
            </div>
            <div class="d-flex justify-content-evenly">
                <button name="btnDangBai" type="submit" class="btn btn-primary  text-uppercase">ĐĂNG BÀI</button>
            </div>
        </div>
    </form>



</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="search1.js"></script>

</html>