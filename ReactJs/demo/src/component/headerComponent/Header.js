
import { Link } from "react-router-dom";
import './Header.css';
function HeaderComponent () {

    return (
        <>
            <h1>hello T2401E...</h1>
            <ul>
                <li>
                    <Link to="/">Home</Link>
                </li>

                <li>
                    <Link to="/Product">Product</Link>
                </li>

                <li>
                    <Link to="/Contact">Contact</Link>
                </li>
            </ul>
        </>
    );
}

export default HeaderComponent;