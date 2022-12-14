<!DOCTYPE html>

<html>

<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title></title>
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="main.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.css">

</head>

<body>
     <header id="wrapper">
          <div id="header">
               <nav class="container">
                    <a href="index.html">
                         <div class="banner--logo"><img src="img/logo.png.png" alt="24h.vn"></div>
                    </a>
                    <ul id="main-menu">

                         <li class="banner--list">
                              <span class="iconmenutop"><i class="fas fa-align-justify"></i></span>
                              <a>DANH MỤC</a>
                              <ul class="submenu">
                                   <li><a href="TheGioi.html">Thế giới</a></li>
                                   <li><a href="tin2.html">Kinh Doanh</a></li>
                                   <li><a href="index.html">Bóng đá</a>
                                   <li><a href="index.html">Sức khỏe</a></li>
                                   <li><a href="index.html">Hi-tech</a></li>
                                   <li><a href="index.html">Thể thao</a></li>
                                   <li><a href="index.html">Giải trí </a></li>
                                   <li><a href="index.html">Làm đẹp</a></li>
                                   <li><a href="index.html">Xem lịch</a></li>
                                   <li><a href="index.html">Hỏi-Đáp</a></li>
                                   <li><a href="index.html">Ô tô</a></li>
                                   <li><a href="index.html">Công nghệ thông tin</a></li>
                                   <li><a href="index.html">Xe máy-Xe đạp</a></li>
                                   <li><a href="index.html">Thị trường-Tiêu dùng</a></li>
                                   <li><a href="index.html">Du lịch</a></li>
                                   <li><a href="index.html">Giáo dục-Du học</a></li>
                                   <li><a href="index.html">Sức khỏe đời sống</a></li>
                              </ul>

                         </li>
                         <li><span class="iconmenutop"><img src="img/thegioilogo.png"></src></span><a href="TheGioi.html">THẾ GIỚI</a></li>
                         <li><span class="iconmenutop"><img src="img/bongdalogo.png"></src></span><a href="">BÓNG ĐÁ</a>
                         </li>
                         <li><span class="iconmenutop"><img src="img/kinhdoanhlogo.png"></src></span><a href="tin2.html">KINH DOANH</a></li>
                         <li><span class="iconmenutop"><img src="img/suckhoelogo.png"></src></span><a href="">SỨC
                                   KHỎE</a></li>
                         <li><span class="iconmenutop"><img src="img/hitechlogo.png"></src></span><a href="">HI-TECH</a>
                         </li>
                         <li><span class="iconmenutop"><img src="img/thethaologo.png"></src></span><a href="">THỂ
                                   THAO</a></li>
                         <li><span class="iconmenutop"><img src="img/ngoaihanganhlogo.png"></src></span><a href="">NGOẠI
                                   HẠNG ANH</a></li>
                         <li><span class="iconmenutop"><img src="img/giaitrilogo.png"></src></span><a href="">GIẢI
                                   TRÍ</a></li>
                         <li><span class="iconmenutop"><img src="img/lichlogo.png"></src></span><a href="">XEM LỊCH</a>
                         </li>
                         <li><span class="iconmenutop"><img src="img/magalogo.png"></src></span><a href="">MAGAZINE</a>
                         </li>
                         <li>
                              <a href="form-posts.php"><span class="iconmenutop"><img src="img/magalogo.png"></src></span><a>ĐĂNG BÀI</a></a>
                         </li>
                         <!-- search -->

                         <div action="" id="search-box" class="">
                              <button id="btn-search">
                                   <i class="fa-solid fa-magnifying-glass"></i>
                              </button>
                              <div class="hover--input">
                                   <input type="text" id="search__banbe" onkeyup="searchfunc()" placeholder="Nhập tin tức cần tìm ">
                              </div>
                         </div>
                    </ul>
               </nav>
          </div>
     </header>



     <div class="home-page-content">
          <!-- table -->
          <div class="tb-main">
               <table>
                    <div>
                         <tr>
                              <td colspan="2">
                                   <a href="index.html" class="title-tin">Trang chủ</a> | <a href="index.html" class="title-tin"><b>Thế giới</b></a> <br><br>
                                   <ul class="tag_tin">
                                        <li class="tag green">Tin tức</li>
                                        <li class="tag grey">Điểm nóng</li>
                                        <li class="tag grey">Quân sự</li>
                                        <li class="tag grey">Thế giới động vật</li>
                                        <li class="tag grey">Thâm cung bí sử</li>
                                        <li class="tag grey">Cung đình trung hoa</li>
                                   </ul>
                              </td>
                         </tr>
                    </div>
                    <tr>
                         <?php
                         // Kiểm tra xem có tồn tại cái error hay không 
                         if (isset($_GET['success'])) {
                              echo "<p class = 'text-danger fw-bold' >  => {$_GET['success']} </p>";
                         }
                         ?>
                    </tr>

                    <tr>
                         <?php
                         // Kiểm tra xem có tồn tại cái error hay không 
                         if (isset($_GET['error'])) {
                              echo "<p class = 'text-danger fw-bold' >  =>> {$_GET['error']} </p>";
                         }
                         ?>
                    </tr>

                    <tr>
                         <td class="ex1">
                              <span><a href="tin1.html"> </a></span><br>
                              <span><a href="#"><img align="left" src="imgthegioi/1.png" height="407px" width="450">
                                   </a>
                         </td>
                         <td class="ex1">
                              <span><a href="tin2.html"></a></span><br>
                              <span><img align="left" src="imgthegioi/anh2.png" height="203" width="300"><br><br>
                                   <span><img align="left" src="imgthegioi/anh3.jpg.png" height="203" width="300">
                         </td>
                    </tr>

                    <tr>
                         <td class="ex1">

                              <span><a href=""><b> Ấn Độ thông báo sắp tập trận với Mỹ gần biên giới tranh chấp với
                                             Trung</b></a></span><br>
                              <span><img align="left" src="imgthegioi/nen1.jpeg" height="70px">
                                   <p>Ấn Độ và Mỹ sắp tập trận chung tại khu vực biên giới tranh chấp với Trung Quốc
                                        trên dãy Himalaya trong bối cảnh căng...</p>
                              </span><br>
                              <span><a class="time-tin">08/08/2022 | 09:00</a></span>


                         </td>
                         <td class="ex1">

                              <span><a href=""> <b>Châu Á, Châu Âu vào cuộc đua tranh giành khí đốt </b> </a></span><br>
                              <span><img align="left" src="imgthegioi/anhnen2.jpg" height="70px">
                                   <p>Nhiều nước châu Á và châu Âu đẩy mạnh thu mua khí đốt hóa lỏng để tăng nguồn dự
                                        trữ cuối năm giữa lúc thị...</p>
                              </span><br>
                              <span><a class="time-tin">08/2022 | 08:23</a></span>

                         </td>
                    </tr>


                    <tr>
                         <td class="ex1">

                              <span><a href=""><b>Ngừng bắn ở giải Gaza</b></a></span><br>
                              <span><img align="left" src="imgthegioi/anhnen4.jpg" height="70px">
                                   <p>Israel và Lực lượng Thánh chiến Hồi giáo Palestin (PIJ) tuyên bố ngừng bắn ở dải
                                        Gaza sau khi Ai Cập đứng ra làm trung...</p>
                              </span><br>
                              <span><a class="time-tin">08/08/2022 | 09:00</a></span>


                         </td>
                         <td class="ex1">

                              <span><a href=""> <b> Israel hứng 580 rocket phóng từ dải Gaza </b> </a></span><br>
                              <span><img align="left" src="imgthegioi/anhnen3.jpg" height="70px">
                                   <p>Hệ thống phòng thủ tên lửa Vòm Sắt (Iron Dome) đã đánh chặn 97% số đạn rocket rơi
                                        xuống khu dân cư ...</p>
                              </span><br>
                              <span></a></span>

                         </td>
                    </tr>



                    <tr>

                         <td class="ex1">


                              <span><img src="imgthegioi/qcao2.png" height="250px" width="350px"></span>


                         </td>


                    </tr>
                    <tr>
                         <td class="ex1">

                              <span><a href=""><b>Video hiếm quay cảnh loài cá lớn nhất thế giới có thể sống ở độ sâu
                                             gần...</b></a></span><br>
                              <span><img align="left" src="imgthegioi/anhnen5.gif" height="70px">
                                   <p>Các nhà khoa học đến từ Cơ quan Khoa học và Công nghệ Hải dương-Trái Đất Nhật Bản
                                        (JAMSTEC) gần đây công bố hình ảnh...</p>
                              </span><br>
                              <span><a></a></span>


                         </td>
                         <td class="ex1">

                              <span><a href=""> <b>Ngoại trưởng Blinken: Mỹ sẽ bảo vệ Philppines nếu bị tấn công ở
                                             Biển... </b> </a></span><br>
                              <span><img align="left" src="imgthegioi/anhnen6.jpg" height="70px">
                                   <p>
                                        Ngoại trưởng Mỹ Antony Blinken vừa đảm bảo với Philippines rằng Mỹ sẽ bảo vệ
                                        Philippines nếu nước này bị tấn công ở Biển Đông,..</p>
                              </span><br>
                              <span></a></span>

                         </td>
                    </tr>
                    <tr>
                         <td class="ex1">

                              <span><a href=""><b>Nga bắt đầu đợt tấn công mới ở 2 thành phố chiến lược thuộc tỉnh
                                             Donetsk</b></a></span><br>
                              <span><img align="left" src="imgthegioi/anhnen7.jpg" height="70px">
                                   <p>Các lực lượng Nga ngày 6/8 bắt đầu đợt tấn công mới nhằm vào hai thành phố ở tỉnh
                                        Donetsk, trong khi vẫn tiếp tục.</p>
                              </span><br>
                              <span><a></a></span>


                         </td>
                         <td class="ex1">

                              <span><a href=""> <b>Ukraine phong tỏa thành phố để truy tìm người chỉ điểm cho Nga </b>
                                   </a></span><br>
                              <span><img align="left" src="imgthegioi/anhnen8.jpg" height="70px">
                                   <p>Chính quyền thành phố Mykolaiv (Ukraine) đã áp dụng những biện pháp quyết liệt để
                                        tìm kiếm “cộng tác viên” và “phần tử ly khai”..</p>
                              </span><br>
                              <span></a></span>
                         </td>
                    </tr>
                    <tr>
                         <td class="ex1">

                              <span><a href=""><b>Thổ Nhĩ Kỳ bắt tay Nga, quan chức phương tât lo
                                             lắng</b></a></span><br>
                              <span><img align="left" src="imgthegioi/anhne9.png" height="70px">
                                   <p>Các nước phương Tây lo ngại về sự hợp tác ngày càng sâu rộng giữa thành viên NATO
                                        là Thổ Nhĩ Kỳ với Nga, theo...</p>
                              </span><br>
                              <span><a></a></span>
                         </td>
                         <td class="ex1">

                              <span><a href=""> <b>Chục tàu chiến gặp mặt nhau giữa eo biển Đài Loan </b>
                                   </a></span><br>
                              <span><img align="left" src="imgthegioi/anhnen9.jpg" height="70px">
                                   <p>
                                        Sáng nay, khoảng 10 tàu hải quân của Trung Quốc đại lục và Đài Loan (Trung Quốc)
                                        bám sát đường trung tuyến giữa eo biển...</p>
                              </span><br>
                              <span></a></span>
                         </td>
                    </tr>
               </table>

          </div>


          <!-- menu-right -->
          <div class="menu-right">
               <div class="box-menu">
                    <div>
                         <img src="img list/dabig.png" alt="" height="550" width="290px">
                    </div>

                    <div class="menu-right">
                         <div class="box-menu">

                              <div class="title-menu">
                                   <span><i class="fa-solid fa-arrow-up-right"></i>Thông tin chứng khoán</span>
                              </div>

                              <div class="box-content-menu">
                                   <!-- 1 -->
                                   <div class="content-menu">
                                        <div>
                                             <img src="img tin/tin bên 5.jpg" alt="">
                                        </div>
                                        <div>
                                        </div>
                                   </div>
                                   <!-- 2 -->
                                   <div class="content-menu">
                                        <div>
                                             <img src="img tin/hotgirl.jpg" alt="" width="150px">
                                        </div>
                                        <div>
                                             <span>Tiểu thư Trà Vinh tung hậu trường chụp hình kịch tính, o ép nét
                                                  nở...</span>
                                        </div>
                                   </div>
                                   <!-- 3 -->

                              </div>
                              <div>
                                   <img src="img list/dabig2.png" alt="" width="290px">
                              </div>

                         </div>
                    </div>
               </div>
          </div>

     </div>
     <div>
          <hr>
          <h3 style="text-align: center;">NEW FEED</h3>
     </div>
     <div class="container d-flex">
          <td colspan="2">
               <div class="container row d-flex bd-highlight  justify-content-between">
                    <div class="card col-md-3 mt-4" style="flex-basis : 49%">
                         <img src="imgthegioi/anhnen8.jpg" width="100%" class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         </div>
                    </div>
                    <div class="card col-md-3 mt-4" style="flex-basis : 49%">
                         <img src="imgthegioi/anhnen6.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         </div>
                    </div>

                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'electronic');
                    if (!$conn) {
                         die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                    $sql = "SELECT * FROM posts";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                         while ($row = (mysqli_fetch_assoc($result))) {
                              $id_tour = $row['id'];
                    ?>
                              <div class="card col-md-3 mt-4" style="flex-basis : 49%">
                                   <img src="<?php echo $row['images']; ?>" />
                                   <div class="card-body">
                                        <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                        <p class="card-text"><?php echo $row['description']; ?></p>
                                   </div>
                              </div>
                    <?php
                         }
                    } else
                         header('location: index.php');
                    mysqli_close($conn);
                    ?>
               </div>
          </td>
     </div>
     </div>
     </div>
     <br>

     <footer>
          <div class="list-footer">
               <ul class="menu-footer">
                    <li>
                         <a href="#">Tin tức</a>
                         <div>
                              <ul class="mini-list">
                                   <li>Chính trị</li>
                                   <li>Tin TP HCM</li>
                              </ul>
                         </div>
                    </li>

                    <li>
                         <a href="#">Bóng đá</a>
                         <div>
                              <ul class="mini-list">
                                   <li>Video</li>
                                   <li>Ngoại hạng Anh</li>
                              </ul>
                         </div>
                    </li>

                    <li>
                         <a href="#">Thời Trang</a>
                         <div>
                              <ul class="mini-list">
                                   <li>Bí quyết mặc đẹp</p>
                                   </li>
                                   <li>Người mẫu nữ</li>
                              </ul>
                         </div>
                    </li>

                    <li>
                         <a href="#">Pháp Luật</a>
                         <div>
                              <ul class="mini-list">
                                   <li>Vụ án nổi tiếng</li>
                                   <li>Trọng án</li>
                              </ul>
                         </div>
                    </li>

                    <li>
                         <a href="#">Hi-tech</a>
                         <div>
                              <ul class="mini-list">
                                   <li>Tin tức công nghệ</li>
                                   <li>Trọng án</li>
                              </ul>
                         </div>
                    </li>
                    <li>
                         <a href="#">Kinh Doanh</a>
                         <div>
                              <ul class="mini-list">
                                   <li>Khởi nghiệp</li>
                                   <li>Tỉ giá</li>
                              </ul>
                         </div>
                    </li>
                    <li>
                         <a href="#">Sức khỏe</a>
                         <div>
                              <ul class="mini-list">
                                   <li>Bệnh đàn ông</li>
                                   <li>Bệnh phụ nữ</li>
                              </ul>
                         </div>
                    </li>

               </ul>
          </div>
     </footer>
     <div class="list-footer">
          <ul class="menu-ganend">
               <li>
                    <a href="#">Giới thiệu</a>
               </li>
               <li>
                    <a href="#">Góp ý</a>
               </li>
               <li>
                    <a href="#">Đầu trang</a>
               </li>
               <li>
                    <a href="#">Liên hệ quảng cáo</a>
               </li>


          </ul>
     </div><br>
     <div class="end">
          <span>Cơ quan chủ quản: Công ty Cổ phần Quảng cáo Trực tuyến 24H Trụ sở: Tầng 12, Tòa nhà Geleximco, 36 Hoàng
               Cầu, Phường Ô Chợ Dừa, Quận Đống Đa, TP Hà Nội. Tel: (84-24) 73 00 24 24 hoặc (84-24) 3512 1806 - Fax:
               (84-24) 3512 1804. Chi nhánh: Tầng 7, Tòa nhà Việt Úc, 402 Nguyễn Thị Minh Khai, Phường 5, Quận 3, TP. Hồ
               Chí Minh. Tel: (84-28) 7300 2424 / Giấy phép số 332/GP – TT ĐT ngày cấp 22/01/2018 SỞ THÔNG TIN VÀ TRUYỀN
               THÔNG HÀ NỘI. Chịu trách nhiệm xuất bản: Phan Minh Tâm. HOTLINE: 0965 08 24 24
          </span>
     </div>
     <div class="box-end">
          <span><a href="#"><img src="img tin/end.png"></a></span>

     </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="search1.js"></script>

</html>