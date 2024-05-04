

import { useEffect, useState } from 'react';
import './Form.css';
import { db } from './Service';

function Form() {
    const [id, setID] = useState(1)
    const [name, setName] = useState("")
    const [auther, setAuther] = useState("")
    const [year, setYear] = useState(0)
    const [book, setBooks] = useState([])

    useEffect(() => {
        db.books.toArray().then(item => setBooks(item))
    }, [])

    const clearform = () => {
        setID(0)
        setName("")
        setAuther("")
        setYear(0)
    }

    const add = (id, name, auther, year) => {
        if (id === 0) {
            db.books.add({ name: name, auther: auther, year: year })
            alert("Thêm thành công !")
        } else {
            db.books.update(id, { name: name, auther: auther, year: year })
            alert("Sửa thành công !")
        }
        db.books.toArray().then(item => setBooks(item))
        clearform();
    }

    const edit = (id) => {
        db.books.get(id).then(item => {
            setID(item.id)
            setName(item.name)
            setAuther(item.auther)
            setYear(item.year)
        })
        db.books.toArray().then(item => setBooks(item))
    }

    const del = (id) => {
        db.books.delete(id)
        db.books.toArray().then(item => setBooks(item))
    }

    return (
        <>
            <div className='FormInput'>
                <div className='FormItem'>
                    <label>Tên sách</label>
                    <input type='text'
                        id='bookname'
                        value={name}
                        onChange={(e) => setName(e.target.value)}>
                    </input>
                </div>
                <div className='FormItem'>
                    <label>Tên tác giả</label>
                    <input type='text'
                        id='auther'
                        value={auther}
                        onChange={(e) => setAuther(e.target.value)}>
                    </input>
                </div>
                <div className='FormItem'>
                    <label>Năm xuất bản</label>
                    <input type='number'
                        id='year'
                        value={year}
                        onChange={(e) => setYear(e.target.value)}>
                    </input>
                </div>
                <button className='FormBtn'
                    id='btn'
                    onClick={() => add(id, name, auther, year)}>
                    Thêm
                </button>
            </div>

            <table>
                <thead className='FormHeader'>
                    <tr>
                        <th>STT</th>
                        <th>Tên sách</th>
                        <th>Tên tác giả</th>
                        <th>Năm xuất bản</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>

                <tbody className='FormBody'>
                    {book.map((item, index) => (
                        <tr key={index}>
                            <th>{index + 1}</th>
                            <th>{item.name}</th>
                            <th>{item.auther}</th>
                            <th>{item.year}</th>
                            <th>
                                <button onClick={() => edit(item.id)}>Sửa</button>
                                <button onClick={() => del(item.id)}>Xóa</button>
                            </th>
                        </tr>
                    ))}
                </tbody>
            </table>
        </>
    );
}

export default Form;