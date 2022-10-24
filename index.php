<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    GOFOOD | Thịt bò Mỹ - Thịt bò Nhật - Cá hồi Na Uy - Thịt heo Iberico
  </title>
  <link rel="icon" type="image/x-icon" href="./assets/img/favicon-gofood.jpg" />
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="body">
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="oO6P55Vx"></script>
  <!-- start header -->
  <header id="header">
    <div class="header-top d-lg-block d-sm-none">
      <div class="container-fluid">
        <div class="mx-5 d-flex justify-content-between">
          <nav class="top-nav top-nav-left">
            <ul class="d-flex justify-content-between">
              <li>
                <a class="smooth" href="#">
                  <img src="./assets/img/img-header/icon-store.png" alt="icon-store" />
                  Hệ thống cửa hàng
                </a>
              </li>
              <li>
                <a class="smooth" href="#">
                  <i class="fa-solid fa-location-dot me-2" style="color: #fcbb26"></i>
                  Bạn đang ở: <b>Hà Nội</b>
                  <i class="fa-solid fa-angle-down ms-1"></i>
                </a>
                <div class="sub-nav" style="width: 200px">
                  <ul>
                    <li><a href="#">Chọn khu vực của bạn</a></li>
                    <li><a href="#">Hà Nội</a></li>
                    <li><a href="#">Hồ Chí Minh</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </nav>
          <nav class="top-nav top-nav-right">
            <ul class="d-flex justify-content-between">
              <li>
                <a class="smooth" href="./Pages/introduce.php">Về chúng tôi</a>
                <div class="sub-nav" style="width: 150px">
                  <ul>
                    <li>
                      <a href="./Pages/introduce.php">Giới thiệu</a>
                    </li>
                    <li><a href="#">Tuyển dụng</a></li>
                    <li><a href="./Pages/contact.php">Liên hệ</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <a class="smooth" href="./Pages/payment-method.php">Phương thức thanh toán</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container-fluid">
        <div class="row mx-sm-5 align-items-center">
          <div class="col-lg-2 ps-0 d-lg-block d-sm-none">
            <a href="./index.php">
              <img src="./assets/img/img-header/logo.png" alt="logo" class="w-100 h-auto" />
            </a>
          </div>
          <div class="col-lg-3 d-lg-block d-sm-none">
            <form class="search-fr position-relative">
              <input type="text" name="search" placeholder="Tìm kiếm trên Gofood" autocomplete="off" value="" />
              <button type="submit">Tìm kiếm</button>
              <div class="show-search-box">
                <div class="spinner-border load-search d-none" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <div class="result-search"></div>
              </div>
            </form>
          </div>
          <div class="col-lg-7">
            <div class="row align-items-center">
              <div class="col-lg-6 contact-top">
                <div class="phone d-lg-flex d-sm-none">
                  <a href="tel:1900 3220" class="text-bold" style="color: #e12025">1900 3220</a>
                  <span>(8h30 - 12h15 &amp; 13h30 - 19h15)</span>
                  <a href="tel:0896 420 666" class="icon-phone"><i class="fas fa-phone-alt"></i></a>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="account d-flex justify-content-between align-items-center">
                  <div class="js-icon-menu icon-menu d-sm-block d-lg-none">
                    <i class="fa-solid fa-bars" style="font-size: 24px"></i>
                  </div>
                  <div class="md-logo d-sm-block d-lg-none text-center">
                    <a href="./index.php">
                      <img src="./assets/img/img-header/logo.png" alt="logo" class="w-75" />
                    </a>
                  </div>
                  <div class="user d-user-none d-lg-flex d-sm-none align-items-center position-relative">
                    <svg class="icon-login" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38" height="38" viewBox="0 0 46 46">
                      <image id="Vector_Smart_Object" data-name="Vector Smart Object" width="46" height="46" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAYAAABXuSs3AAAD80lEQVRogeXazWtcZRTH8c9Mg1JNW7GtzSRiXMVWiCvdFKoUiuhO3MS22viyUShSAm7cBEFXQlBpEV82Vhta/wANbirExk19Q9CalbUkFjRS8wIqprp4nmniZebOfe6dIOIXhoS55zznl2fuPc85Z1JbnWqoSB/2Yx92Ywg34cZ4fQVXMIsLmMZZXK4StFZSeC8OYRR7S8aewUmcwnKqc6rwrRjDUWxPDdaGBRzHBBaLOtUTAozgW4zrnmhxrfG49khRpyLCt+A9nEZ/KWnF6I8xJmPMXDoJH8R5HK6uqzAHY8zBPKM84cM4J2SJMvwWX2UYirGH2xm0Ez6IDzGQGPArPIFd2Bxfu/A4vkxcayBqaLnzrbLKFuGjStnpq3gOr8TfW1HHMbwsLSnM4m4sZRfL8rr02+OIkM7aiRavTUTbFIbwRvbNrPAR6Q/i28IhUpRT0SeFgzKpcv2tslXIpSkp70/chh8ThTTwA3oSfOaxRzyk1u/4mPQ8/bF00aLP2USffkEj1oT3Csd4KudL+DT5rITPUUHrNeGHlDvGfy7h0+SnEj7bxWewKXy0ZPCdJf3glpJ+RwjC+5QvTe8p6UfIzWXYi7660ASU5V7pp6voc1+FuPvrQudSlh68VMLvRWmpMMu+utBuVWEUTyXYPynULlXYXVe++lvPm3he/i72RJu3uhBvqLY61Vi21thW5Ru8hilciu/digfxLO7sUpyV2upU468uLZZlNf7ctBGLV3lAOrEhgpvUhbnHf42VHmFYU/Ue/1UonH7vYHe9UBluqxjvSo/QYZQ5RBaFjmcS3yX63iHUR8eEcjqV2bowFktlOgYfly5a9BmPa3xSwv9CPYpI4RwOqDj7i1yOa32a6DddW51q9CneDKwIuzSXGKgTA8Ite0NB+0Zd+KtnCjqc0H3R4ponCtrO4HKzHn+noNPpZEnFeb+g3UnWmuVefC+/C7qK66ydiN2mB3+glmOzgNux3NzxZWHUm8eijRNNmBh0GjMfF2fp67v8CWEE0I5tQsG0UQzKP5jmBY34p/BF69r/FtTwqo2pQTYJh1keY9Z9ItlJ1hn5U6mH8YFqTXKWnUIZ/FCOzaSg7RqtZofPCDm1HfcLdfejbfyLUsdjca0DOXazeLqVc5alKC4vX+/Au/hcaN02FxQr2o7iCyG17cixnYtalrIX8r68GlZ8Rr4SbaeFGfkl/BKv3SzMF+8SpgIPKFaNzgmd09etLnb61m0QH+lOX5rCrLDTF9sZdLpHLwqDm5QxclUmY8y2oin2cC0JD+Ij8vN8VeZjjMNa3NNZUrLCGWE+/YJw9HaLhbjmHpmUl8f/5ivxVvwr/4TwN3TK2QNzxyzNAAAAAElFTkSuQmCC"></image>
                    </svg>
                    <div class="dropdown d-lg-inline-block">
                      <div style="font-size: 17px">Tài khoản</div>
                      <div>
                        <a class="smooth" href="./Pages/login.php"><b>Đăng nhập</b></a>
                        |
                        <a class="smooth" href="./Pages/signup.php"><b>Đăng ký</b></a>
                      </div>
                      <div class="register-login">
                        <a href="./Pages/login.php">Đăng nhập</a>
                        <a href="./Pages/signup.php">Đăng ký</a>
                      </div>
                    </div>
                  </div>
                  <div class="user sm-user d-lg-none d-sm-flex align-items-center position-relative">
                    <svg class="icon-login" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38" height="38" viewBox="0 0 46 46">
                      <image id="Vector_Smart_Object" data-name="Vector Smart Object" width="46" height="46" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAYAAABXuSs3AAAD80lEQVRogeXazWtcZRTH8c9Mg1JNW7GtzSRiXMVWiCvdFKoUiuhO3MS22viyUShSAm7cBEFXQlBpEV82Vhta/wANbirExk19Q9CalbUkFjRS8wIqprp4nmniZebOfe6dIOIXhoS55zznl2fuPc85Z1JbnWqoSB/2Yx92Ywg34cZ4fQVXMIsLmMZZXK4StFZSeC8OYRR7S8aewUmcwnKqc6rwrRjDUWxPDdaGBRzHBBaLOtUTAozgW4zrnmhxrfG49khRpyLCt+A9nEZ/KWnF6I8xJmPMXDoJH8R5HK6uqzAHY8zBPKM84cM4J2SJMvwWX2UYirGH2xm0Ez6IDzGQGPArPIFd2Bxfu/A4vkxcayBqaLnzrbLKFuGjStnpq3gOr8TfW1HHMbwsLSnM4m4sZRfL8rr02+OIkM7aiRavTUTbFIbwRvbNrPAR6Q/i28IhUpRT0SeFgzKpcv2tslXIpSkp70/chh8ThTTwA3oSfOaxRzyk1u/4mPQ8/bF00aLP2USffkEj1oT3Csd4KudL+DT5rITPUUHrNeGHlDvGfy7h0+SnEj7bxWewKXy0ZPCdJf3glpJ+RwjC+5QvTe8p6UfIzWXYi7660ASU5V7pp6voc1+FuPvrQudSlh68VMLvRWmpMMu+utBuVWEUTyXYPynULlXYXVe++lvPm3he/i72RJu3uhBvqLY61Vi21thW5Ru8hilciu/digfxLO7sUpyV2upU468uLZZlNf7ctBGLV3lAOrEhgpvUhbnHf42VHmFYU/Ue/1UonH7vYHe9UBluqxjvSo/QYZQ5RBaFjmcS3yX63iHUR8eEcjqV2bowFktlOgYfly5a9BmPa3xSwv9CPYpI4RwOqDj7i1yOa32a6DddW51q9CneDKwIuzSXGKgTA8Ite0NB+0Zd+KtnCjqc0H3R4ponCtrO4HKzHn+noNPpZEnFeb+g3UnWmuVefC+/C7qK66ydiN2mB3+glmOzgNux3NzxZWHUm8eijRNNmBh0GjMfF2fp67v8CWEE0I5tQsG0UQzKP5jmBY34p/BF69r/FtTwqo2pQTYJh1keY9Z9ItlJ1hn5U6mH8YFqTXKWnUIZ/FCOzaSg7RqtZofPCDm1HfcLdfejbfyLUsdjca0DOXazeLqVc5alKC4vX+/Au/hcaN02FxQr2o7iCyG17cixnYtalrIX8r68GlZ8Rr4SbaeFGfkl/BKv3SzMF+8SpgIPKFaNzgmd09etLnb61m0QH+lOX5rCrLDTF9sZdLpHLwqDm5QxclUmY8y2oin2cC0JD+Ij8vN8VeZjjMNa3NNZUrLCGWE+/YJw9HaLhbjmHpmUl8f/5ivxVvwr/4TwN3TK2QNzxyzNAAAAAElFTkSuQmCC"></image>
                    </svg>
                    <div class="dropdown d-lg-inline-block">
                      <div class="register-login">
                        <a href="./Pages/login.php">Đăng nhập</a>
                        <a href="./Pages/signup.php">Đăng ký</a>
                      </div>
                    </div>
                  </div>
                  <div class="cart position-relative">
                    <a class="d-flex">
                      <img src="./assets/img/img-header/cart.png" alt="cart" />
                      <span class="d-lg-block d-sm-none">Giỏ hàng</span>
                      <strong>0</strong>
                    </a>
                    <div class="js-cart-order cart-order">
                      <div>
                        <strong>Tổng: <span class="float-end">0đ</span></strong>
                      </div>
                      <div class="d-flex justify-content-between">
                        <a href="./Pages/cart.php" class="btn btn-success">Giỏ hàng</a>
                        <a href="./Pages/cart.php" class="btn btn-warning text-white">Đặt hàng</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="menu-nav d-lg-block">
    <div class="container-fluid">
      <nav class="main-nav mx-5">
        <ul class="js-md-menu md-menu d-flex">
          <li class="i-home d-sm-none d-lg-block">
            <a href="#"><img src="./assets/img/img-header/icon-home2.png" alt="icon-home2" /></a>
          </li>
          <li class="d-sm-block d-lg-none">
            <div class="js-icon-close icon-close">
              <i class="fa-solid fa-xmark"></i>
            </div>
          </li>
          <li class="d-sm-block d-lg-none">
            <form>
              <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm" class="w-100 h-100" />
              <button type="button">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
          </li>
          <li></li>
          <li>
            <a href="./Pages/proList.php">Thịt nhập khẩu</a>
            <div class="sub-nav" style="width: 225px">
              <ul>
                <li>
                  <a href="./Pages/proDetail.php">Thịt bò Mỹ</a>
                </li>
                <li>
                  <a href="#">Thịt bò Úc</a>
                  <ul class="hidden" style="list-style: square">
                    <li><a href="#">Thịt bò Úc Homestead</a></li>
                    <li><a href="#">Thịt bò hữu cơ Obe</a></li>
                  </ul>
                </li>
                <li><a href="#">Thịt bò Nhật Bản</a></li>
                <li><a href="#">Thịt cừu Úc</a></li>
                <li><a href="#">Thịt heo Iberico</a></li>
                <li><a href="#">Bò Greater Omaha</a></li>
                <li><a href="#">Bò Wagyu Mỹ</a></li>
                <li><a href="#">Bò ủ khô Dry-Aged</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">Hải sản nhập khẩu</a>
            <div class="sub-nav" style="width: 188px">
              <ul>
                <li><a href="#">Cá hồi NaUy</a></li>
                <li><a href="#">Cá hồi hữu cơ NaUy</a></li>
                <li><a href="#">Hải sản Nhật Bản</a></li>
                <li><a href="#">Hải sản châu Âu</a></li>
                <li><a href="#">Hải sản Việt Nam</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">Set box tiện lợi</a>
            <div class="sub-nav" style="width: 172px">
              <ul>
                <li><a href="#">Sashimi Box</a></li>
                <li><a href="#">Set Box Lẩu</a></li>
                <li><a href="#">Set Box Nướng</a></li>
                <li><a href="#">Set Steak</a></li>
                <li><a href="#">Set BBQ Camping</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">Nước sốt và gia vị</a>
            <div class="sub-nav" style="width: 256px">
              <ul>
                <li><a href="#">Made by GOFOOD</a></li>
                <li><a href="#">Gia vị Hàn Quốc</a></li>
                <li><a href="#">Gia vị Nhật Bản</a></li>
                <li><a href="#">Gia vị Thái</a></li>
                <li><a href="#">Gia vị Mỹ</a></li>
                <li><a href="#">Gia vị Pháp - Ý - Tây Ban Nha</a></li>
                <li><a href="#">Gia vị Châu Âu</a></li>
                <li><a href="#">Gia vị Việt</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">Đồ uống</a>
            <div class="sub-nav" style="width: 143px">
              <ul>
                <li>
                  <a href="#">Rượu vang</a>
                  <ul class="hidden" style="list-style: square">
                    <li><a href="#">Vang đỏ</a></li>
                    <li><a href="#">Vang trắng</a></li>
                  </ul>
                </li>
                <li><a href="#">Rượu Sake</a></li>
                <li><a href="#">Rượu Soju</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">Đồ bếp chuyên dụng</a>
            <div class="sub-nav" style="width: 196px">
              <ul>
                <li><a href="#">Chảo gang Lodge</a></li>
                <li><a href="#">Nồi gang Lodge</a></li>
                <li><a href="#">Khay nướng Lodge</a></li>
                <li><a href="#">Phụ kiện Lodge</a></li>
                <li><a href="#">Chảo thép Carbon</a></li>
                <li><a href="#">Thớt gỗ Teak</a></li>
                <li><a href="#">Thớt tre kháng khuẩn</a></li>
                <li><a href="#">Đồ bếp ngoài trời</a></li>
                <li><a href="#">Dao thái chuyên dụng</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">Sản phẩm khác</a>
            <div class="sub-nav" style="width: 274px; height: 450px; overflow-y: scroll">
              <ul>
                <li><a href="#">Đồ viên</a></li>
                <li><a href="#">Mỳ, ngũ cốc &amp; khoai</a></li>
                <li><a href="#">Bơ &amp; phô mai</a></li>
                <li>
                  <a href="#">Rau củ &amp; trái cây</a>
                  <ul class="hidden" style="list-style: square">
                    <li><a href="#">Rau tươi</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Xúc xịch, Pate &amp; Thịt nguội</a>
                  <ul class="hidden" style="list-style: square">
                    <li><a href="#">Xúc xích Đức</a></li>
                    <li><a href="#">Pate</a></li>
                    <li><a href="#">Thịt nguội</a></li>
                    <li><a href="#">Gan ngỗng Pháp</a></li>
                    <li><a href="#"> Đùi heo muối Tây Ban Nha</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Quà tặng và Voucher</a>
                  <ul class="hidden" style="list-style: square">
                    <li><a href="#">Bao bì hộp quà</a></li>
                    <li><a href="#">Hộp quà Tết 2022</a></li>
                    <li><a href="#">Voucher phiếu mua hàng</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="./Pages/news.php">Tin tức</a>
            <div class="sub-nav" style="width: 220px">
              <ul>
                <li><a href="#">Khuyến mãi</a></li>
                <li><a href="#">Kinh nghiệm và mẹo hay</a></li>
                <li><a href="#">Hướng dẫn món ngon</a></li>
                <li><a href="#">Thông tin sản phẩm</a></li>
                <li><a href="#">Phản hồi của khách hàng</a></li>
                <li><a href="#">Thông báo</a></li>
                <li><a href="#">Góc báo chí</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- end header -->
  <!-- start content -->
  <main class="content">
    <section class="sec1">
      <div class="container-fluid">
        <div class="row mx-sm-5 mt-4 justify-content-between">
          <div class="slider">
            <div>
              <a href="#"><img src="./assets/img/slider/banner-bo-cuon-la-cai.jpg" alt="banner-bo-cuon-la-cai" /></a>
            </div>
            <div>
              <a href="#"><img src="./assets/img/slider/uu-dai-bap-bo.jpg" alt="uu-dai-bap-bo" /></a>
            </div>
            <div>
              <a href="#"><img src="./assets/img/slider/lam-bap-bo-ngam-mam.jpg" alt="lam-bap-bo-ngam-mam" /></a>
            </div>
            <div>
              <a href="#"><img src="./assets/img/slider/banner-ca-hoi.jpg" alt="banner-ca-hoi" /></a>
            </div>
          </div>
          <div class="video d-lg-flex d-sm-none">
            <div class="js-btn-video position-relative">
              <a href="#">
                <img src="./assets/img/video/lam-pho-cuon-bo.jpg" alt="lam-pho-cuon-bo" />
                <div class="icon-video">
                  <i class="fa-solid fa-circle-play"></i>
                </div>
              </a>
            </div>
            <div class="js-btn-video position-relative">
              <a href="#">
                <img src="./assets/img/slider/banner-phi-le-ca-hoi-nauy.jpg" alt="banner-phi-le-ca-hoi-nauy" />
                <div class="icon-video">
                  <i class="fa-solid fa-circle-play"></i>
                </div>
              </a>
            </div>
            <div class="js-btn-video position-relative">
              <a href="#">
                <img src="./assets/img/slider/banner-bo-xao-dua-chua-gofood.jpg" alt="banner-bo-xao-dua-chua-gofood" />
                <div class="icon-video">
                  <i class="fa-solid fa-circle-play"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="serviceList row mx-sm-5">
          <div class="ser-item col-md-6 col-lg-3 mb-sm-4 mb-lg-0">
            <a href="#" class="d-flex justify-content-center">
              <img src="./assets/img/service-brand/giao_hang_nhanh.png" alt="giao_hang_nhanh" />
              <div class="ser-name ms-4">
                <p class="text-uppercase">Giao hàng nhanh</p>
                <p class="font-desc">Giao hàng ngay sau 30 phút</p>
              </div>
            </a>
          </div>
          <div class="ser-item col-md-6 col-lg-3 mb-sm-4 mb-lg-0">
            <a href="#" class="d-flex justify-content-center">
              <img src="./assets/img/service-brand/icon_conca_web.png" alt="icon_conca_web" />
              <div class="ser-name ms-4">
                <p class="text-uppercase">Sản phẩm an toàn</p>
                <p class="font-desc">Tiêu chuẩn GlobalGap, Organic</p>
              </div>
            </a>
          </div>
          <div class="ser-item col-md-6 col-lg-3 mb-sm-4 mb-lg-0">
            <a href="#" class="d-flex justify-content-center">
              <img src="./assets/img/service-brand/service_3.png" alt="service_3" />
              <div class="ser-name ms-4">
                <p class="text-uppercase">Mở ra là nấu</p>
                <p class="font-desc">Thực phẩm được sơ chế sẵn</p>
              </div>
            </a>
          </div>
          <div class="ser-item col-md-6 col-lg-3 mb-sm-4 mb-lg-0">
            <a href="#" class="d-flex justify-content-center">
              <img src="./assets/img/service-brand/service_4.png" alt="service_4" />
              <div class="ser-name ms-4">
                <p class="text-uppercase">Tích điểm khách hàng</p>
                <p class="font-desc">Tích điểm 1,5% giá trị đơn hàng</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="secBx secBx1">
      <div class="container-fluid">
        <h2 class="title">giá tốt mỗi ngày</h2>
        <div class="product-slider row mx-sm-4 position-relative">
          <figure class="pro-item">
            <div class="pro-img">
              <a href="#">
                <img src="./assets/img/secBx1/be-vai-greater-omaha-0b.jpg" alt="be-vai-greater-omaha-0b" />
                <div class="pro-cart">
                  <span>
                    <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                  </span>
                </div>
              </a>
            </div>
            <figcaption class="pro-desc">
              <h4 class="pro-title">
                <a href="#">Thịt bẹ vai bò Mỹ Greater Omaha (loại cao cấp) - Chuck Flap
                  USDA</a>
              </h4>
              <div class="pro-date-time mb-3">
                <ul class="promotion-countdown d-flex justify-content-between">
                  <li>
                    <p><span>01</span></p>
                    <p>Ngày</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giờ</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Phút</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giây</p>
                  </li>
                </ul>
              </div>
              <div class="pro-price d-flex justify-content-between">
                <div><del>1.595.000đ/kg</del></div>
                <div>1.116.500đ/kg</div>
              </div>
            </figcaption>
          </figure>
          <figure class="pro-item">
            <div class="pro-img">
              <a href="#">
                <img src="./assets/img/secBx1/bo-xay-burger-0.jpg" alt="bo-xay-burger-0" />
                <div class="pro-cart">
                  <span>
                    <img class="me-1" src="./assets/img/icon_add_cart.png" alt="" />Thêm vào giỏ hàng
                  </span>
                </div>
              </a>
            </div>
            <figcaption class="pro-desc">
              <h4 class="pro-title">
                <a href="#">Thịt bò xay Omaha Burger</a>
              </h4>
              <div class="pro-date-time mb-3">
                <ul class="promotion-countdown d-flex justify-content-between">
                  <li>
                    <p><span>01</span></p>
                    <p>Ngày</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giờ</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Phút</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giây</p>
                  </li>
                </ul>
              </div>
              <div class="pro-price d-flex justify-content-between">
                <div><del>1.595.000đ/kg</del></div>
                <div>1.116.500đ/kg</div>
              </div>
            </figcaption>
          </figure>
          <figure class="pro-item">
            <div class="pro-img">
              <a href="#">
                <img src="./assets/img/secBx1/ca-hoi-xong-khoi-fossen-200gr-0a.jpg" alt="ca-hoi-xong-khoi-fossen-200gr-0a" />
                <div class="pro-cart">
                  <span>
                    <img class="me-1" src="./assets/img/icon_add_cart.png" alt="" />Thêm vào giỏ hàng
                  </span>
                </div>
              </a>
            </div>
            <figcaption class="pro-desc">
              <h4 class="pro-title">
                <a href="#">Cá hồi xông khói Leroy Fossen Nauy 200 gram - Smoked
                  Salmon</a>
              </h4>
              <div class="pro-date-time mb-3">
                <ul class="promotion-countdown d-flex justify-content-between">
                  <li>
                    <p><span>01</span></p>
                    <p>Ngày</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giờ</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Phút</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giây</p>
                  </li>
                </ul>
              </div>
              <div class="pro-price d-flex justify-content-between">
                <div><del>1.595.000đ/kg</del></div>
                <div>1.116.500đ/kg</div>
              </div>
            </figcaption>
          </figure>
          <figure class="pro-item">
            <div class="pro-img">
              <a href="#">
                <img src="./assets/img/secBx1/suon-hoang-de-0.jpg" alt="suon-hoang-de-0" />
                <div class="pro-cart">
                  <span>
                    <img class="me-1" src="./assets/img/icon_add_cart.png" alt="" />Thêm vào giỏ hàng
                  </span>
                </div>
              </a>
            </div>
            <figcaption class="pro-desc">
              <h4 class="pro-title">
                <a href="#">Sườn hoàng đế bò Mỹ</a>
              </h4>
              <div class="pro-date-time mb-3">
                <ul class="promotion-countdown d-flex justify-content-between">
                  <li>
                    <p><span>01</span></p>
                    <p>Ngày</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giờ</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Phút</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giây</p>
                  </li>
                </ul>
              </div>
              <div class="pro-price d-flex justify-content-between">
                <div><del>1.595.000đ/kg</del></div>
                <div>1.116.500đ/kg</div>
              </div>
            </figcaption>
          </figure>
          <figure class="pro-item">
            <div class="pro-img">
              <a href="#">
                <img src="./assets/img/secBx1/than-lung-obe-0.jpg" alt="than-lung-obe-0" />
                <div class="pro-cart">
                  <span>
                    <img class="me-1" src="./assets/img/icon_add_cart.png" alt="" />Thêm vào giỏ hàng
                  </span>
                </div>
              </a>
            </div>
            <figcaption class="pro-desc">
              <h4 class="pro-title">
                <a href="#">Thăn lưng bò Úc tươi hữu cơ Obe - Cube Roll</a>
              </h4>
              <div class="pro-date-time mb-3">
                <ul class="promotion-countdown d-flex justify-content-between">
                  <li>
                    <p><span>01</span></p>
                    <p>Ngày</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giờ</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Phút</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giây</p>
                  </li>
                </ul>
              </div>
              <div class="pro-price d-flex justify-content-between">
                <div><del>1.595.000đ/kg</del></div>
                <div>1.116.500đ/kg</div>
              </div>
            </figcaption>
          </figure>
          <figure class="pro-item">
            <div class="pro-img">
              <a href="#">
                <img src="./assets/img/secBx1/than-lung-u-bo-0.jpg" alt="than-lung-u-bo-0" />
                <div class="pro-cart">
                  <span>
                    <img class="me-1" src="./assets/img/icon_add_cart.png" alt="" />Thêm vào giỏ hàng
                  </span>
                </div>
              </a>
            </div>
            <figcaption class="pro-desc">
              <h4 class="pro-title">
                <a href="#">Thăn lưng bò Úc ủ khô cuộn bơ – Butter Aged Cube Roll
                  Steak</a>
              </h4>
              <div class="pro-date-time mb-3">
                <ul class="promotion-countdown d-flex justify-content-between">
                  <li>
                    <p><span>01</span></p>
                    <p>Ngày</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giờ</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Phút</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giây</p>
                  </li>
                </ul>
              </div>
              <div class="pro-price d-flex justify-content-between">
                <div><del>1.595.000đ/kg</del></div>
                <div>1.116.500đ/kg</div>
              </div>
            </figcaption>
          </figure>
          <figure class="pro-item">
            <div class="pro-img">
              <a href="#">
                <img src="./assets/img/secBx1/than-ngoai-greater-omaha-0b.jpg" alt="than-ngoai-greater-omaha-0b" />
                <div class="pro-cart">
                  <span>
                    <img class="me-1" src="./assets/img/icon_add_cart.png" alt="" />Thêm vào giỏ hàng
                  </span>
                </div>
              </a>
            </div>
            <figcaption class="pro-desc">
              <h4 class="pro-title">
                <a href="#">Thăn ngoại bò Mỹ Greater Omaha (loại cao cấp) - Striploin
                  USDA</a>
              </h4>
              <div class="pro-date-time mb-3">
                <ul class="promotion-countdown d-flex justify-content-between">
                  <li>
                    <p><span>01</span></p>
                    <p>Ngày</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giờ</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Phút</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giây</p>
                  </li>
                </ul>
              </div>
              <div class="pro-price d-flex justify-content-between">
                <div><del>1.595.000đ/kg</del></div>
                <div>1.116.500đ/kg</div>
              </div>
            </figcaption>
          </figure>
          <figure class="pro-item">
            <div class="pro-img">
              <a href="#">
                <img src="./assets/img/secBx1/than-ngoai-u-bo-0.jpg" alt="than-lung-u-bo-0" />
                <div class="pro-cart">
                  <span>
                    <img class="me-1" src="./assets/img/icon_add_cart.png" alt="" />Thêm vào giỏ hàng
                  </span>
                </div>
              </a>
            </div>
            <figcaption class="pro-desc">
              <h4 class="pro-title">
                <a href="#">Thăn ngoại bò Úc ủ khô cuộn bơ – Butter Aged Striploin
                  Steak</a>
              </h4>
              <div class="pro-date-time mb-3">
                <ul class="promotion-countdown d-flex justify-content-between">
                  <li>
                    <p><span>01</span></p>
                    <p>Ngày</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giờ</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Phút</p>
                  </li>
                  <li>
                    <p><span>03</span></p>
                    <p>Giây</p>
                  </li>
                </ul>
              </div>
              <div class="pro-price d-flex justify-content-between">
                <div><del>1.595.000đ/kg</del></div>
                <div>1.116.500đ/kg</div>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </section>
    <section class="secBx">
      <div class="container-fluid">
        <div class="banner pt-4">
          <a href="#">
            <img class="w-100" src="./assets/img/banner/banner-ca-hoi-nauy.jpg" alt="banner-ca-hoi-nauy" />
          </a>
        </div>
        <div class="titleBx justify-content-between align-items-center d-flex">
          <h2 class="title-sm"><a href="#">cá hồi na uy</a></h2>
          <div class="border-title col"></div>
          <a href="#" class="show-more-pro">Xem thêm <i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="productList mx-md-4">
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx2/ca-hoi-nauy-fillet-0.jpg" alt="ca-hoi-nauy-fillet-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Cá hồi Na Uy Fillet tươi- Fresh Salmon Fillet</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>719.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx2/ca-hoi-global-gap-nguyen-con-0.jpg" alt="ca-hoi-global-gap-nguyen-con-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Cá hồi tươi Na Uy nguyên con- Salmon Fresh</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>499.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx2/ruoc-ca-hoi-70g-0.jpg" alt="ruoc-ca-hoi-70g-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Ruốc cá hồi Nauy 70g GOFOOD</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>95.000đ/lọ</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="./đồ án thực tập/doan-thuctap2.php">
                  <img src="./assets/img/secBx2/ca-hoi-xong-khoi-fossen-200gr-0a.jpg" alt="ca-hoi-xong-khoi-fossen-200gr-0a" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Cá hồi xông khói Leroy Fossen Nauy 200 gram - Smoked
                    Salm</a>
                </h4>
                <div class="pro-price d-flex justify-content-between">
                  <div><del>365.000đ/vỉ</del></div>
                  <div>292.000đ/vỉ</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx2/ca-hoi-xong-khoi-fossen-1kg-0.jpg" alt="ca-hoi-xong-khoi-fossen-1kg-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Cá hồi xông khói Leroy Fossen Nauy 1 kg - Smoked
                    Salmon</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>1.450.000đ/vỉ</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx2/ca-hoi-xong-khoi-amigo-0.jpg" alt="ca-hoi-xong-khoi-amigo-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Cá hồi Na Uy xông khói Amigo gói 100 gram - Smoked
                    Salmon</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>119.000đ/vỉ</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx2/xuong-ca-hoi-nauy-gofood-0.jpg" alt="xuong-ca-hoi-nauy-gofood-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Xương cá hồi tươi Na Uy- Fresh Salmon's Bones</a>
                </h4>
                <div class="pro-price d-flex justify-content-between">
                  <div><del>49.000đ/kg</del></div>
                  <div>34.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx2/dau-ca-hoi-nauy-0.jpg" alt="dau-ca-hoi-nauy-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Đầu cá hồi tươi Na Uy- Fresh Salmon's Head</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>54.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section class="secBx">
      <div class="container-fluid">
        <div class="titleBx justify-content-between align-items-center d-flex">
          <h2 class="title-sm"><a href="#">cá hồi hữu cơ nauy</a></h2>
          <div class="border-title col"></div>
          <a href="#" class="show-more-pro">Xem thêm <i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="productList mx-md-4">
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx3/ca-hoi-organic-fillet-0.jpg" alt="ca-hoi-organic-fillet-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Cá hồi hữu cơ Nauy fillet tươi - Organic Salmon Fillet</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>775.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx3/ca-hoi-organic-nguyen-con-0.jpg" alt="ca-hoi-organic-nguyen-con-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Cá hồi hữu cơ Nauy nguyên con tươi - Organic Salmon
                    Fresh</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>565.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx3/dau-ca-organic-0.jpg" alt="dau-ca-organic-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Đầu cá hồi hữu cơ Nauy tươi - Fresh Organic Salmon's
                    Head</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>69.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx3/xuong-ca-organic-0.jpg" alt="xuong-ca-organic-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Xương cá hồi hữu cơ Nauy - Fresh Organic Salmon backb</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>49.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section class="secBx">
      <div class="container-fluid">
        <div class="banner pt-4">
          <a href="#">
            <img class="w-100" src="./assets/img/banner/banner-hai-san.jpg" alt="banner-hai-san" />
          </a>
        </div>
        <div class="titleBx justify-content-between align-items-center d-flex">
          <h2 class="title-sm"><a href="#">hải sản nhật bản</a></h2>
          <div class="border-title col"></div>
          <a href="#" class="show-more-pro">Xem thêm <i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="productList mx-md-4">
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx4/ca-trich-ep-trung-nhat-0.jpg" alt="ca-trich-ep-trung-nhat-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Cá trích ép trứng Nhật Bản- Komochi Nishin</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>209.000đ/thanh</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx4/shime-saba-0.jpg" alt="shime-saba-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Cá Saba ngâm giấm Nhật Bản - Shime Saba</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>149.000đ/100 gr</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx4/bach-tuoc-0.jpg" alt="bach-tuoc-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Bạch tuộc Mizudako Nhật Bản</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>145.000đ/100 gr</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx4/ca-cam-0.jpg" alt="ca-cam-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Cá cam Nhật Bản - Yellowtail Fillet</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>169.000đ/100 gr</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx4/so-do-0.jpg" alt="so-do-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sò đỏ Hokkigai Nhật Bản</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>145.000đ/100 gr</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx4/coi-diep-0.jpg" alt="coi-diep-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Cồi điệp Nhật Bản Hotate - Japanese Scallop</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>145.000đ/100 gr</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx4/hau-sua-nhat-0.jpg" alt="hau-sua-nhat-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Hàu sữa Nhật Bản - Japan Oyster</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>84.000đ/con to</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx4/thanh-cua-0a.jpg" alt="thanh-cua-0a" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thanh cua surimi Nhật Bản - Kani Kamaboko CN</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>179.000đ/vỉ</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx4/trung-ca-hoi-nhat-20g-0.jpg" alt="trung-ca-hoi-nhat-20g-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Trứng cá hồi Nhật Bản lọ 20 gram - Ikura Japan</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>89.000đ/lọ</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx4/trung-ca-hoi-nhat-50g-0.jpg" alt="trung-ca-hoi-nhat-50g-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Trứng cá hồi Nhật Bản lọ 50 gram - Ikura Japan</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>189.000đ/lọ</div>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section class="secBx">
      <div class="container-fluid">
        <div class="banner pt-4">
          <a href="#">
            <img class="w-100" src="./assets/img/banner/banner-sashimi.jpg" alt="banner-sashimi" />
          </a>
        </div>
        <div class="titleBx justify-content-between align-items-center d-flex">
          <h2 class="title-sm"><a href="#">shashimi box</a></h2>
          <div class="border-title col"></div>
          <a href="#" class="show-more-pro">Xem thêm <i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="productList row mx-md-4">
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx5/set-sashimi-1-a1.jpg" alt="set-sashimi-1-a1" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sashimi Box 1 - Sashimi cá hồi</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>295.000đ/Set</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx5/set-sashimi-2-a2.jpg" alt="set-sashimi-2-a2" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sashimi Box 2 - Sashimi cá trích ép trứng</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>239.000đ/Set</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx5/set-sashimi-3-a1.jpg" alt="set-sashimi-3-a1" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sashimi Box 3 - Sashimi Mix Box</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>415.000đ/Set</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx5/set-sashimi-4-a1.jpg" alt="set-sashimi-4-a1" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sashimi Box 4 - Sashimi cá hồi</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>449.000đ/Set</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx5/set-sashimi-5-a1.jpg" alt="set-sashimi-5-a1" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sashimi Box 5 - Sashimi cá trích ép trứng</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>479.000đ/Set</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx5/set-sashimi-6-a1.jpg" alt="set-sashimi-6-a1" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sashimi Box 6 - Sashimi Mix Box</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>925.000đ/Set</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx5/set-sashimi-7-a1.jpg" alt="set-sashimi-7-a1" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sashimi Box 7 - Sashimi cá hồi</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>745.000đ/Set</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx5/set-sashimi-8-a1.jpg" alt="set-sashimi-8-a1" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sashimi Box 8 - Sashimi Mix Box</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>1.085.000đ/Set</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx5/set-sashimi-9-a1.jpg" alt="set-sashimi-9-a1" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sashimi Box 9 - Sashimi Mix Box</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>354.000đ/Set</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx5/set-sashimi-10-a1.jpg" alt="set-sashimi-10-a1" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sashimi Box 10 - Sashimi Mix Box</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>645.000đ/Set</div>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section class="secBx">
      <div class="container-fluid">
        <div class="titleBx justify-content-between align-items-center d-flex">
          <h2 class="title-sm"><a href="#">thịt bò hữu cơ obe</a></h2>
          <div class="border-title col"></div>
          <a href="#" class="show-more-pro">Xem thêm <i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="productList row mx-md-4">
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx6/bap-bo-obe-0.jpg" alt="bap-bo-obe-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Bắp bò Úc tươi hữu cơ Obe - Shank Boneless</a>
                </h4>
                <div class="pro-price d-flex justify-content-between">
                  <div><del>535.000đ/kg</del></div>
                  <div>454.750đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx6/diem-bung-obe-0.jpg" alt="diem-bung-obe-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Diềm bụng bò Úc tươi hữu cơ Obe - Flap Meat</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>535.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx6/de-suon-obe-0.jpg" alt="de-suon-obe-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Dẻ sườn bò Úc tươi hữu cơ Obe - Rib Finger</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>545.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx6/loi-vai-obe-0.jpg" alt="loi-vai-obe-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Lõi nạc vai bò Úc tươi hữu cơ Obe - Oyster Blade</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>545.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx6/than-ngoai-obe-0.jpg" alt="than-ngoai-obe-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thăn ngoại bò Úc tươi hữu cơ Obe - Striploin</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>685.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx6/suon-rut-xuong-obe-0b.jpg" alt="suon-rut-xuong-obe-0b" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sườn rút xương bò Úc tươi hữu cơ Obe - Boneless Ribs</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>895.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx6/than-lung-obe-0.jpg" alt="than-lung-obe-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thăn lưng bò Úc tươi hữu cơ Obe - Cube Roll</a>
                </h4>
                <div class="pro-price d-flex justify-content-between">
                  <div><del>935.000đ/kg</del></div>
                  <div>841.500đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section class="secBx">
      <div class="container-fluid">
        <div class="banner pt-4">
          <a href="#">
            <img class="w-100" src="./assets/img/banner/banner-bo-my-black-angus.jpg" alt="banner-bo-my-black-angus" />
          </a>
        </div>
        <div class="titleBx justify-content-between align-items-center d-flex">
          <h2 class="title-sm"><a href="#">thịt bò mỹ</a></h2>
          <div class="border-title col"></div>
          <a href="#" class="show-more-pro">Xem thêm <i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="productList row mx-md-4">
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx7/ba-chi-0.jpg" alt="ba-chi-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thịt ba chỉ bò Mỹ (loại cao cấp) - Short Plate Beef
                    Choice USDA</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>279.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx7/bap-bo-0.jpg" alt="bap-bo-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thịt bắp hoa bò Mỹ (loại cao cấp)- Heel Muscle USDA
                    Choice</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>435.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx7/gau-bo-0.jpg" alt="gau-bo-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thịt gầu bò Mỹ (loại cao cấp) - Brisket Beef Choice
                    USDA</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>399.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx7/loi-vai-0.jpg" alt="loi-vai-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thịt lõi nạc vai bò Mỹ (loại cao cấp) - Top blade beef
                    Choice US</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>475.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx7/de-suon-black-angus-0.jpg" alt="de-suon-black-angus-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thịt dẻ sườn bò Mỹ (loại cao cấp) - Rib Finger Beef
                    Choice US</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>495.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx7/suon-non-rut-xuong-choice-0a.jpg" alt="suon-non-rut-xuong-choice-0a" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sườn non bò Mỹ rút xương (loại cao cấp) - Short Rib
                    Boneless</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>1.125.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx7/suon-hoang-de-0.jpg" alt="suon-hoang-de-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Sườn hoàng đế bò Mỹ</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>571.500đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx7/than-lung-choice-0.jpg" alt="than-lung-choice-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thịt thăn lưng bò Mỹ (loại cao cấp) - Rib Eye Beef Choice
                    US</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>875.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx7/than-lung-prime-0.jpg" alt="than-lung-prime-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thăn lưng bò Mỹ (loại thượng hạng) - Rib Eye Beef USDA</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>1.450.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx7/than-ngoai-prime-0.jpg" alt="than-ngoai-prime-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thịt thăn ngoại bò Mỹ (loại thượng hạng) - Striploin Beef
                    US</a>
                </h4>
                <div class="pro-price pr-empty d-flex justify-content-between">
                  <div>1.340.000đ/kg</div>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section class="secBx">
      <div class="container-fluid">
        <div class="banner pt-4">
          <a href="#">
            <img class="w-100" src="./assets/img/banner/banner-chao-gang-1.jpg" alt="banner-chao-gang-1" />
          </a>
        </div>
        <div class="titleBx justify-content-between align-items-center d-flex">
          <h2 class="title-sm"><a href="#">chảo gang lodge</a></h2>
          <div class="border-title col"></div>
          <a href="#" class="show-more-pro">Xem thêm <i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="productList row mx-md-4">
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx8/chao-gang-lodge-16-5-cm-day-hinh-soi-0.jpg" alt="chao-gang-lodge-16-5-cm-day-hinh-soi-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Chảo gang Lodge 16.5 cm đáy hình sói</a>
                </h4>
                <div class="pro-price">
                  <div><del>890.000đ/chiếc</del></div>
                  <div>845.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx8/chao-gang-lodge-26-cm-day-hinh-nai-0.jpg" alt="chao-gang-lodge-26-cm-day-hinh-nai-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Chảo gang Lodge 26 cm đáy hình nai</a>
                </h4>
                <div class="pro-price">
                  <div><del>1.590.000đ/chiếc</del></div>
                  <div>1.450.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx8/chao-gang-lodge-26-cm-day-hinh-nai-sung-tam-0.jpg" alt="chao-gang-lodge-26-cm-day-hinh-nai-sung-tam-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Chảo gang Lodge 26.67 cm đáy hình nai sừng tấm</a>
                </h4>
                <div class="pro-price">
                  <div><del>1.590.000đ/chiếc</del></div>
                  <div>1.425.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx8/chao-gang-lodge-33.5-cm-0.jpg" alt="chao-gang-lodge-33" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Chảo gang Lodge 33.5 CM</a>
                </h4>
                <div class="pro-price">
                  <div><del>3.069.000đ/chiếc</del></div>
                  <div>2.765.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx8/chao-gang-lodge-26-cm-0.jpg" alt="chao-gang-lodge-26-cm-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Chảo gang Lodge 26 CM</a>
                </h4>
                <div class="pro-price">
                  <div><del>1.490.000đ/chiếc</del></div>
                  <div>1.350.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx8/chao-gang-lodge-23-cm-0.jpg" alt="chao-gang-lodge-23-cm-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Chảo gang Lodge 23 CM</a>
                </h4>
                <div class="pro-price">
                  <div><del>1.290.000đ/chiếc</del></div>
                  <div>1.165.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx8/chao-gang-lodge-20.3-0_1.jpg" alt="chao-gang-lodge-20.3-0_1" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Chảo gang Lodge 20.3 CM</a>
                </h4>
                <div class="pro-price">
                  <div><del>1.090.000đ/chiếc</del></div>
                  <div>985.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx8/chao-gang-lodge-16.5-cm-0_2.jpg" alt="chao-gang-lodge-16" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Chảo gang Lodge 16.5 CM</a>
                </h4>
                <div class="pro-price">
                  <div><del>900.000đ/chiếc</del></div>
                  <div>815.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx8/chao-gang-lodge-13-cm-0.jpg" alt="chao-gang-lodge-13-cm-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Chảo gang Lodge 13 CM</a>
                </h4>
                <div class="pro-price">
                  <div><del>690.000đ/chiếc</del></div>
                  <div>659.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx8/chao-gang-lodge-9-cm-0.jpg" alt="chao-gang-lodge-33" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Chảo gang Lodge 9 CM</a>
                </h4>
                <div class="pro-price">
                  <div><del>450.000đ/chiếc</del></div>
                  <div>399.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section class="secBx">
      <div class="container-fluid">
        <div class="titleBx justify-content-between align-items-center d-flex">
          <h2 class="title-sm"><a href="#">thớt gỗ teak</a></h2>
          <div class="border-title col"></div>
          <a href="#" class="show-more-pro">Xem thêm <i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="productList row mx-md-4">
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx9/thot-teak-20-30-2-5cm-0.jpg" alt="thot-teak-20-30-2-5cm-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thớt gỗ Teak Chef Studio hình chữ nhật 20x30x2,5cm</a>
                </h4>
                <div class="pro-price">
                  <div><del>345.000đ/chiếc</del></div>
                  <div>249.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx9/thot-teak-25-35-2-5cm-0.jpg" alt="thot-teak-25-35-2-5cm-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thớt gỗ Teak Chef Studio hình chữ nhật 25x35x2,5cm</a>
                </h4>
                <div class="pro-price">
                  <div><del>525.000đ/chiếc</del></div>
                  <div>349.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx9/thot-teak-38-51-2-5cm-0a.jpg" alt="thot-teak-38-51-2-5cm-0a" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thớt gỗ Teak Chef Studio hình chữ nhật 38x51x2,5cm</a>
                </h4>
                <div class="pro-price">
                  <div><del>1.164.000đ/chiếc</del></div>
                  <div>965.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx9/thot-teak-30-2-5cm-0.jpg" alt="thot-teak-30-2-5cm-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thớt gỗ Teak Chef Studio hình tròn 30x2,5cm</a>
                </h4>
                <div class="pro-price">
                  <div><del>525.000đ/chiếc</del></div>
                  <div>390.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx9/thot-teak-25-35-3-8cm-0.jpg" alt="thot-teak-25-35-3-8cm-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thớt gỗ Teak Chef Studio hình chữ nhật 25x35x3,8cm</a>
                </h4>
                <div class="pro-price">
                  <div><del>765.000đ/chiếc</del></div>
                  <div>509.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx9/thot-teak-28-40-3-8cm-0.jpg" alt="thot-teak-28-40-3-8cm-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thớt gỗ Teak Chef Studio hình chữ nhật 28x40x3,8cm</a>
                </h4>
                <div class="pro-price">
                  <div><del>945.000đ/chiếc</del></div>
                  <div>666.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx9/thot-teak-38-51-3-8cm-0a.jpg" alt="thot-teak-38-51-3-8cm-0a" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thớt gỗ Teak Chef Studio hình chữ nhật 38x51x3,8cm</a>
                </h4>
                <div class="pro-price">
                  <div><del>1.595.000đ/chiếc</del></div>
                  <div>1.395.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx9/thot-teak-30-3-8cm-0.jpg" alt="thot-teak-30-3-8cm-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thớt gỗ Teak Chef Studio hình tròn 30x3,8cm</a>
                </h4>
                <div class="pro-price">
                  <div><del>765.000đ/chiếc</del></div>
                  <div>509.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx9/thot-teak-ghep-ngang-cg01-0.jpg" alt="thot-teak-ghep-ngang-cg01-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thớt gỗ Teak chữ nhật ghép ngang 20x30x2,5cm</a>
                </h4>
                <div class="pro-price">
                  <div><del>340.000đ/chiếc</del></div>
                  <div>240.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="box">
            <figure class="pro-item">
              <div class="pro-img">
                <a href="#">
                  <img src="./assets/img/secBx9/thot-teak-ghep-ngang-cg02-0.jpg" alt="thot-teak-ghep-ngang-cg02-0" />
                  <div class="pro-cart">
                    <span>
                      <img class="me-1" src="./assets/img/icon_add_cart.png" alt="icon_add_cart" />Thêm vào giỏ hàng
                    </span>
                  </div>
                </a>
              </div>
              <figcaption class="pro-desc">
                <h4 class="pro-title">
                  <a href="#">Thớt gỗ Teak chữ nhật ghép ngang 25x35x3cm</a>
                </h4>
                <div class="pro-price">
                  <div><del>565.000đ/chiếc</del></div>
                  <div>449.000đ/chiếc</div>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section class="secSlider secSlider1">
      <div class="container-fluid">
        <h2 class="title">
          <a href="#">đối tác chiến lược</a>
        </h2>
        <p class="text-center">
          Gofood tự hào là đơn vị phân phối chính hãng các thương hiệu nổi
          tiếng hàng đầu trên thế giới
        </p>
        <div class="slider row">
          <div>
            <a href="#"><img src="./assets/img/logo-store/bo-uc.jpg" alt="bo-uc" /></a>
          </div>
          <div>
            <a href="#"><img src="./assets/img/logo-store/cagrill-logo.png" alt="cagrill-logo" /></a>
          </div>
          <div>
            <a href="#"><img src="./assets/img/logo-store/doi-tac-greater-omaha.png" alt="doi-tac-greater-omaha" /></a>
          </div>
          <div>
            <a href="#"><img src="./assets/img/logo-store/doi-tac-obe-organic.jpg" alt="doi-tac-obe-organic" /></a>
          </div>
          <div>
            <a href="#"><img src="./assets/img/logo-store/heo-iberico.jpg" alt="heo-iberico" /></a>
          </div>
          <div>
            <a href="#"><img src="./assets/img/logo-store/ldoge.jpg" alt="ldoge" /></a>
          </div>
          <div>
            <a href="#"><img src="./assets/img/logo-store/leroy-salmon-logo.jpg" alt="leroy-salmon-logo" /></a>
          </div>
          <div>
            <a href="#"><img src="./assets/img/logo-store/logo-chefstudio.png" alt="logo-chefstudio" /></a>
          </div>
          <div>
            <a href="#"><img src="./assets/img/logo-store/snake-river-farm.jpg" alt="snake-river-farm" /></a>
          </div>
          <div>
            <a href="#"><img src="./assets/img/logo-store/st-helens-agri-beef-logo-1.jpg" alt="st-helens-agri-beef-logo-1" /></a>
          </div>
          <div>
            <a href="#"><img src="./assets/img/logo-store/vikenco.jpg" alt="vikenco" /></a>
          </div>
        </div>
      </div>
    </section>
    <section class="secSlider secSlider2">
      <div class="container-fluid">
        <h2 class="title">
          <a href="#">tin tức</a>
        </h2>
        <div class="slider row">
          <figure class="news-item">
            <div class="news-img">
              <a href="#">
                <img src="./assets/img/bap-bo-uu-dai.jpg" alt="bap-bo-uu-dai" />
              </a>
            </div>
            <figcaption class="news-desc">
              <h4 class="news-title px-2">
                <a href="#">TẶNG NGAY 15% KHI MUA BẮP BÒ ÚC TƯƠI HỮU CƠ OBE CHO BỮA ĂN
                  GIA ĐÌNH</a>
              </h4>
              <p class="news-text px-2">
                <a href="#">
                  Đón những ngày cuối tuần thật chất lượng với những món ngon
                  giàu dinh dưỡng, Gofood tặng ngay ưu đãi 15% sản phẩm bắp bò
                  Úc hữu cơ Obe diễn ra từ 28/7 - 5/8 tại hệ thống Hà Nội, áp
                  dụng cho cả phần bắp bò nguyên cây và cắt thái theo yêu cầu.
                </a>
              </p>
            </figcaption>
          </figure>
          <figure class="news-item">
            <div class="news-img">
              <a href="#">
                <img src="./assets/img/bap-bo-uu-dai.jpg" alt="bap-bo-uu-dai" />
              </a>
            </div>
            <figcaption class="news-desc">
              <h4 class="news-title px-2">
                <a href="#">TẶNG NGAY 15% KHI MUA BẮP BÒ ÚC TƯƠI HỮU CƠ OBE CHO BỮA ĂN
                  GIA ĐÌNH</a>
              </h4>
              <p class="news-text px-2">
                <a href="#">
                  Đón những ngày cuối tuần thật chất lượng với những món ngon
                  giàu dinh dưỡng, Gofood tặng ngay ưu đãi 15% sản phẩm bắp bò
                  Úc hữu cơ Obe diễn ra từ 28/7 - 5/8 tại hệ thống Hà Nội, áp
                  dụng cho cả phần bắp bò nguyên cây và cắt thái theo yêu cầu.
                </a>
              </p>
            </figcaption>
          </figure>
          <figure class="news-item">
            <div class="news-img">
              <a href="#">
                <img src="./assets/img/bap-bo-uu-dai.jpg" alt="bap-bo-uu-dai" />
              </a>
            </div>
            <figcaption class="news-desc">
              <h4 class="news-title px-2">
                <a href="#">TẶNG NGAY 15% KHI MUA BẮP BÒ ÚC TƯƠI HỮU CƠ OBE CHO BỮA ĂN
                  GIA ĐÌNH</a>
              </h4>
              <p class="news-text px-2">
                <a href="#">
                  Đón những ngày cuối tuần thật chất lượng với những món ngon
                  giàu dinh dưỡng, Gofood tặng ngay ưu đãi 15% sản phẩm bắp bò
                  Úc hữu cơ Obe diễn ra từ 28/7 - 5/8 tại hệ thống Hà Nội, áp
                  dụng cho cả phần bắp bò nguyên cây và cắt thái theo yêu cầu.
                </a>
              </p>
            </figcaption>
          </figure>
          <figure class="news-item">
            <div class="news-img">
              <a href="#">
                <img src="./assets/img/bap-bo-uu-dai.jpg" alt="bap-bo-uu-dai" />
              </a>
            </div>
            <figcaption class="news-desc">
              <h4 class="news-title px-2">
                <a href="#">TẶNG NGAY 15% KHI MUA BẮP BÒ ÚC TƯƠI HỮU CƠ OBE CHO BỮA ĂN
                  GIA ĐÌNH</a>
              </h4>
              <p class="news-text px-2">
                <a href="#">
                  Đón những ngày cuối tuần thật chất lượng với những món ngon
                  giàu dinh dưỡng, Gofood tặng ngay ưu đãi 15% sản phẩm bắp bò
                  Úc hữu cơ Obe diễn ra từ 28/7 - 5/8 tại hệ thống Hà Nội, áp
                  dụng cho cả phần bắp bò nguyên cây và cắt thái theo yêu cầu.
                </a>
              </p>
            </figcaption>
          </figure>
          <figure class="news-item">
            <div class="news-img">
              <a href="#">
                <img src="./assets/img/bap-bo-uu-dai.jpg" alt="bap-bo-uu-dai" />
              </a>
            </div>
            <figcaption class="news-desc">
              <h4 class="news-title px-2">
                <a href="#">TẶNG NGAY 15% KHI MUA BẮP BÒ ÚC TƯƠI HỮU CƠ OBE CHO BỮA ĂN
                  GIA ĐÌNH</a>
              </h4>
              <p class="news-text px-2">
                <a href="#">
                  Đón những ngày cuối tuần thật chất lượng với những món ngon
                  giàu dinh dưỡng, Gofood tặng ngay ưu đãi 15% sản phẩm bắp bò
                  Úc hữu cơ Obe diễn ra từ 28/7 - 5/8 tại hệ thống Hà Nội, áp
                  dụng cho cả phần bắp bò nguyên cây và cắt thái theo yêu cầu.
                </a>
              </p>
            </figcaption>
          </figure>
          <figure class="news-item">
            <div class="news-img">
              <a href="#">
                <img src="./assets/img/bap-bo-uu-dai.jpg" alt="bap-bo-uu-dai" />
              </a>
            </div>
            <figcaption class="news-desc">
              <h4 class="news-title px-2">
                <a href="#">TẶNG NGAY 15% KHI MUA BẮP BÒ ÚC TƯƠI HỮU CƠ OBE CHO BỮA ĂN
                  GIA ĐÌNH</a>
              </h4>
              <p class="news-text px-2">
                <a href="#">
                  Đón những ngày cuối tuần thật chất lượng với những món ngon
                  giàu dinh dưỡng, Gofood tặng ngay ưu đãi 15% sản phẩm bắp bò
                  Úc hữu cơ Obe diễn ra từ 28/7 - 5/8 tại hệ thống Hà Nội, áp
                  dụng cho cả phần bắp bò nguyên cây và cắt thái theo yêu cầu.
                </a>
              </p>
            </figcaption>
          </figure>
          <figure class="news-item">
            <div class="news-img">
              <a href="#">
                <img src="./assets/img/bap-bo-uu-dai.jpg" alt="bap-bo-uu-dai" />
              </a>
            </div>
            <figcaption class="news-desc">
              <h4 class="news-title px-2">
                <a href="#">TẶNG NGAY 15% KHI MUA BẮP BÒ ÚC TƯƠI HỮU CƠ OBE CHO BỮA ĂN
                  GIA ĐÌNH</a>
              </h4>
              <p class="news-text px-2">
                <a href="#">
                  Đón những ngày cuối tuần thật chất lượng với những món ngon
                  giàu dinh dưỡng, Gofood tặng ngay ưu đãi 15% sản phẩm bắp bò
                  Úc hữu cơ Obe diễn ra từ 28/7 - 5/8 tại hệ thống Hà Nội, áp
                  dụng cho cả phần bắp bò nguyên cây và cắt thái theo yêu cầu.
                </a>
              </p>
            </figcaption>
          </figure>
          <figure class="news-item">
            <div class="news-img">
              <a href="#">
                <img src="./assets/img/bap-bo-uu-dai.jpg" alt="bap-bo-uu-dai" />
              </a>
            </div>
            <figcaption class="news-desc">
              <h4 class="news-title px-2">
                <a href="#">TẶNG NGAY 15% KHI MUA BẮP BÒ ÚC TƯƠI HỮU CƠ OBE CHO BỮA ĂN
                  GIA ĐÌNH</a>
              </h4>
              <p class="news-text px-2">
                <a href="#">
                  Đón những ngày cuối tuần thật chất lượng với những món ngon
                  giàu dinh dưỡng, Gofood tặng ngay ưu đãi 15% sản phẩm bắp bò
                  Úc hữu cơ Obe diễn ra từ 28/7 - 5/8 tại hệ thống Hà Nội, áp
                  dụng cho cả phần bắp bò nguyên cây và cắt thái theo yêu cầu.
                </a>
              </p>
            </figcaption>
          </figure>
          <figure class="news-item">
            <div class="news-img">
              <a href="#">
                <img src="./assets/img/bap-bo-uu-dai.jpg" alt="bap-bo-uu-dai" />
              </a>
            </div>
            <figcaption class="news-desc">
              <h4 class="news-title px-2">
                <a href="#">TẶNG NGAY 15% KHI MUA BẮP BÒ ÚC TƯƠI HỮU CƠ OBE CHO BỮA ĂN
                  GIA ĐÌNH</a>
              </h4>
              <p class="news-text px-2">
                <a href="#">
                  Đón những ngày cuối tuần thật chất lượng với những món ngon
                  giàu dinh dưỡng, Gofood tặng ngay ưu đãi 15% sản phẩm bắp bò
                  Úc hữu cơ Obe diễn ra từ 28/7 - 5/8 tại hệ thống Hà Nội, áp
                  dụng cho cả phần bắp bò nguyên cây và cắt thái theo yêu cầu.
                </a>
              </p>
            </figcaption>
          </figure>
          <figure class="news-item">
            <div class="news-img">
              <a href="#">
                <img src="./assets/img/bap-bo-uu-dai.jpg" alt="bap-bo-uu-dai" />
              </a>
            </div>
            <figcaption class="news-desc">
              <h4 class="news-title px-2">
                <a href="#">TẶNG NGAY 15% KHI MUA BẮP BÒ ÚC TƯƠI HỮU CƠ OBE CHO BỮA ĂN
                  GIA ĐÌNH</a>
              </h4>
              <p class="news-text px-2">
                <a href="#">
                  Đón những ngày cuối tuần thật chất lượng với những món ngon
                  giàu dinh dưỡng, Gofood tặng ngay ưu đãi 15% sản phẩm bắp bò
                  Úc hữu cơ Obe diễn ra từ 28/7 - 5/8 tại hệ thống Hà Nội, áp
                  dụng cho cả phần bắp bò nguyên cây và cắt thái theo yêu cầu.
                </a>
              </p>
            </figcaption>
          </figure>
        </div>
        <div class="md-button-show-more text-center pt-4 mt-4 mt-md-4 d-none d-md-block">
          <a class="btn btn-warning" href="#">Xem tất cả</a>
        </div>
      </div>
    </section>
    <section class="secSlider secSlider3">
      <div class="container-fluid">
        <h2 class="title">
          <a href="#">video</a>
        </h2>
        <div class="slider row">
          <div class="video-item position-relative">
            <a href="#">
              <img src="./assets/img/pho-cuon-bo-1.jpg" alt="pho-cuon-bo-1" />
              <div class="vid-icon"></div>
            </a>
            <h4 class="vid-title">
              <a href="#">
                LÀM MÓN PHỞ CUỐN THỊT BÒ THANH MÁT CHO NHỮNG NGÀY HÈ
              </a>
            </h4>
          </div>
          <div class="video-item position-relative">
            <a href="#">
              <img src="./assets/img/pho-cuon-bo-1.jpg" alt="pho-cuon-bo-1" />
              <div class="vid-icon"></div>
            </a>
            <h4 class="vid-title">
              <a href="#">
                LÀM MÓN PHỞ CUỐN THỊT BÒ THANH MÁT CHO NHỮNG NGÀY HÈ
              </a>
            </h4>
          </div>
          <div class="video-item position-relative">
            <a href="#">
              <img src="./assets/img/pho-cuon-bo-1.jpg" alt="pho-cuon-bo-1" />
              <div class="vid-icon"></div>
            </a>
            <h4 class="vid-title">
              <a href="#">
                LÀM MÓN PHỞ CUỐN THỊT BÒ THANH MÁT CHO NHỮNG NGÀY HÈ
              </a>
            </h4>
          </div>
          <div class="video-item position-relative">
            <a href="#">
              <img src="./assets/img/pho-cuon-bo-1.jpg" alt="pho-cuon-bo-1" />
              <div class="vid-icon"></div>
            </a>
            <h4 class="vid-title">
              <a href="#">
                LÀM MÓN PHỞ CUỐN THỊT BÒ THANH MÁT CHO NHỮNG NGÀY HÈ
              </a>
            </h4>
          </div>
          <div class="video-item position-relative">
            <a href="#">
              <img src="./assets/img/pho-cuon-bo-1.jpg" alt="pho-cuon-bo-1" />
              <div class="vid-icon"></div>
            </a>
            <h4 class="vid-title">
              <a href="#">
                LÀM MÓN PHỞ CUỐN THỊT BÒ THANH MÁT CHO NHỮNG NGÀY HÈ
              </a>
            </h4>
          </div>
          <div class="video-item position-relative">
            <a href="#">
              <img src="./assets/img/pho-cuon-bo-1.jpg" alt="pho-cuon-bo-1" />
              <div class="vid-icon"></div>
            </a>
            <h4 class="vid-title">
              <a href="#">
                LÀM MÓN PHỞ CUỐN THỊT BÒ THANH MÁT CHO NHỮNG NGÀY HÈ
              </a>
            </h4>
          </div>
        </div>
        <div class="md-button-show-more text-center pt-4 mt-4 mt-md-4 d-none d-md-block">
          <a class="btn btn-warning" href="#">Xem tất cả</a>
        </div>
      </div>
    </section>
    <section class="sec2">
      <div class="container-fluid">
        <h2 class="title"><a href="#">hệ thống cửa hàng</a></h2>
        <div class="row mx-5 d-md-flex d-sm-none">
          <div class="offset-lg-3 col-lg-3 col-md-6">
            <div class="area">
              <a href="#" class="d-flex">
                <div class="store-number">10</div>
                <div class="area-name">
                  <p>Chi nhánh</p>
                  <p>hà nội</p>
                </div>
              </a>
            </div>
            <ul class="storeList hanoi">
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 1: thực phẩm cao cấp</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  413 Thụy Khuê, Tây Hồ, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02466 863 864 - 0898 58 3838
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 2: the butcher shop</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  161 Trung Kính, Cầu Giấy, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02466 53 2236 - 0898 58 2828
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 3: the butcher &amp; seafood</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  04-LK6C Nguyễn Văn Lộc, Hà Đông, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02466 70 1686 - 0889 307 308
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 4: thực phẩm cao cấp</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  23 Yên Lãng, Đống Đa, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  024 665 79969 – 0896 467 799
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 5: thực phẩm cao cấp</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  48 Lê Đại Hành, Hai Bà Trưng, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  024 665 33667 – 0899 466 966
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 6: the butcher &amp; seafood</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  205A Ngọc Lâm, Long Biên, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02462 91 3959 - 0898 59 7966
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 7: gofood hàm nghi</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  CT1A-ĐN2, Hàm Nghi, Nam Từ Liêm, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02422 050 848 - 0898 57 27 88
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 8: thực phẩm cao cấp</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  221 Đội Cấn, Ba Đình, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02462 953 111 – 0899 592 889
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 9: the butcher &amp; seafood</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  1B Hàm Long, Hoàn Kiếm, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02462 953 333 – 0899 583 699
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 10: gofood linh đàm</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  CT4A KĐT Bắc Linh Đàm, Hoàng Mai, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02462 953 222 – 0898 592 699
                </div>
              </li>
            </ul>
            <div class="show-more-store">
              <div class="btn-show btn btn-warning py-2 px-4 position-relative">
                Xem thêm các cơ sở khác <i class="fa-solid fa-angle-down"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="area">
              <a href="#" class="d-flex">
                <div class="store-number">02</div>
                <div class="area-name">
                  <p>Chi nhánh</p>
                  <p>hồ chí minh</p>
                </div>
              </a>
            </div>
            <ul class="storeList">
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 1: gofood sài gòn - thủ đức</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  111 đường B Trưng Trắc, Hiệp Bình Chánh, Thủ Đức, TP HCM
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  028 224 55533 - 0906 030 686
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 2: gofood sài gòn - bình thạch</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  127B - A3 Lê Văn Duyệt (Đinh Tiên Hoàng cũ), Phường 3, Bình
                  Thạnh, TP HCM
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  028 668 67 515 - 0896 57 37 88
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="slider mx-5 d-md-none d-sm-block">
          <div>
            <div class="area">
              <a href="#" class="d-flex">
                <div class="store-number">10</div>
                <div class="area-name">
                  <p>Chi nhánh</p>
                  <p>hà nội</p>
                </div>
              </a>
            </div>
            <ul class="storeList hanoi2">
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 1: thực phẩm cao cấp</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  413 Thụy Khuê, Tây Hồ, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02466 863 864 - 0898 58 3838
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 2: the butcher shop</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  161 Trung Kính, Cầu Giấy, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02466 53 2236 - 0898 58 2828
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 3: the butcher &amp; seafood</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  04-LK6C Nguyễn Văn Lộc, Hà Đông, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02466 70 1686 - 0889 307 308
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 4: thực phẩm cao cấp</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  23 Yên Lãng, Đống Đa, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  024 665 79969 – 0896 467 799
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 5: thực phẩm cao cấp</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  48 Lê Đại Hành, Hai Bà Trưng, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  024 665 33667 – 0899 466 966
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 6: the butcher &amp; seafood</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  205A Ngọc Lâm, Long Biên, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02462 91 3959 - 0898 59 7966
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 7: gofood hàm nghi</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  CT1A-ĐN2, Hàm Nghi, Nam Từ Liêm, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02422 050 848 - 0898 57 27 88
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 8: thực phẩm cao cấp</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  221 Đội Cấn, Ba Đình, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02462 953 111 – 0899 592 889
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 9: the butcher &amp; seafood</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  1B Hàm Long, Hoàn Kiếm, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02462 953 333 – 0899 583 699
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 10: gofood linh đàm</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  CT4A KĐT Bắc Linh Đàm, Hoàng Mai, Hà Nội
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  02462 953 222 – 0898 592 699
                </div>
              </li>
            </ul>
            <div class="show-more-store">
              <div class="btn-show btn btn-warning py-2 px-4 position-relative">
                Xem thêm các cơ sở khác <i class="fa-solid fa-angle-down"></i>
              </div>
            </div>
          </div>
          <div>
            <div class="area">
              <a href="#" class="d-flex">
                <div class="store-number">02</div>
                <div class="area-name">
                  <p>Chi nhánh</p>
                  <p>hồ chí minh</p>
                </div>
              </a>
            </div>
            <ul class="storeList">
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 1: gofood sài gòn - thủ đức</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  111 đường B Trưng Trắc, Hiệp Bình Chánh, Thủ Đức, TP HCM
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  028 224 55533 - 0906 030 686
                </div>
              </li>
              <li class="store-item">
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="text-uppercase text-bold">cs 2: gofood sài gòn - bình thạch</a>
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  127B - A3 Lê Văn Duyệt (Đinh Tiên Hoàng cũ), Phường 3, Bình
                  Thạnh, TP HCM
                </div>
                <div>
                  <div class="icon-store">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  028 668 67 515 - 0896 57 37 88
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- end content -->
  <!-- start footer -->
  <footer>
    <div class="container-fluid">
      <div class="footer-top row">
        <div class="col-lg-3 info">
          <div class="logo">
            <img src="./assets/img/img-header/logo.png" alt="logo-footer" />
          </div>
          <div class="text-bold">
            <i class="fa-solid fa-house"></i>CÔNG TY TNHH THƯƠNG MẠI QUỐC TẾ
            FBC
          </div>
          <div>
            <i class="fa-solid fa-barcode"></i>Số ĐKKD 0107098534 cấp ngày
            12/11/2015 do Sở Kế Hoạch và Đầu Tư Hà Nội
          </div>
          <div>
            <i class="fa-solid fa-location-dot"></i>04-LK6C, P. Nguyễn Văn
            Lộc, P. Mộ Lao, Hà Đông, Hà Nội
          </div>
          <div>
            <i class="fa-solid fa-envelope"></i>Email: &nbsp;
            <a href="#" class="smooth">contact@gofood.vn</a>
          </div>
          <div>
            <i class="fa-solid fa-clock"></i>Giờ làm việc: Từ 8h30 - 12h15 &
            13h30 - 19h15 với tất cả các ngày trong tuần
          </div>
          <div class="contact-support">
            <p class="text-bold">TỔNG ĐÀI HỖ TRỢ</p>
            <a href="#" class="smooth text-primary">1900 3220</a>
          </div>
        </div>
        <hr class="d-lg-none w-100 mt-4" />
        <div class="col-lg-5 pt-4 text-sm-center text-md-start">
          <div class="row">
            <div class="col-md-4">
              <h4>sản phẩm</h4>
              <ul>
                <li><a href="#">Thịt nhập khẩu</a></li>
                <li><a href="#">Set Box tiện lợi</a></li>
                <li><a href="#">Nước sốt và gia vị</a></li>
                <li><a href="#">Hải sản nhập khẩu</a></li>
                <li><a href="#">Đồ bếp chuyên dụng</a></li>
              </ul>
            </div>
            <hr class="d-md-none w-100 mt-4" />
            <div class="col-md-4">
              <h4>giới thiệu</h4>
              <ul>
                <li><a href="#">Về chúng tôi</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Phương thức thanh toán</a></li>
                <li><a href="#">Tuyển dụng</a></li>
              </ul>
            </div>
            <hr class="d-md-none w-100 mt-4" />
            <div class="col-md-4">
              <h4>thông tin</h4>
              <ul class="mb-5">
                <li><a href="#">Chính sách và quy định chung</a></li>
                <li><a href="#">Hướng dẫn đặt hàng</a></li>
                <li><a href="#">Cam kết chất lượng</a></li>
              </ul>
              <h4>dịch vụ</h4>
              <ul>
                <li><a href="#">Premium services</a></li>
                <li><a href="#">Gói quà biếu tặng</a></li>
                <li><a href="#">Tích điểm khách hàng</a></li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="d-lg-none w-100 mt-4" />
        <div class="col-lg-4 pt-4 text-sm-center text-md-start">
          <div class="row">
            <div class="col-md-6">
              <h4>theo dõi chúng tôi</h4>
              <ul class="socialList mb-5">
                <li class="social-item">
                  <div class="icon-social">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                  <a href="#" class="smooth">Facebook</a>
                </li>
                <li class="social-item">
                  <div class="icon-social">
                    <i class="fa-brands fa-instagram"></i>
                  </div>
                  <a href="#" class="smooth">Instagram</a>
                </li>
                <li class="social-item">
                  <div class="icon-social">
                    <i class="fa-brands fa-youtube"></i>
                  </div>
                  <a href="#" class="smooth">Youtube</a>
                </li>
              </ul>
              <h4>website cùng hệ thống</h4>
              <div class="footer-img-list1">
                <a href="#">
                  <div class="d-inline-block">
                    <img src="./assets/img/logo-store/ldoge.jpg" alt="ldoge" />
                  </div>
                </a>
                <a href="#">
                  <div class="d-inline-block">
                    <img src="./assets/img/logo-store/logo-chefstudio.png" alt="logo-chefstudio" />
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="fb-page" data-href="https://www.facebook.com/gofood.vn/" data-tabs="timeline" data-width="268" data-height="130" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/gofood.vn/" class="fb-xfbml-parse-ignore">
                  <a href="https://www.facebook.com/gofood.vn/">Gofood.vn</a>
                </blockquote>
              </div>
              <div class="footer-img-list2 d-flex align-items-center mt-4">
                <a href="#">
                  <div>
                    <img src="./assets/img/thongbaobocongthuong.png" alt="thongbaobocongthuong" />
                  </div>
                </a>
                <a href="#">
                  <div><img src="./assets/img/dmca.png" alt="dmca" /></div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright d-flex align-items-center justify-content-center">
      Copyrights © 2016 - 2022 Gofood. All Rights Reserved
    </div>
  </footer>
  <!-- end footer -->
  <!-- start back top -->
  <div class="backToTop">
    <i class="fa-solid fa-angle-up"></i>
  </div>
  <!-- end back top -->
  <!-- start contact phone -->
  <div class="contact-phone">
    <a href="#">
      <div class="call"></div>
      1900 3220
    </a>
  </div>
  <!-- end contact phone -->
  <!-- start modal -->
  <div class="js-modal-menu modal-menu"></div>
  <div class="js-modal-video modal-video">
    <iframe width="955" height="537" src="https://www.youtube.com/embed/1z1G5rIpuNA"></iframe>
    <div class="icon-close js-icon-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
  </div>
  <div class="js-modal-video modal-video">
    <iframe width="955" height="537" src="https://www.youtube.com/embed/Ro1bLAXgyu8"></iframe>
    <div class="icon-close js-icon-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
  </div>
  <div class="js-modal-video modal-video">
    <iframe width="955" height="537" src="https://www.youtube.com/embed/2clZ_rbbbmI"></iframe>
    <div class="icon-close js-icon-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
  </div>

  <!-- end modal -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./assets/js/script.js"></script>
  <?php
  if (empty($_SESSION['username'])) header('location: ./Pages/login.php');
  else {
    echo
    "<script>
          const dropdown = document.querySelector('.user .dropdown');
          dropdown.innerHTML = `
            <div style='font-size: 17px'>Xin chào: </div>
            <div style='font-weight: bold'>{$_SESSION['username']}</div>
          `;
        </script>";
  }
  ?>
</body>

</html>