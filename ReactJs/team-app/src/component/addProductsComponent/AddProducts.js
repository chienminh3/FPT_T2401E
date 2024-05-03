

import { useState } from 'react';
import './AddProducts.css';

function AddProducts() {
    const [bookName, setBookName] = useState("")
    const [autherName, setAuther] = useState("")
    const [pubYear, setPubYear] = useState()
    const [avatarBook, setAvatarBook] = useState("")
    const [price, setPrice] = useState()

    const save = () => {

    } 

    return (

        <>
            <div className='addProducts-container'>
                <p className='addProducts-titleForm'>NHẬP THÔNG TIN SÁCH</p>
                <div className='addProducts-form'>
                    <div className='addProducts-containetBook'>
                        <label className='addProducts-lable'>Tên sách</label>
                        <input style={{width: "220px", height: "20px"}} type='text' id='bookName'></input>
                    </div>
                    <div className='addProducts-containetBook'>
                        <label className='addProducts-lable'>Tên tác giả</label>
                        <input style={{width: "220px", height: "20px"}} type='text' id='auther'></input>
                    </div>
                    <div className='addProducts-containetBook'>
                        <label className='addProducts-lable'>Năm xuất bản</label>
                        <input style={{width: "220px", height: "20px"}} type='number' id='pubYear'></input>
                    </div>
                    <div className='addProducts-containetBook'>
                        <label className='addProducts-lable'>Link ảnh bìa</label>
                        <input style={{width: "220px", height: "20px"}} type='text' id='avatarBook'></input>
                    </div>
                    <div className='addProducts-containetBook'>
                        <label className='addProducts-lable'>Giá bán</label>
                        <input style={{width: "220px", height: "20px"}} type='number' id='priceBook'></input>
                    </div>
                    <div className='addProducts-containerBtn'>
                        <button className='addProducts-btn' id='addProducts-btn'>Save</button>
                    </div>
                    <div className='addProducts-containerError'>
                        <p className='addProducts-Error' id='errorFormProduct' style={{color: "red"}}></p>
                    </div>
                </div>
            </div>
        </>

    );
}

export default AddProducts;