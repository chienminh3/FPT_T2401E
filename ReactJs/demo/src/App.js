


import { Routes, Route, Form } from 'react-router-dom';
import logo from './logo.svg';
import HeaderComponent, {title, h2} from './component/headerComponent/Header';
import Footer from './component/footerComponent/Footer';
import Home from './component/Home';
import Product from './component/Product';
import Contact from './component/Contact';
import ProductDetail from './component/ProductDetail';
import FormAdmin from './component/FormAdmin';



function App() {
  return (
    <div className="App">
    {/* <SetForm /> */}
    {/* <SetEvent /> */}


      <Home />
      <HeaderComponent/>
        {/* <Routes>
          <Route path='/' element={<Product />}></Route>
          <Route path='/Contact' element={<Contact />}></Route>
          <Route path='/Product/:id' element={<ProductDetail />}></Route>
        </Routes> */}
      <Footer />
      
      {/* <h1>{title}</h1>
      <h1>{h2}</h1> */}
      {/* <Footer age="day la tuoi cua property => name !"/> */}
    </div>
  );
}

export default App;


// functionComponent
// classcompponent
// chuyen du lieu component

// 1-2 cau hoi: 2 cai tren thi su dung trong cac truong hop nhu the nao?