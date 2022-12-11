<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>DUYMINHWATCH.COM</title>
    <?php include('css-libary.php') ?>

</head>
<style>
    .col-sm-4 a img:hover {
        opacity: 0.6;
    }
</style>

<body>
    <?php include 'component/header_2.php' ?>
    <?php include('silder.php') ?>
    <div class="product-area section" style="margin-top: -30px;">
        <div class="container">
            <p style="font-size: 25px;font-weight: bold;font-family: 'Times New Roman', Times, serif;color: #c05353;margin-bottom: 20px;">SẢN PHẨM MỚI</p>
            <div class="row" style="margin-top: -30px;">
                <div class="col-12">
                    <div class="product-info">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <?php include('./component/new_product.php') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <img src="./images/sale.png" alt="" width="200px">
    </div>
    <?php include('carouselsp.php') ?>
    <div class="container">
        <p style="font-size: 25px;font-weight: bold;font-family: 'Times New Roman', Times, serif;color: #c05353;margin-bottom: 20px;">GỢI Ý SẢN PHẨM</p>
    </div>
    <?php include('carouselop.php') ?>
    <!-- <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-sm-4"><a href=""><img style="border-radius: 5px;" src="./images/banner6.webp" alt=""></a></div>
            <div class="col-sm-4"><a href=""><img style="border-radius: 5px;" src="./images/banner7.webp" alt=""></a></div>
            <div class="col-sm-4"><a href=""><img style="border-radius: 5px;" src="./images/banner8.webp" alt=""></a></div>
        </div>
    </div> -->
    <div class="container" style="margin-top: 40px;">
        <p style="font-size: 25px;font-weight: bold;font-family: 'Times New Roman', Times, serif;color: #c05353;margin-bottom: 20px;">DANH MỤC HOT</p>
    </div>
    <div class="container" style="margin-top: 30px;">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href=""><span><img style="border-radius: 5px;" src="https://cdn3.dhht.vn/wp-content/uploads/2018/10/icon-1.jpg" alt=""></span><span style="padding-left: 7px;">Đồng hồ nam</span></a></div>
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href=""><span><img style="border-radius: 5px;" src="https://cdn3.dhht.vn/wp-content/uploads/2018/10/icon-2.jpg" alt=""></span></a><span style="padding-left: 10px;">Đồng hồ nữ</span></div>
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href=""><span><img style="border-radius: 5px;" src="https://cdn3.dhht.vn/wp-content/uploads/2018/10/icon-3.jpg" alt=""></span></a><span style="padding-left: 10px;">Đồng hồ đôi</span></div>
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href=""><span><img style="border-radius: 5px;" src="https://theme.hstatic.net/1000006063/1000748098/14/home_category_3_medium.png?v=10891" alt=""></span></a><span style="padding-left: 20px;">Phụ kiện</span></div>
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href=""><span><img style="border-radius: 5px;" src="https://theme.hstatic.net/1000006063/1000748098/14/home_category_4_medium.png?v=10891" alt=""></span></a><span style="padding-left: 15px;">Thương hiệu</span></div>
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href=""><span><img style="border-radius: 5px;" src="https://theme.hstatic.net/1000006063/1000748098/14/home_category_5_medium.png?v=10891" alt=""></span></a><span style="padding-left: 20x;">Thời thượng </span></div>
        </div>
        <!-- <div class="row">
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href=""><span><img style="border-radius: 5px;" src="https://theme.hstatic.net/1000006063/1000748098/14/home_category_6_medium.png?v=10891" alt=""></span></a><span style="padding-left: 25px;">Mini Size</span></div>
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href=""><span><img style="border-radius: 5px;" src="https://theme.hstatic.net/1000006063/1000748098/14/home_category_7_medium.png?v=10891" alt=""></span></a><span style="padding-left: 18px;">Tẩy Da Chết</span></div>
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href=""><span><img style="border-radius: 5px;" src="https://theme.hstatic.net/1000006063/1000748098/14/home_category_8_medium.png?v=10891" alt=""></span></a><span style="padding-left: 1px;">Kem Chống Nắng</span></div>
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href=""><span><img style="border-radius: 5px;" src="https://theme.hstatic.net/1000006063/1000748098/14/home_category_9_medium.png?v=10891" alt=""></span></a><span style="padding-left: 21px;">Dưỡng Thể</span></div>
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href=""><span><img style="border-radius: 5px;" src="https://theme.hstatic.net/1000006063/1000748098/14/home_category_11_medium.png?v=10891" alt=""></span></a><span style="padding-left: 25px;">Tẩy Trang</span></div>
            <div class="col-sm-2"><a style="display: flex;flex-direction: column;" href=""><span><img style="border-radius: 5px;" src="https://theme.hstatic.net/1000006063/1000748098/14/home_category_12_medium.png?v=10891" alt=""></span></a><span style="padding-left: 37px;">Kẻ Mắt</span></div>
        </div> -->
    </div>
    <!-- Start Shop Services Area -->
    <section class="shop-services section home" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Đơn hàng trên 200k</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Đổi trả miễn phí</h4>
                        <p>Kiểm tra đổi trả</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Thanh toán chắc chắn</h4>
                        <p>An toàn 100%</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Giá cả hợp lý</h4>
                        <p>Giá rẻ</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 offset-lg-3 col-12">
                            <h4 style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;">Eshop Free Lite</h4>
                            <h3 style="font-size:30px;color:#333;">Currently You are using free lite Version of Eshop.<h3>
                                    <p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;">Please, purchase full version of the template to get all pages, features and commercial license</p>
                                    <div class="button" style="margin-top:30px;">
                                        <a href="https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/" target="_blank" class="btn" style="color:#fff;">Buy Now!</a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'component/footer.php'
    ?>
     <?php include('jquery.php') ?>
</body>

</html>