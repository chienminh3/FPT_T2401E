

import { Route, Routes } from "react-router-dom";
import Admin from "./component/adminComponent/Admin";
import AddProducts from "./component/addProductsComponent/AddProducts";

function App() {
  return (
    <div className="App">
      <Routes>
        <Route path="/" element={<Admin />}></Route>
        <Route path="/AddProducts" element={<AddProducts />}></Route>
      </Routes>
    </div>
  )
}

export default App;
