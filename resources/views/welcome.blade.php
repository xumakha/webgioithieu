<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>VITECH +</title>
        <link rel="stylesheet" href="../public/css/style.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <style>

    </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <header>
                    <a href="#home" class="logo">VITECH<span>+</span></a>
                    <div class="menuToggle" onclick="toggleMenu();"></div>
                    <ul class="navigation">
                        <li><a href="#home" onclick="toggleMenu();">Trang Chủ</a></li>
                        <li><a href="#about" onclick="toggleMenu();">Giấy Chứng Nhận</a></li>
                        <li><a href="#menu" onclick="toggleMenu();">Dự Án</a></li>
                        <li><a href="#expert" onclick="toggleMenu();">Mô Hình Phát Triền</a></li>
                        <li><a href="#test" onclick="toggleMenu();">Bài Nhận Xét</a></li>
                        <li><a href="#contact" onclick="toggleMenu();">Bình Luận</a></li>
                    </ul>
                </header>
                <section class="banner" id="home">
                    <div class="content">
                        <h2>Viện Nghiên Cứu Ứng Dụng Khoa Học Công Nghệ VITECH</h2>
                        <p>
                            Chào Mọi Người Đã Đến Với Web Giới Thiệu Về Viện Nghiên Cứu Ứng Dụng
                            Khoa Học Công Nghệ VITECH
                        </p>
                        <a href="#" class="btn">Our Menu</a>
                    </div>
                </section>
                <section class="about" id="about">
                    <div class="row">
                        <div class="col50">
                            <h2 class="tildeText"><span>Giấy Chứng Nhận</span></h2>
                            <br />
                            <p>
                                Đăng Ký Hoạt Động Khoa Học Và Công Nghệ Của Viện Nghiên Cứu Ứng Dụng
                                Khóa Học Công Nghệ VITECH<br />
                                Tên Tổ Chức : Viện Nghiên Cứu Ứng Dụng Khoa Học Công Nghệ VITECH.<br />
                                Tên Tiếng Anh : VITECH SCIENCE AND TECHNOLOGY APPLIATION RESESRCH
                                INSTITUTE.<br />
                                Trụ sở chính : Số 22, Ngõ 147/89 Đường Tân Mai,Phường Tân Mai, Quận
                                Hoàng Mai, TP.Hà Nội<br />
                                Người đứng đầu tổ chức :<br />
                                Họ và Tên :Nguyễn Thanh Hải. <br />
                                CCCD : Số 036082008902 do Cục Cảnh Sát ĐKQL cư trú và DLQG về dân cư
                                cấp ngày 08/06/2018 .
                            </p>
                            <br />
                            <p>Hoạt Động trong lĩnh vực khoa học và công nghệ sau :</p>
                            <p>
                                - Kỹ Thuật Xây Dựng (4.1.2);<br />
                                - Công Nghệ Phần Mềm (4.2.7);<br />
                                - Kỹ thuật thiết kế và công nghệ chế tạo máy (máy công cụ, máy đồng
                                lực, má phục vụ nông lâm, ngư nghiệp và tổ chức chế biến, máy thủy
                                lực, máy xây dựng, oto, giao thông, thiết bị khai khoáng)
                                (4.3.3);<br />
                                - Công nghệ Vật liệu xây dựng (4.5.7);<br />
                                - Dịch vụ tư vấn chuyển giao công nghệ ( hỗ trợ các bên lựa chọn
                                công nghệ, đàm phán, ký kết, thực hiện hợp đồng chuyển giao công
                                nghệ) (7.6.2);
                            </p>
                        </div>
                        <div class="col50">
                            <div class="imgBx">
                                <img src="../public/images/img1.png" alt="Ảnh Bằng Chứng Nhận" />
                            </div>
                        </div>
                    </div>
                </section>
                <section class="menu" id="menu">
                    <div class="title">
                        <h3 class="tildeText"><span>Dự Án</span></h3>
                        <br />
                        <p>Đây là những Dự Án mà bên Viện Nghiên Cứu đã và đang làm được.</p>
                    </div>
                    <div class="content">
                        <div class="box">
                            <div class="imgBx">
                                <img src="../public/images/menu1.jpg" alt="ảnh dự án" />
                            </div>
                            <div class="text">
                                <a href="#">Xem Dự Án</a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="imgBx">
                                <img src="../public/images/menu2.jpg" alt="ảnh dự án" />
                            </div>
                            <div class="text">
                                <a href="#">Xem Dự Án</a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="imgBx">
                                <img src="../public/images/menu3.jpg" alt="ảnh dự án" />
                            </div>
                            <div class="text">
                                <a href="#">Xem Dự Án</a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="imgBx">
                                <img src="../public/images/menu4.jpg" alt="ảnh dự án" />
                            </div>
                            <div class="text">
                                <a href="#">Xem Dự Án</a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="imgBx">
                                <img src="../public/images/menu5.jpg" alt="ảnh dự án" />
                            </div>
                            <div class="text">
                                <a href="#">Xem Dự Án</a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="imgBx">
                                <img src="../public/images/menu6.jpg" alt="ảnh dự án" />
                            </div>
                            <div class="text">
                                <a href="#">Xem Dự Án</a>
                            </div>
                        </div>
                    </div>
                    <div class="title">
                        <a href="#" class="btn">View All</a>
                    </div>
                </section>
                <section class="expert" id="expert">
                    <div class="title">
                        <h3 class="tildeText"><span>Mô Hình Phát Triển</span></h3>
                        <br />
                        <p>Viện Nghiên Cứu Ứng Dụng Khoa Học Công Nghệ VITECH.</p>
                    </div>
                    <div class="content">
                        <div class="box">
                            <div class="imgBx">
                                <img src="../public/images/expert1.jpg" alt="ảnh dự án" />
                            </div>
                            <div class="text">
                                <h3>
                                    Trung Tâm Phát Triển Nguồn Nhân Lực (Đào Tạo).<br />
                                    - Đào tạo nguồn nhân lực đi nước CN phát triển với linh vực :<br />
                                    + Xây Dựng.<br />
                                    + Cơ Khí.<br />
                                    + Điện, Điện Tử.<br />
                                    + CNTT.
                                </h3>
                            </div>
                        </div>
                        <div class="box">
                            <div class="imgBx">
                                <img src="../public/images/expert2.jpg" alt="ảnh dự án" />
                            </div>
                            <div class="text">
                                <h3>
                                    Trung Tâm Nghiên Cứu Khoa Học (Nghiên Cứu).<br />
                                    + Nhóm 1: NCKH trong lĩnh vực Xây Dựng.<br />
                                    + Nhóm 2: NCKH trong lĩnh vực Máy-Thiết Bị.<br />
                                    + Nhóm 3: NCKH trong lĩnh vực CNTT.<br />
                                </h3>
                            </div>
                        </div>
                        <div class="box">
                            <div class="imgBx">
                                <img src="../public/images/expert3.jpg" alt="ảnh dự án" />
                            </div>
                            <div class="text">
                                <h3>
                                    Trung Tâm Tư Vấn Và Chuyển Giao Công Nghệ (Tư Vấn).<br />
                                    - Kết hợp với các đơn vị tư vấn trong các lĩnh vực cuyên môn :<br />
                                    + VNCC.<br />
                                    + CONINCO.<br />
                                    + DOUL.<br />
                                    + TETDI.....
                                </h3>
                            </div>
                        </div>
                        <div class="box">
                            <div class="imgBx">
                                <img src="../public/images/expert4.jpg" alt="ảnh dự án" />
                            </div>
                            <div class="text">
                                <h3>
                                    Trung Tâm Ứng Dụng Phát Triển Khoa Học Công Nghệ (Đầu Tư).<br />
                                    - Kết hợp với các quỹ đầu tư, các đơn vị khác .. để xây dựng các
                                    Chương Trình phát triển KHCN<br />
                                </h3>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="testimonials" id="test">
                    <div class="title white">
                        <h3 class="tildeText"><span>Bài Nhận Xét</span></h3>
                        <p>Đánh Giá Chi Tiết Trải Nhiệm Từ Những Chuyên Gia.</p>
                    </div>
                    <div class="content">
                        <div class="box">
                            <div class="imgBx">
                                <img src="../public/images/testi1.jpg" alt=" " />
                            </div>
                            <div class="text">
                                <p>
                                    Để lấy một ví dụ, các cơ quan quản lý ở Hoa Kỳ đặt ra các tiêu
                                    chuẩn về mức độ an toàn của các chất ô nhiễm trong không khí, với
                                    mục tiêu bảo vệ các cá nhân khỏi tiếp xúc quá nhiều với các hóa
                                    chất độc hại. Các tiêu chuẩn này là một vấn đề đặc biệt quan tâm
                                    đối với cộng đồng fenceline - những người sống gần các cơ sở hóa
                                    dầu. Các cộng đồng này đã lưu ý rằng các tiêu chuẩn quy định chỉ
                                    tính đến một nhóm nhỏ các hóa chất có khả năng gây hại do các cơ
                                    sở này thải ra và một số nỗ lực giám sát dựa vào các trạm quá xa
                                    các cộng đồng này. Điều này có nghĩa là các cơ quan quản lý - ngay
                                    cả khi họ đang nhằm mục đích bảo vệ các cá nhân tốt nhất có thể -
                                    có thể đang làm việc với dữ liệu không phản ánh đầy đủ trải nghiệm
                                    hàng ngày hoặc mối quan tâm về sức khỏe của các cá nhân trong các
                                    cộng đồng này.
                                </p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="imgBx">
                                <img src="../public/images/testi2.jpg" alt=" " />
                            </div>
                            <div class="text">
                                <p>
                                    Để lấy một ví dụ, các cơ quan quản lý ở Hoa Kỳ đặt ra các tiêu
                                    chuẩn về mức độ an toàn của các chất ô nhiễm trong không khí, với
                                    mục tiêu bảo vệ các cá nhân khỏi tiếp xúc quá nhiều với các hóa
                                    chất độc hại. Các tiêu chuẩn này là một vấn đề đặc biệt quan tâm
                                    đối với cộng đồng fenceline - những người sống gần các cơ sở hóa
                                    dầu. Các cộng đồng này đã lưu ý rằng các tiêu chuẩn quy định chỉ
                                    tính đến một nhóm nhỏ các hóa chất có khả năng gây hại do các cơ
                                    sở này thải ra và một số nỗ lực giám sát dựa vào các trạm quá xa
                                    các cộng đồng này. Điều này có nghĩa là các cơ quan quản lý - ngay
                                    cả khi họ đang nhằm mục đích bảo vệ các cá nhân tốt nhất có thể -
                                    có thể đang làm việc với dữ liệu không phản ánh đầy đủ trải nghiệm
                                    hàng ngày hoặc mối quan tâm về sức khỏe của các cá nhân trong các
                                    cộng đồng này.
                                </p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="imgBx">
                                <img src="../public/images/testi3.jpg" alt=" " />
                            </div>
                            <div class="text">
                                <p>
                                    Để lấy một ví dụ, các cơ quan quản lý ở Hoa Kỳ đặt ra các tiêu
                                    chuẩn về mức độ an toàn của các chất ô nhiễm trong không khí, với
                                    mục tiêu bảo vệ các cá nhân khỏi tiếp xúc quá nhiều với các hóa
                                    chất độc hại. Các tiêu chuẩn này là một vấn đề đặc biệt quan tâm
                                    đối với cộng đồng fenceline - những người sống gần các cơ sở hóa
                                    dầu. Các cộng đồng này đã lưu ý rằng các tiêu chuẩn quy định chỉ
                                    tính đến một nhóm nhỏ các hóa chất có khả năng gây hại do các cơ
                                    sở này thải ra và một số nỗ lực giám sát dựa vào các trạm quá xa
                                    các cộng đồng này. Điều này có nghĩa là các cơ quan quản lý - ngay
                                    cả khi họ đang nhằm mục đích bảo vệ các cá nhân tốt nhất có thể -
                                    có thể đang làm việc với dữ liệu không phản ánh đầy đủ trải nghiệm
                                    hàng ngày hoặc mối quan tâm về sức khỏe của các cá nhân trong các
                                    cộng đồng này.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="contact" id="contact">
                    <div class="title white">
                        <h3 class="tildeText"><span>Bình Luận</span></h3>
                        <p>Để Lại Những Câu Hỏi Hay Những Đánh Giá Để Viện Phát Triển Hơn. Cảm ơn các bạn !</p>
                    </div>
                    <div class="contactForm">
                        <h3>Send Message</h3>
                        <div class="inputBox">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="inputBox">
                            <textarea placeholder="Name"></textarea>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </section>
                <!-- <div class="copyrightText">
                  <p>Viện Nghiên Cứu Ứng Dụng Khoa Học Công Nghệ <a href="#">VITECH</a></p>
                </div> -->
                <!-- FT -->
                <div id="footer">
                    <h1> VIỆN NGHIÊN CỨU ỨNG DỤNG KHOA HỌC CÔNG NGHỆ <span>VITECH</span></h1>
                    <p>Tel: 123456789 - Fax: 123456789- Hotline: 12345678 - Email: <a href="#">nghiencuuungdungvitech@gmail.com</a></p>
                    <p>Địa chỉ: Số 22, Ngõ 147/89 đường Tân Mai, Phường Tân Mai, Quận Hoàng Mai, Hà Nội</p>
                    <!--  <h1>&copy; copyright @ 2021 by <span>mr Hoàng Lân</span></h1> -->
                </div>
                <!--EFT  -->
                <script type="text/javascript">
                    window.addEventListener('scroll', function () {
                        const header = document.querySelector('header');
                        header.classList.toggle('sticky', window.scrollY > 0);
                    });


                    function toggleMenu(){
                        const menuToggle = document.querySelector('.menuToggle');
                        const navigation = document.querySelector('.navigation');
                        menuToggle.classList.toggle('active');
                        navigation.classList.toggle('active');
                    }
                </script>
            </div>
        </div>
    </body>
</html>
