document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.menu-nav').innerHTML = `
    <div class="container-fluid">
    <nav class="main-nav mx-5">
      <ul class="js-md-menu md-menu d-flex">
        <li class="i-home d-sm-none d-lg-block"><a href="../index.php"><img src="../assets/img/img-header/icon-home2.png" alt="icon-home2"></a></li>
        <li class="d-sm-block d-lg-none">
          <div class="js-icon-close icon-close"><i class="fa-solid fa-xmark"></i></div>
        </li>
        <li class="d-sm-block d-lg-none">
          <form>
            <input type="text" placeholder="Nhập từ khóa tìm kiếm" class="w-100 h-100">
            <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </li>
        <li></li>
        <li>
          <a href="./proList.php">Thịt nhập khẩu</a>
          <div class="sub-nav" style="width: 225px">
            <ul>
              <li><a href="./proDetail.php">Thịt bò Mỹ</a></li>
              <li>
                <a href="#">Thịt bò Úc</a>
                <ul class="hidden" style="list-style: square;">
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
                <ul class="hidden" style="list-style: square;">
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
          <div class="sub-nav" style="width: 274px; height: 450px; overflow-y: scroll;">
            <ul>
              <li><a href="#">Đồ viên</a></li>
              <li><a href="#">Mỳ, ngũ cốc &amp; khoai</a></li>
              <li><a href="#">Bơ &amp; phô mai</a></li>
              <li>
                <a href="#">Rau củ &amp; trái cây</a>
                <ul class="hidden" style="list-style: square;">
                  <li><a href="#">Rau tươi</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Xúc xịch, Pate &amp; Thịt nguội</a>
                <ul class="hidden" style="list-style: square;">
                  <li><a href="#">Xúc xích Đức</a></li>
                  <li><a href="#">Pate</a></li>
                  <li><a href="#">Thịt nguội</a></li>
                  <li><a href="#">Gan ngỗng Pháp</a></li>
                  <li><a href="#"> Đùi heo muối Tây Ban Nha</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Quà tặng và Voucher</a>
                <ul class="hidden" style="list-style: square;">
                  <li><a href="#">Bao bì hộp quà</a></li>
                  <li><a href="#">Hộp quà Tết 2022</a></li>
                  <li><a href="#">Voucher phiếu mua hàng</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="./news.php">Tin tức</a>
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
    `;
})