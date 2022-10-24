<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GOFOOD | Thịt bò Mỹ - Thịt bò Nhật - Cá hồi Na Uy - Thịt heo Iberico</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon-gofood.jpg">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
	<body class="body">
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="oO6P55Vx"></script>

  <!-- start header -->
  <header id="header"></header>
  <div class="menu-nav d-lg-block"></div>
  <!-- end header -->

  <!-- start content -->
  <main id="content">
    <div class="container-fluid">
      <div class="py-5">
        <div class="modal-content mx-auto" style="max-width: 500px">
          <div class="modal-body">
            <div class="form-title text-center">
              <p>Đăng nhập</p>
            </div>
            <div class="d-flex flex-column text-center">
              <form method="POST" id="login-form">
                <div class="form-group">
                  <input type="email" class="form-control" name="txt_email" placeholder="Nhập địa chỉ email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="txt_password" placeholder="Mật khẩu">
                </div>
                <div class="form-group text-start mb-4" style="font-size: 16px; color: #282828">
                  <span>Quên mật khẩu? Nhấn vào <a href="#" style="color: #fdb819">đây</a></span>
                </div>
                <div class="form-group">
                  <button type="submit" name="txt_submit" id="btn-login-regis" class="btn btn-info rounded">Đăng nhập</button>
                </div>
              </form>
              <div class="form-group text-center my-4" style="font-size: 16px; color: #282828">
                Hoặc đăng nhập với
              </div>
              <div class="form-group d-flex justify-content-between">
                <button type="button" class="btn btn-primary btn-fb rounded float-left" id="login_fb" style="width: 45%;padding: 10px;">Facebook
                </button>
                <button type="button" class="btn btn-danger btn-gg rounded float-right" id="loginGGBtn" style="width: 45%; padding: 10px">Google
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
          <div style="font-size: 16px; color: #282828">Bạn chưa có tài khoản?
            <a href="./signup.php" class="text-primary">
              Đăng ký ngay
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- end content -->
        
  <!-- start footer -->
  <footer></footer>
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
  <!-- end modal -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="../Components/Header/Header.js"></script>
  <script src="../Components/MenuNav/MenuNav.js"></script>
  <script src="../Components/ShopSystem/ShopSystem.js"></script>
  <script src="../Components/Footer/Footer.js"></script>
  <script src="../assets/js/script.js"></script>
  <?php
  include('../control.php');
  $get_data = new data();
  $user_email = '';
  $username = '';
  if (isset($_POST['txt_submit'])) {
    if (empty($_POST['txt_email']) || empty($_POST['txt_password'])) {
      echo "<script> alert('Bạn chưa nhập đủ dữ liệu!') </script>";
    } else {
      $get_email = $get_data->select_signup_email($_POST['txt_email']);
      foreach ($get_email as $val) {
        $user_email = $val['email'];
        $username = $val['username'];
      }
      $_SESSION['username'] = $username;
      if ($user_email != $_POST['txt_email']) {
        echo "<script> alert('Tên tài khoản không đúng!') </script>";
      } else {
        $get_account = $get_data->select_user_account($_POST['txt_email'], $_POST['txt_password']);
        if ($get_account != 1) echo "<script> alert('Mật khẩu sai!') </script>";
        else echo "<script> window.location = '../index.html'; </script>";
      }
    }
  }
  ?>
	</body>
</html>