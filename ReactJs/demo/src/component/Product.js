
import { Link } from "react-router-dom"

function Product () {

    const products = [{id:1, name:"product 01"},{id:2, name:"product 02"},{id:3, name:"product 03"}]
    return (
        <>
            <h1>Product Page</h1>
            <ul>
                {products.map((item, index) => <li key={index} ><Link to={"product/"+item.id} >{item.name}</Link></li> )}
            </ul>
        </>
    )
}

export default Product;