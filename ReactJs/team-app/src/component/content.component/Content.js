
import './Reponsive.css'
import './Content.css'
import './Responsive_content.css'
import { Link } from 'react-router-dom'
import { useState } from 'react'

function Content() {

  const [studentList, setStudentList] = useState[""];


  const products = [{
    id: 1,
    src: "https://bizweb.dktcdn.net/thumb/large/100/363/455/products/khong-co-tuyet-vong-tren-instagram-01-e1710474202548.jpg?v=1710474211207",
    name: "KHÔNG CÓ TUYỆT VỌNG TRÊN INSTAGRAM",
    price: "123.250₫",
    sale: "145.000₫"
  },
  {
    id: 2,
    src: "https://bizweb.dktcdn.net/thumb/large/100/363/455/products/thuc-hanh-khac-ky-01-e1710211043565.jpg?v=1710211104237",
    name: "THỰC HÀNH KHẮC KỶ",
    price: "91.800₫",
    sale: "108.000₫"
  },
  {
    id: 3,
    src: "https://bizweb.dktcdn.net/thumb/large/100/363/455/products/tieng-thet-cam-lang-01-e1710210545189.jpg?v=1710210558077",
    name: "TIẾNG THÉT CÂM LẶNG",
    price: "212.500₫",
    sale: "250.000₫"
  },
  {
    id: 4,
    src: "https://bizweb.dktcdn.net/thumb/large/100/363/455/products/chang-trai-chuyen-kiep-va-co-gai-thien-tai-2-01-e1709006845284.jpg?v=1709006861020",
    name: "CHÀNG TRAI CHUYỂN KIẾP VÀ CÔ GÁI THIÊN TÀI TẬP 2",
    price: "114.750₫",
    sale: "135.000₫"
  },
  {
    id: 5,
    src: "https://bizweb.dktcdn.net/thumb/large/100/363/455/products/tuoigiarucroe1708260434879.jpg?v=1708261482417",
    name: "TUỔI GIÀ RỰC RỠ",
    price: "254.150₫",
    sale: "299.000₫"
  }]

  return (

    <div className="content-1">
      <div className="grid wide">
        <div className="row">
          <div className="col l-8 m-12 c-12 blog">
            <a href="#">
              <img
                src="https://bizweb.dktcdn.net/100/363/455/articles/trang-web-9c2872f3-c1e8-4f4d-8706-07845b72e362.png?v=1710132804897"
                alt="Banner" title='Banner'
              />
            </a>
            <div className="content-blog main-content">
              <h3 className="one">
                <a href="#" className="a-title">
                  Cơ hội gặp gỡ một trong những nhà văn Pháp đương đại nổi tiếng
                  nhất
                </a>
              </h3>
              <span style={{ fontSize: 14, color: "#7B7B7D" }}>
                Thứ 3, 12/03/2024
              </span>
            </div>
          </div>
          <div className="col l-4 m-12 c-12">
            <div className="blog-list">
              <div className="item" style={{ paddingTop: 0 }}>
                <div className="item-blog">
                  <a href="" className="thumb">
                    <img
                      src="https://bizweb.dktcdn.net/100/363/455/articles/seo-2.png?v=1700487959943"
                      alt=""
                      className="img-blog"
                    />
                  </a>
                  <div className="content-blog-2">
                    <h3 style={{ marginBottom: 10 }}>
                      <a
                        href=""
                        title="5 bí quyết dưỡng ẩm đắt giá - Chăm sóc da hiệu quả ngay trong mùa"
                      >
                        5 bí quyết dưỡng ẩm đắt giá - Chăm sóc da hiệu quả ngay
                        trong mùa đông
                      </a>
                    </h3>
                    <span style={{ fontSize: 14, color: "#7B7B7D" }}>
                      Thứ Hai, 20/11/2023
                    </span>
                  </div>
                </div>
              </div>
              <div className="item">
                <div className="item-blog">
                  <a href="" className="thumb">
                    <img
                      src="https://bizweb.dktcdn.net/100/363/455/articles/seo-1.png?v=1700281321867"
                      alt=""
                      className="img-blog"
                    />
                  </a>
                  <div className="content-blog-2">
                    <h3 style={{ marginBottom: 10 }}>
                      <a
                        href=""
                        title="Khám phá bí mật làm thịt lợn quay bì giòn tại gia"
                      >
                        Khám phá bí mật làm thịt lợn quay bì giòn tại gia
                      </a>
                    </h3>
                    <span style={{ fontSize: 14, color: "#7B7B7D" }}>
                      Thứ Bảy, 18/11/2023
                    </span>
                  </div>
                </div>
              </div>
              <div className="item">
                <div className="item-blog">
                  <a href="" className="thumb">
                    <img
                      src="https://bizweb.dktcdn.net/100/363/455/articles/nha-nam-website-3154da6f-42a3-4ff9-b4c5-f7b217989147.png?v=1699532816857"
                      alt=""
                      className="img-blog"
                    />
                  </a>
                  <div className="content-blog-2">
                    <h3 style={{ marginBottom: 10 }}>
                      <a href="" title="Những cuốn sách dành cho người hướng nội">
                        Những cuốn sách dành cho người hướng nội
                      </a>
                    </h3>
                    <span style={{ fontSize: 14, color: "#7B7B7D" }}>
                      Thứ Năm, 09/11/2023
                    </span>
                  </div>
                </div>
              </div>
              <div className="item" style={{ border: "none" }}>
                <div className="item-blog">
                  <a href="" className="thumb">
                    <img
                      src="https://bizweb.dktcdn.net/100/363/455/articles/ban-do-cf.png?v=1698399264317"
                      alt=""
                      className="img-blog"
                    />
                  </a>
                  <div className="content-blog-2">
                    <h3 style={{ marginBottom: 10 }}>
                      <a
                        href=""
                        title="Sự thật ám ảnh về loại cafe đắt nhất thế giới"
                      >
                        Sự thật ám ảnh về loại cafe đắt nhất thế giới
                      </a>
                    </h3>
                    <span style={{ fontSize: 14, color: "#7B7B7D" }}>
                      Thứ Sáu, 27/10/2023
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div className="grid wide">
        <div className="content-2">
          {/* top content 2*/}
          <div className="top-content-2">
            <h1>Các tác giả</h1>
            <a href="" className="seen-more">
              <h3>Xem thêm</h3>
              <i className="fa fa-angle-right" />
            </a>
          </div>
          {/* below content 2*/}
          <div className="below-content-2">
            <a href="" className="container-item-content-2">
              <div>
                <li>
                  <img
                    src="https://bizweb.dktcdn.net/100/363/455/articles/du-6-au-8-avril-on-pourra-rencontrer-caryl-ferey-a-quais-du-polar-plus-jamais-seul-est-en-lice-pour-le-prix-polar-en-serie-photo-d-archives-pierre-augros-1522611099.jpeg?v=1705585948700"
                    alt="Caryl Férey"
                    title="Caryl Férey"
                  />
                </li>
              </div>
              <h3 className="hover-name-tacgia">Caryl Férey</h3>
            </a>
            <a href="" className="container-item-content-2">
              <div>
                <li>
                  <img
                    src="https://bizweb.dktcdn.net/100/363/455/articles/a001157172-23.jpeg?v=1705927222763"
                    alt="Urakami Tetsuya"
                    title="Urakami Tetsuya"
                  />
                </li>
              </div>
              <h3 className="hover-name-tacgia">Urakami Tetsuya</h3>
            </a>
            <a href="" className="item-2 container-item-content-2">
              <div>
                <li>
                  <img
                    src="https://bizweb.dktcdn.net/100/363/455/articles/lightman.jpeg?v=1705296925087"
                    alt="Alan Lightman"
                    title="Alan Lightman"
                  />
                </li>
              </div>
              <h3 className="hover-name-tacgia">Alan Lightman</h3>
            </a>
            <a href="" className="item-3 container-item-content-2">
              <div>
                <li>
                  <img
                    src="https://bizweb.dktcdn.net/100/363/455/articles/perec.jpg?v=1705299179727"
                    alt="Georges Perec"
                    title="Georges Perec"
                  />
                </li>
              </div>
              <h3 className="hover-name-tacgia">Georges Perec</h3>
            </a>
            <a href="" className="item-4 container-item-content-2">
              <div>
                <li>
                  <img
                    src="https://bizweb.dktcdn.net/100/363/455/articles/blank-author-3e2f8612-a184-47e9-bc7b-97528e3d8c32.jpg?v=1705288131493"
                    alt="Lee Jin Song"
                    title="Lee Jin Song"
                  />
                </li>
              </div>
              <h3 className="hover-name-tacgia">Lee Jin Song</h3>
            </a>
            <a href="" className="item-5 container-item-content-2">
              <div>
                <li>
                  <img
                    src="https://bizweb.dktcdn.net/100/363/455/articles/blank-author-33728236-0ca7-4f4e-a265-ddcd14036f53.jpg?v=1705287921247"
                    alt="Nhóm tư vấn Từ Mạn Mạn"
                    title="Nhóm tư vấn Từ Mạn Mạn"
                  />
                </li>
              </div>
              <h3 className="hover-name-tacgia">Nhóm tư vấn Từ Mạn Mạn</h3>
            </a>
          </div>
        </div>
        {/* content 3 */}
        <div className="content-3">
          {/* top content 3*/}
          <div className="top-content-3">
            <h1>Sách mới</h1>
            <a href="" className="seen-more">
              <h3>Xem thêm</h3>
              <i className="fa fa-angle-right" />
            </a>
          </div>

          {/* below content 3 */}
          <div className="below-content-3" >
            {products.map((item, index) => 
              <Link key={index} to={"product/" + item.id} className="pic pic-content-3-hover">
                <li>
                  <img src={item.src} />
                  <div className="buy-cart">
                    <div className="cart">
                      <i className="fa fa-shopping-bag" />
                    </div>
                    <div className="buy">Mua ngay</div>
                  </div>
                </li>
                <div className="book-name-price">
                  <h3 className="hover-name-book">
                    {item.name}
                  </h3>
                  <div className="price-book">
                    <h3 className="price">{item.price}</h3>
                    <del>{item.sale}</del>
                  </div>
                </div>
              </Link>
            )}
          </div>


          {/* bottom content 3 */}
          <div className="bottom-content-3">
            {/* left conntent 3 */}
            <div className="left-content-3">
              <h1>Nhã Nam</h1>
              <i>Bởi vì sách là thế giới</i>
              <p>
                Nhã Nam, tên đầy đủ là Công ty Cổ phần Văn hóa và Truyền thông Nhã
                Nam, gia nhập thị trường sách Việt Nam vào tháng 2 năm 2005. Ngay từ
                cuốn sách đầu tiên, độc giả đã dành sự quan tâm và yêu mến cho một
                thương hiệu sách mới mẻ mang trong mình khát vọng góp phần tạo lập
                diện mạo mới cho xuất bản văn học tại Việt Nam.
              </p>
              <a href="" className="hover-click-XemThem">
                <h3>Xem thêm</h3>
              </a>
            </div>
            {/* right content 3 */}
            <div className="right-content-3">
              <img
                src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/banner-module-profile.jpg?1704690471681"
                alt="anh"
              />
            </div>
          </div>
        </div>
        {/* Content 4 */}
        <div className="content-4">
          {/* top content 4 */}
          <div className="top-content-4">
            <h1>Sách Nhã Nam trên báo chí</h1>
            <a href="" className="seen-more">
              <h3>Xem thêm</h3>
              <i className="fa fa-angle-right" />
            </a>
          </div>
          {/* bottom content 4 */}
          <div className="bottom-content-4">
            <a href="" className="click click-content-4-hover">
              <li>
                <img
                  src="https://bizweb.dktcdn.net/thumb/large/100/363/455/products/mot-ngay-trong-doi-ivan-denisovich-01-e1710382608466.jpg?v=1710382664393"
                  alt="MỘT NGÀY TRONG ĐỜI IVAN DENISOVICH"
                  title="MỘT NGÀY TRONG ĐỜI IVAN DENISOVICH"
                />
              </li>
              <div className="infor-book-content-4">
                <p className="name-book-content-4">
                  MỘT NGÀY TRONG ĐỜI IVAN DENISOVICH
                </p>
                <div className="bottom-infor price-book-content-4">
                  <p>127.500₫</p>
                  <small>
                    <del>150.000₫</del>
                  </small>
                </div>
              </div>
            </a>
            <a href="" className="click click-content-4-hover">
              <li>
                <img
                  src="https://bizweb.dktcdn.net/thumb/large/100/363/455/products/hoi-dap-cung-em-tuong-lai-se-the-nao-c-04.jpg?v=1710382343007"
                  alt="HỎI ĐÁP CÙNG EM - TƯƠNG LAI SẼ THẾ NÀO?"
                  title="HỎI ĐÁP CÙNG EM - TƯƠNG LAI SẼ THẾ NÀO?"
                />
              </li>
              <div className="infor-book-content-4">
                <p className="name-book-content-4">
                  HỎI ĐÁP CÙNG EM - TƯƠNG LAI SẼ THẾ NÀO?
                </p>
                <p>Xem thêm</p>
              </div>
            </a>
            <a href="" className="click-2 click-content-4-hover">
              <li>
                <img
                  src="https://bizweb.dktcdn.net/thumb/large/100/363/455/products/meo-chien-binh-thoi-khac-tam-toi-01-e1710382055163.jpg?v=1710382063447"
                  alt="MÈO CHIẾN BINH 6 - THỜI KHẮC TĂM TỐI"
                  title="MÈO CHIẾN BINH 6 - THỜI KHẮC TĂM TỐI"
                />
              </li>
              <div className="infor-book-content-4">
                <p className="name-book-content-4">
                  MÈO CHIẾN BINH 6 - THỜI KHẮC TĂM TỐI
                </p>
                <p>Xem thêm</p>
              </div>
            </a>
            <a href="" className="click-3 click-content-4-hover">
              <li>
                <img
                  src="https://bizweb.dktcdn.net/thumb/large/100/363/455/products/truoc-khi-chung-ta-noi-loi-chia-tay-01-e1709778991248.jpg?v=1709779093920"
                  alt="TRƯỚC KHI CHÚNG TA NÓI LỜI CHIA TAY"
                  title="TRƯỚC KHI CHÚNG TA NÓI LỜI CHIA TAY"
                />
              </li>
              <div className="infor-book-content-4">
                <p className="name-book-content-4">
                  TRƯỚC KHI CHÚNG TA NÓI LỜI CHIA TAY
                </p>
                <p>Xem thêm</p>
              </div>
            </a>
            <a href="" className="click-4 click-content-4-hover">
              <li>
                <img
                  src="https://bizweb.dktcdn.net/thumb/large/100/363/455/products/tram-cam-va-ky-nang-tu-kiem-soat-tram-cam-01-e1709778785909.jpg?v=1709778898463"
                  alt="TRẦM CẢM VÀ KỸ NĂNG TỰ KIỂM SOÁT TRẦM CẢM"
                  title="TRẦM CẢM VÀ KỸ NĂNG TỰ KIỂM SOÁT TRẦM CẢM"
                />
              </li>
              <div className="infor-book-content-4">
                <p className="name-book-content-4">
                  TRẦM CẢM VÀ KỸ NĂNG TỰ KIỂM SOÁT TRẦM CẢM
                </p>
                <p>Xem thêm</p>
              </div>
            </a>
          </div>
        </div>
        {/* content 5 */}
        <div className="content-5">
          {/* top content 5 */}
          <div className="top-content-5">
            <h1>Sách Nhã Nam trên báo chí</h1>
            <a href="" className="seen-more">
              <h3>Xem thêm</h3>
              <i className="fa fa-angle-right" />
            </a>
          </div>
          {/* bottom content 5 */}
          <div className="bottom-content-5">
            <div className="container-item-content-5">
              <a href="">
                <img
                  src="https://bizweb.dktcdn.net/100/363/455/articles/website-a-nh-da-i-die-n-ba-i-vie-t-12.png?v=1710848741370"
                  alt="Gặp gỡ nhà văn Pháp Bernard Werber: Xã hội loài người chỉ 1/3 thật sự làm việc"
                  title="Gặp gỡ nhà văn Pháp Bernard Werber: Xã hội loài người chỉ 1/3 thật sự làm việc"
                />
                <p className="text-bottom-content-5">
                  Gặp gỡ nhà văn Pháp Bernard Werber: Xã hội loài người chỉ 1/3 thật
                  sự làm việc
                </p>
              </a>
              <p>
                Trò chuyện với độc giả Hà Nội vàp ngày 16/3 nhân chuyến thăm và giao
                lưu với độc giả ba...
              </p>
              <p className="date-bottom-content-5">Thứ Ba, 19/03/2024</p>
            </div>
            <div className="container-item-content-5">
              <a href="">
                <img
                  src="https://bizweb.dktcdn.net/100/363/455/articles/website-a-nh-da-i-die-n-ba-i-vie-t-7.png?v=1710232983947"
                  alt="Độc giả Việt từng không mấy mặn mà với Xứ cát"
                  title="Độc giả Việt từng không mấy mặn mà với Xứ cát"
                />
                <p className="text-bottom-content-5">
                  Độc giả Việt từng không mấy mặn mà với "Xứ cát"
                </p>
              </a>
              <p>
                "Xứ cát" không ngoại lệ với các sách khác thuộc dòng kinh điển của thể
                loại khoa học viễn tưởng,...
              </p>
              <p className="date-bottom-content-5">Thứ Ba, 12/03/2024</p>
            </div>
            <div className="item-content-5-2 container-item-content-5">
              <a href="">
                <img
                  src="https://bizweb.dktcdn.net/100/363/455/articles/website-a-nh-da-i-die-n-ba-i-vie-t-4.png?v=1710229061890"
                  alt="Tiểu luận về nghệ thuật An Nam: Bức tranh tổng quát về mỹ thuật, kiến trúc, nghi lễ văn hoá Việt Nam"
                  title="Tiểu luận về nghệ thuật An Nam: Bức tranh tổng quát về mỹ thuật, kiến trúc, nghi lễ văn hoá Việt Nam"
                />
                <p className="text-bottom-content-5">
                  Tiểu luận về nghệ thuật An Nam: Bức tranh tổng quát về mỹ thuật,
                  kiến trúc, nghi lễ văn hoá...
                </p>
              </a>
              <p>
                ANTD.VN - Bản dịch tiếng Việt tác phẩm "Tiểu luận về nghệ thuật An
                Nam" của tác giả Louis Bezacier...
              </p>
              <p className="date-bottom-content-5">Thứ Ba, 12/03/2024</p>
            </div>
          </div>
        </div>
        {/* content 6 */}
        <div className="content-6">
          {/* top-content-6 */}
          <div className="top-content-6">
            <h1>Các đối tác</h1>
            <a href="" className="seen-more">
              <h3>Xem thêm</h3>
              <i className="fa fa-angle-right" />
            </a>
          </div>
          {/* bottom content 6 */}
          <div className="bottom-content-6">
            <div className="item-content-6">
              <a href="">
                <li>
                  <img
                    src="https://bizweb.dktcdn.net/100/363/455/articles/screenshot-2023-09-26-175445.jpg?v=1695725699413"
                    alt="Simon and Schuster"
                    title="Simon and Schuster"
                  />
                </li>
              </a>
              <a href="">
                <p className="color-text-content-6">Simon and Schuster</p>
              </a>
            </div>
            <div className="item-content-6">
              <a href="">
                <li>
                  <img
                    src="https://bizweb.dktcdn.net/100/363/455/articles/screenshot-2023-09-26-093035.jpg?v=1695695448453"
                    alt="Pop Up Projects"
                    title="Pop Up Projects"
                  />
                </li>
              </a>
              <a href="">
                <p className="color-text-content-6">Pop Up Projects</p>
              </a>
            </div>
            <div className="item-content-6-2 item-content-6">
              <a href="">
                <li>
                  <img
                    src="https://bizweb.dktcdn.net/100/363/455/articles/fireandwaterlogo-768x831.jpg?v=1695695322987"
                    alt="HarperCollins Publishers"
                    title="HarperCollins Publishers"
                  />
                </li>
              </a>
              <a href="">
                <p className="color-text-content-6">HarperCollins Publishers</p>
              </a>
            </div>
            <div className="item-content-6-3 item-content-6">
              <a href="">
                <li>
                  <img
                    src="https://bizweb.dktcdn.net/100/363/455/articles/logo-goethe-institut.png?v=1694484225040"
                    alt="Viện Goethe Hà Nội"
                    title="Viện Goethe Hà Nội"
                  />
                </li>
              </a>
              <a href="">
                <p className="color-text-content-6">Viện Goethe Hà Nội</p>
              </a>
            </div>
            <div className="item-content-6-4 item-content-6">
              <a href="">
                <li>
                  <img
                    src="https://bizweb.dktcdn.net/100/363/455/articles/logo.jpg?v=1694079471953"
                    alt="Lotte Department Store Vietnam"
                    title="Lotte Department Store Vietnam"
                  />
                </li>
              </a>
              <a href="">
                <p className="color-text-content-6">Lotte Department Store Vietnam</p>
              </a>
            </div>
            <div className="item-content-6-5 item-content-6">
              <a href="">
                <li>
                  <img
                    src="https://bizweb.dktcdn.net/100/363/455/articles/penguin-random-house-svg.png?v=1694079204497"
                    alt="Penguin Random House"
                    title="Penguin Random House"
                  />
                </li>
              </a>
              <a href="">
                <p className="color-text-content-6">Penguin Random House</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Content;