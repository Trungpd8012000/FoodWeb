document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('header').innerHTML = `
    <div class="header-top d-lg-block d-sm-none">
    <div class="container-fluid">
      <div class="mx-5 d-flex justify-content-between">
        <nav class="top-nav top-nav-left">
          <ul class="d-flex justify-content-between">
            <li>
              <a class="smooth" href="#">
                <img src="../assets/img/img-header/icon-store.png" alt="icon-store"> Hệ thống cửa hàng
              </a>
            </li>
            <li>
              <a class="smooth" href="#">
                <i class="fa-solid fa-location-dot me-2" style="color: #fcbb26;"></i> Bạn đang ở: <b>Hà Nội</b> <i class="fa-solid fa-angle-down ms-1"></i>
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
              <a class="smooth" href="./introduce.php">Về chúng tôi</a>
              <div class="sub-nav" style="width: 150px">
                <ul>
                  <li><a href="./introduce.php">Giới thiệu</a></li>
                  <li><a href="#">Tuyển dụng</a></li>
                  <li><a href="./contact.php">Liên hệ</a></li>
                </ul>
              </div>
            </li>
            <li><a class="smooth" href="./payment-method.php">Phương thức thanh toán</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="header-bottom">
    <div class="container-fluid">
      <div class="row mx-sm-5 align-items-center">
        <div class="col-lg-2 ps-0 d-lg-block d-sm-none">
          <a href="../index.html">
            <img src="../assets/img/img-header/logo.png" alt="logo" class="w-100 h-auto">
          </a>
        </div>
        <div class="col-lg-3 d-lg-block d-sm-none">
          <form class="search-fr position-relative">
            <input type="text" placeholder="Tìm kiếm trên Gofood">
            <button type="submit">Tìm kiếm</button>
          </form>
        </div>
        <div class="col-lg-7">
          <div class="row align-items-center">
            <div class="col-lg-6 contact-top">
              <div class="phone d-lg-flex d-sm-none">
                <a href="tel:1900 3220" class="text-bold" style="color: #E12025;">1900 3220</a>
                <span>(8h30 - 12h15 &amp; 13h30 - 19h15)</span>
                <a href="tel:0896 420 666" class="icon-phone"><i class="fas fa-phone-alt"></i></a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="account d-flex justify-content-between align-items-center">
                <div class="js-icon-menu icon-menu d-sm-block d-lg-none">
                  <i class="fa-solid fa-bars" style="font-size: 24px;"></i>
                </div>
                <div class="md-logo d-sm-block d-lg-none text-center">
                  <a href="../index.html">
                    <img src="../assets/img/img-header/logo.png" alt="logo" class="w-75">
                  </a>
                </div>
                <div class="user d-user-none d-lg-flex d-sm-none align-items-center position-relative">
                  <svg class="icon-login" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38" height="38" viewBox="0 0 46 46">
                    <image id="Vector_Smart_Object" data-name="Vector Smart Object" width="46" height="46" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAYAAABXuSs3AAAD80lEQVRogeXazWtcZRTH8c9Mg1JNW7GtzSRiXMVWiCvdFKoUiuhO3MS22viyUShSAm7cBEFXQlBpEV82Vhta/wANbirExk19Q9CalbUkFjRS8wIqprp4nmniZebOfe6dIOIXhoS55zznl2fuPc85Z1JbnWqoSB/2Yx92Ywg34cZ4fQVXMIsLmMZZXK4StFZSeC8OYRR7S8aewUmcwnKqc6rwrRjDUWxPDdaGBRzHBBaLOtUTAozgW4zrnmhxrfG49khRpyLCt+A9nEZ/KWnF6I8xJmPMXDoJH8R5HK6uqzAHY8zBPKM84cM4J2SJMvwWX2UYirGH2xm0Ez6IDzGQGPArPIFd2Bxfu/A4vkxcayBqaLnzrbLKFuGjStnpq3gOr8TfW1HHMbwsLSnM4m4sZRfL8rr02+OIkM7aiRavTUTbFIbwRvbNrPAR6Q/i28IhUpRT0SeFgzKpcv2tslXIpSkp70/chh8ThTTwA3oSfOaxRzyk1u/4mPQ8/bF00aLP2USffkEj1oT3Csd4KudL+DT5rITPUUHrNeGHlDvGfy7h0+SnEj7bxWewKXy0ZPCdJf3glpJ+RwjC+5QvTe8p6UfIzWXYi7660ASU5V7pp6voc1+FuPvrQudSlh68VMLvRWmpMMu+utBuVWEUTyXYPynULlXYXVe++lvPm3he/i72RJu3uhBvqLY61Vi21thW5Ru8hilciu/digfxLO7sUpyV2upU468uLZZlNf7ctBGLV3lAOrEhgpvUhbnHf42VHmFYU/Ue/1UonH7vYHe9UBluqxjvSo/QYZQ5RBaFjmcS3yX63iHUR8eEcjqV2bowFktlOgYfly5a9BmPa3xSwv9CPYpI4RwOqDj7i1yOa32a6DddW51q9CneDKwIuzSXGKgTA8Ite0NB+0Zd+KtnCjqc0H3R4ponCtrO4HKzHn+noNPpZEnFeb+g3UnWmuVefC+/C7qK66ydiN2mB3+glmOzgNux3NzxZWHUm8eijRNNmBh0GjMfF2fp67v8CWEE0I5tQsG0UQzKP5jmBY34p/BF69r/FtTwqo2pQTYJh1keY9Z9ItlJ1hn5U6mH8YFqTXKWnUIZ/FCOzaSg7RqtZofPCDm1HfcLdfejbfyLUsdjca0DOXazeLqVc5alKC4vX+/Au/hcaN02FxQr2o7iCyG17cixnYtalrIX8r68GlZ8Rr4SbaeFGfkl/BKv3SzMF+8SpgIPKFaNzgmd09etLnb61m0QH+lOX5rCrLDTF9sZdLpHLwqDm5QxclUmY8y2oin2cC0JD+Ij8vN8VeZjjMNa3NNZUrLCGWE+/YJw9HaLhbjmHpmUl8f/5ivxVvwr/4TwN3TK2QNzxyzNAAAAAElFTkSuQmCC"></image>
                  </svg>
                  <div class="dropdown d-lg-inline-block">
                    <div style="font-size: 17px;">Tài khoản</div>
                    <div>
                      <a class="smooth" href="./login.php"><b>Đăng nhập</b></a> | <a class="smooth" href="./signup.php"><b>Đăng ký</b></a>
                    </div>
                    <div class="register-login">
                      <a href="./login.php">Đăng nhập</a>
                      <a href="./signup.php">Đăng ký</a>
                    </div>
                  </div>
                </div>
                <div class="user sm-user d-lg-none d-sm-flex align-items-center position-relative">
                  <svg class="icon-login" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38" height="38" viewBox="0 0 46 46">
                    <image id="Vector_Smart_Object" data-name="Vector Smart Object" width="46" height="46" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAYAAABXuSs3AAAD80lEQVRogeXazWtcZRTH8c9Mg1JNW7GtzSRiXMVWiCvdFKoUiuhO3MS22viyUShSAm7cBEFXQlBpEV82Vhta/wANbirExk19Q9CalbUkFjRS8wIqprp4nmniZebOfe6dIOIXhoS55zznl2fuPc85Z1JbnWqoSB/2Yx92Ywg34cZ4fQVXMIsLmMZZXK4StFZSeC8OYRR7S8aewUmcwnKqc6rwrRjDUWxPDdaGBRzHBBaLOtUTAozgW4zrnmhxrfG49khRpyLCt+A9nEZ/KWnF6I8xJmPMXDoJH8R5HK6uqzAHY8zBPKM84cM4J2SJMvwWX2UYirGH2xm0Ez6IDzGQGPArPIFd2Bxfu/A4vkxcayBqaLnzrbLKFuGjStnpq3gOr8TfW1HHMbwsLSnM4m4sZRfL8rr02+OIkM7aiRavTUTbFIbwRvbNrPAR6Q/i28IhUpRT0SeFgzKpcv2tslXIpSkp70/chh8ThTTwA3oSfOaxRzyk1u/4mPQ8/bF00aLP2USffkEj1oT3Csd4KudL+DT5rITPUUHrNeGHlDvGfy7h0+SnEj7bxWewKXy0ZPCdJf3glpJ+RwjC+5QvTe8p6UfIzWXYi7660ASU5V7pp6voc1+FuPvrQudSlh68VMLvRWmpMMu+utBuVWEUTyXYPynULlXYXVe++lvPm3he/i72RJu3uhBvqLY61Vi21thW5Ru8hilciu/digfxLO7sUpyV2upU468uLZZlNf7ctBGLV3lAOrEhgpvUhbnHf42VHmFYU/Ue/1UonH7vYHe9UBluqxjvSo/QYZQ5RBaFjmcS3yX63iHUR8eEcjqV2bowFktlOgYfly5a9BmPa3xSwv9CPYpI4RwOqDj7i1yOa32a6DddW51q9CneDKwIuzSXGKgTA8Ite0NB+0Zd+KtnCjqc0H3R4ponCtrO4HKzHn+noNPpZEnFeb+g3UnWmuVefC+/C7qK66ydiN2mB3+glmOzgNux3NzxZWHUm8eijRNNmBh0GjMfF2fp67v8CWEE0I5tQsG0UQzKP5jmBY34p/BF69r/FtTwqo2pQTYJh1keY9Z9ItlJ1hn5U6mH8YFqTXKWnUIZ/FCOzaSg7RqtZofPCDm1HfcLdfejbfyLUsdjca0DOXazeLqVc5alKC4vX+/Au/hcaN02FxQr2o7iCyG17cixnYtalrIX8r68GlZ8Rr4SbaeFGfkl/BKv3SzMF+8SpgIPKFaNzgmd09etLnb61m0QH+lOX5rCrLDTF9sZdLpHLwqDm5QxclUmY8y2oin2cC0JD+Ij8vN8VeZjjMNa3NNZUrLCGWE+/YJw9HaLhbjmHpmUl8f/5ivxVvwr/4TwN3TK2QNzxyzNAAAAAElFTkSuQmCC"></image>
                  </svg>
                  <div class="dropdown d-lg-inline-block">
                    <div class="register-login">
                      <a href="./login.php">Đăng nhập</a>
                      <a href="./signup.php">Đăng ký</a>
                    </div>
                  </div>
                </div>
                <div class="cart position-relative">
                  <a class="d-flex">
                    <img src="../assets/img/img-header/cart.png" alt="cart">
                    <span class="d-lg-block d-sm-none">Giỏ hàng</span>
                    <strong>0</strong>
                  </a>
                  <div class="js-cart-order cart-order">
                    <div>
                      <strong>Tổng: <span class="float-end">0đ</span></strong>
                    </div>
                    <div class="d-flex justify-content-between">
                      <a href="./cart.php" class="btn btn-success">Giỏ hàng</a>
                      <a href="./cart.php" class="btn btn-warning text-white">Đặt hàng</a>
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
    `;
})