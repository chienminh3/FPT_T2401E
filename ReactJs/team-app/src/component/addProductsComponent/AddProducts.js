

import { useState } from 'react';
import './AddProducts.css';
import { db } from './AddProductsService';

function AddProducts() {

    const [bookName, setBookName] = useState("")
    const [autherName, setAuther] = useState("")
    const [pubYear, setPubYear] = useState()
    const [img, setImg] = useState("")
    const [price, setPrice] = useState()

    const save = (id, bookName, autherName, pubYear, img, price) => {
        if (id === 0) {
            db.listProducts.add({
                bookName: bookName,
                autherName: autherName,
                pubYear: pubYear,
                img: img,
                price: price
            })
        } else {
            db.listProducts.update(id, {
                bookName: bookName,
                autherName: autherName,
                pubYear: pubYear,
                img: img,
                price: price
            })
        }
    }

    // const fileupload = document.getElementById("file-upload");
    // fileupload.addEventListener("change", (event) => {
    //     const { files } = event.target;
    //     for (const file of files) {
    //         const { name, type, size, lastModified } = file;
    //         console.log(file)
    //     }
    // });


    return (

        <>
        <h1 className='well-come'>CHÀO MỪNG ADMIN</h1>
            <div className='addProducts-container'>
                <p className='addProducts-titleForm'>NHẬP THÔNG TIN SÁCH</p>
                <div className='addProducts-form'>
                    <div className='addProducts-containetBook'>
                        <label className='addProducts-lable'>Tên sách</label>
                        <input style={{ width: "220px", height: "20px" }}
                            type='text'
                            id='bookName'></input>
                    </div>
                    <div className='addProducts-containetBook'>
                        <label className='addProducts-lable'>Tên tác giả</label>
                        <input style={{ width: "220px", height: "20px" }}
                            type='text'
                            id='auther'></input>
                    </div>
                    <div className='addProducts-containetBook'>
                        <label className='addProducts-lable'>Năm xuất bản</label>
                        <input style={{ width: "220px", height: "20px" }}
                            type='number'
                            id='pubYear'></input>
                    </div>
                    <div className='addProducts-containetBook'>
                        <label className='addProducts-lable'>Link ảnh bìa</label>
                        <input style={{ width: "220px", height: "20px" }}
                            type='file'
                            id='file-upload'></input>
                    </div>
                    <div className='addProducts-containetBook'>
                        <label className='addProducts-lable'>Giá bán</label>
                        <input style={{ width: "220px", height: "20px" }}
                            type='number'
                            id='priceBook'></input>
                    </div>
                    <div className='addProducts-containerBtn'>
                        <button
                            className='addProducts-btn'
                            id='addProducts-btn'
                            onClick={() => save(bookName, autherName, pubYear, img, price)}
                        >
                            Save
                        </button>
                    </div>
                    <div className='addProducts-containerError'>
                        <p className='addProducts-Error'
                            id='errorFormProduct'
                            style={{ color: "red" }}></p>
                    </div>
                </div>
            </div>
        </>

    );
}

export default AddProducts;