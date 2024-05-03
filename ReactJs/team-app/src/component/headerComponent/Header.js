
import './Header.css';
import './Reponsive.css';


function Header() {
  return (

    <header>
      <div className="grid wide">
        <div className="container row">
          <div className="col c-0 m-0 l-1">
            <a href="nhanam1.html">
              <img src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/logo.png?1704690471681" />
            </a>
          </div>
          <div className="col c-0 m-6 l-0">
            <div
              className="header_content"
              style={{ justifyContent: "flex-start" }}
            >
              <i className="fa-solid fa-bars fa-2x theme_color" />
              <a href="nhanam1.html">
                <img src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/logo.png?1704690471681" />
              </a>
            </div>
          </div>
          <div className="col c-12 m-0 l-0">
            <div className="header_content">
              <i className="fa-solid fa-bars fa-2x theme_color" />
              <a className="header_content" href="nhanam1.html">
                <img src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/logo.png?1704690471681" />
              </a>
              <div className="header_content">
                <i className="fa-solid fa-magnifying-glass dropdown">
                  <form className="header_search">
                    <input type="text" placeholder="Tìm kiếm..." required="" />
                    <button
                      type="submit"
                      className="fa-solid fa-magnifying-glass"
                    />
                  </form>
                </i>
                <i
                  className="fa-regular fa-bag-shopping fa-lg icon"
                  style={{ position: "relative" }}
                >
                  <div className="item_counter_box">
                    <div className="item_counter">0</div>
                  </div>
                </i>
              </div>
            </div>
          </div>
          <div className="c-0 m-0 l-8">
            <ul className="header_content">
              <li>
                <a href="nhanam1.html">Trang chủ</a>
              </li>
              <li className="dropdown">
                <a className="list" href="https://nhanam.vn/lien-he">
                  Tin sách
                </a>
                <div className="dropdown_list" style={{ minWidth: 250 }}>
                  <a href="https://nhanam.vn/tin-nha-nam">Tin Nhã Nam</a>
                  <a href="https://nhanam.vn/tin-nha-nam">
                    Review sách của độc giả
                  </a>
                  <a href="https://nhanam.vn/tin-nha-nam">
                    Review sách trên báo chí
                  </a>
                  <a href="https://nhanam.vn/tin-nha-nam">
                    Biên tập viên giới thiệu
                  </a>
                </div>
              </li>
              <li className="dropdown">
                <a className="list" href="https://nhanam.vn/collections/all">
                  Sách Nhã Nam
                </a>
                <div className="dropdown_table">
                  <div className="tablecol">
                    <h3>
                      <a href="#">Hư cấu</a>
                      <div className="h3underline" />
                    </h3>
                    <a href="#">Văn học hiện đại</a>
                    <a href="#">Văn học kinh điển</a>
                    <a href="#">Văn học thiếu nhi</a>
                    <a href="#"> Lãng mạn</a>
                    <a href="#">Kỳ ảo</a>
                    <a href="#">Trinh thám - Kinh dị</a>
                    <a href="#">Khoa học Viễn tưởng</a>
                    <a href="#">Phiêu lưu ly kỳ</a>
                    <a href="#">Tản văn</a>
                    <a href="#">Truyện tranh (Graphic novel)</a>
                    <a href="#">Sách tranh (Picture book)</a>
                    <a href="#">Thơ - kịch</a>
                    <a href="#">Light novel</a>
                    <a href="#">Sách tô màu</a>
                  </div>
                  <div className="tablecol">
                    <h3>
                      <a href="#">Phi hư cấu</a>
                      <div className="h3underline" />
                    </h3>
                    <a href="#">Triết học</a>
                    <a href="#">Sử học</a>
                    <a href="#">Khoa học</a>
                    <a href="#">Kinh doanh</a>
                    <a href="#">Kinh tế chính trị</a>
                    <a href="#">Kỹ năng </a>
                    <a href="#">Nghệ thuật</a>
                    <a href="#">Nuôi dạy con</a>
                    <a href="#">Tiểu luận - phê bình</a>
                    <a href="#">Tâm lý ứng dụng</a>
                    <a href="#">Tâm lý học</a>
                    <a href="#">Hồi ký</a>
                    <a href="#">Y học - Sức khỏe</a>
                    <a href="#">Tâm linh - Tôn giáo</a>
                    <a href="#">Kiến thức phổ thông</a>
                    <a href="#">Phong cách sống</a>
                  </div>
                  <div className="tablecol">
                    <h3>
                      <a href="#">Thiếu nhi</a>
                      <div className="h3underline" />
                    </h3>
                    <a href="#">0-5 tuổi</a>
                    <a href="#">6-8 tuổi</a>
                    <a href="#">9-12 tuổi</a>
                    <a href="#">13-15 tuổi</a>
                  </div>
                  <div className="tablecol">
                    <h3>
                      <a href="#">Phân loại khác</a>
                      <div className="h3underline" />
                    </h3>
                    <a href="#">Sách bán chạy</a>
                    <a href="#">Sách mới xuất bản</a>
                    <a href="#">Sách sắp xuất bản</a>
                    <a href="#">Sách được giải thưởng</a>
                    <a href="#">Sách pop-up, lift-the-flaps</a>
                    <a href="#">Nghiên cứu Việt Nam</a>
                    <a href="#">Việt Nam danh tác</a>
                    <a href="#">Tác giả Việt Nam</a>
                    <a href="#">Bản đặc biệt</a>
                    <a href="#">Phụ kiện - Quà tặng</a>
                  </div>
                </div>
              </li>
              <li>
                <a href="https://nhanam.vn/tac-gia">Tác giả</a>
              </li>
              <li className="dropdown">
                <a className="list" href="https://nhanam.vn/cuoc-thi">
                  Cuộc thi
                </a>
                <div className="dropdown_list" style={{ minWidth: 250 }}>
                  <a href="https://nhanam.vn/tin-nha-nam">AI ĐÓ ĐỌC CÙNG TA</a>
                </div>
              </li>
              <li>
                <a href="https://nhanam.vn/gioi-thieu">Về Nhã Nam</a>
              </li>
              <li className="dropdown">
                <a className="list" href="https://nhanam.vn/lien-he">
                  Liên hệ
                </a>
                <div className="dropdown_list" style={{ minWidth: 250 }}>
                  <a href="https://nhanam.vn/tin-nha-nam">Hệ thống hiệu sách</a>
                  <a href="https://nhanam.vn/tin-nha-nam">Hệ thống phát hành</a>
                  <a href="https://nhanam.vn/tin-nha-nam">Gửi thư cho Nhã Nam</a>
                  <a href="https://nhanam.vn/tin-nha-nam">Tuyển dụng</a>
                </div>
              </li>
            </ul>
          </div>
          {/* <div class="col c-8 m-0 l-0"> */}
          {/* </div> */}
          <div className="col c-0 m-0 l-3">
            <div className="header_content">
              <form className="header_search">
                <input type="text" placeholder="Tìm kiếm..." required="" />
                <button type="submit" className="fa-solid fa-magnifying-glass" />
              </form>
              <i className="fa-regular fa-user fa-lg icon dropdown">
                <div className="dropdown_list">
                  <a href="login.html">Đăng nhập</a>
                  <a href="register.html">Đăng ký</a>
                </div>
              </i>
              <i
                className="fa-regular fa-bag-shopping fa-lg icon"
                style={{ position: "relative" }}
              >
                <div className="item_counter_box">
                  <div className="item_counter">0</div>
                </div>
              </i>
            </div>
          </div>
          {/* <div class="col c-0 m-4 l-0"></div> */}
          <div className="col c-0 m-6 l-0">
            <div className="header_content">
              <form className="header_search">
                <input type="text" placeholder="Tìm kiếm..." required="" />
                <button type="submit" className="fa-solid fa-magnifying-glass" />
              </form>
              <div className="header_content">
                <i className="fa-regular fa-user fa-lg icon dropdown">
                  <div className="dropdown_list">
                    <a href="../html/login.html">Đăng nhập</a>
                    <a href="../html/login.html">Đăng ký</a>
                  </div>
                </i>
                <i
                  className="fa-regular fa-bag-shopping fa-lg icon"
                  style={{ position: "relative" }}
                >
                  <div className="item_counter_box">
                    <div className="item_counter">0</div>
                  </div>
                </i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>


  )
}

export default Header;