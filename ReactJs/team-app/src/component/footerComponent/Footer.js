
import './Footer.css';
import './Reponsive.css';

function Footer () {

    return (
        
        <footer className="footer">
            <div className="social-mk">
                <div className="grid wide">
                <div className="row">
                    <div className="col l-4 m-12 c-12">
                    <div className="social">
                        <a
                        href="https://www.facebook.com/nhanampublishing"
                        className="social-btn"
                        target="_blank"
                        >
                        <img
                            src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/facebook-icon.png?1704690471681"
                            alt=""
                            className="social-icon"
                        />
                        </a>
                        <a
                        href="https://www.instagram.com/"
                        className="social-btn"
                        target="_blank"
                        >
                        <img
                            src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/instagram-icon.png?1704690471681"
                            alt=""
                            className="social-icon"
                        />
                        </a>
                        <a
                        href="https://www.lazada.vn/shop/nha-nam-tphcm1632821525/"
                        className="social-btn"
                        target="_blank"
                        >
                        <img
                            src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/lazada-icon.png?1704690471681"
                            alt=""
                            className="social-icon"
                        />
                        </a>
                        <a
                        href="https://shopee.vn/nhanam59"
                        className="social-btn"
                        target="_blank"
                        >
                        <img
                            src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/shopee-icon.png?1704690471681"
                            alt=""
                            className="social-icon"
                        />
                        </a>
                        <a
                        href="https://www.tiktok.com/@nhanamhanoi"
                        className="social-btn"
                        target="_blank"
                        >
                        <img
                            src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/tiktok-icon.png?1704690471681"
                            alt=""
                            className="social-icon"
                        />
                        </a>
                    </div>
                </div>
                <div className="col l-8 m-12 c-12">
                <div className="email">
                    <h4 className="noti">Nhận thông tin khuyến mãi từ chúng tôi</h4>
                    <div className="mail-noti">
                    <form className="mail-form">
                        <input
                        type="email"
                        placeholder="Nhận email ưu đãi"
                        className="form-control"
                        />
                        <button type="submit" className="btn-submit">
                        Đăng kí
                        </button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div className="first-footer">
            <div className="grid wide">
            <div className="row">
                <div className="col l-3 m-6 c-12">
                <a href="" className="logo">
                    <img
                    src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/logo.png?1704690471681"
                    alt=""
                    style={{ height: "auto", width: "unset" }}
                    />
                    <span className="logo-title">Bởi vì sách là thế giới</span>
                </a>
                <ul className="list-1">
                    <li className="list-content">
                    <i
                        className="fa-light fa-location-dot icon-footer"
                        style={{ marginTop: 14 }}
                    />
                    <p style={{ marginBottom: 0, fontSize: 14 }}>
                        Số 59, Đỗ Quang, Trung Hoà, Cầu Giấy, Hà Nội.
                    </p>
                    </li>
                    <li className="list-content">
                    <i className="fa-light fa-envelope icon-footer" />
                    <a href="" style={{ fontSize: 14 }}>
                        info@nhanam.vn
                    </a>
                    </li>
                    <li className="list-content">
                    <i className="fa-light fa-phone icon-footer" />
                    <a href="" style={{ fontSize: 14 }}>
                        02435146876
                    </a>
                    </li>
                    <li className="list-content">
                    <i className="fa-light fa-mobile icon-footer" />
                    <a href="" style={{ fontSize: 14 }}>
                        0903244248
                    </a>
                    </li>
                </ul>
                </div>
                <div className="col l-3 m-6 c-12">
                <h4 className="title-menu">giới thiệu</h4>
                <ul className="list-menu">
                    <li className="li-menu">
                    <a href="">Về Nhã Nam</a>
                    </li>
                    <li className="li-menu">
                    <a href="">Hệ thống hiệu sách</a>
                    </li>
                    <li className="li-menu">
                    <a href="">Hệ thống phát hành</a>
                    </li>
                    <li className="li-menu">
                    <a href="">Tuyển dụng</a>
                    </li>
                    <li className="li-menu">
                    <a href="">Liên hệ với chúng tôi</a>
                    </li>
                </ul>
                </div>
                <div className="col l-3 m-6 c-12">
                <h4 className="title-menu">chính sách</h4>
                <ul className="list-menu">
                    <li className="li-menu">
                    <a href="">Chính sách bảo mật</a>
                    </li>
                    <li className="li-menu">
                    <a href="">Chính sách đổi trả/hoàn tiền</a>
                    </li>
                    <li className="li-menu">
                    <a href="">Chính sách thanh toán/ vận chuyển</a>
                    </li>
                </ul>
                </div>
                <div className="col l-3 m-6 c-12">
                <h4 className="title-menu">phương thức thanh toán</h4>
                <div className="payment-method">
                    <img
                    src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/payment_method.png?1704690471681"
                    alt=""
                    style={{ height: "auto", width: "unset" }}
                    />
                </div>
                <div className="payment">
                    <a href="">
                    <img
                        src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/bocongthuong.png?1704690471681"
                        alt=""
                        style={{ height: "auto", width: "unset" }}
                    />
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </footer>
    )
}

export default Footer;