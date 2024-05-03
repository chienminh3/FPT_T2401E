
import { useState, useEffect } from "react";
import { db } from "./Service";
import './FormStudents.css'

function FormStudents () {
    // cac useState quan ly trang thai du lieu 
    const [id, setId] = useState(0)
    const [name, setName] = useState("")
    const [age, setAge] = useState(0)
    const [student, setStudent] = useState([])

    // truyen thong tin du lieu tu indexDB hien thi len form
    useEffect (() => {
        db.friends.toArray().then(item => setStudent(item))
    }, [])

    // dat lai du lieu initialize ban dau cho form
    const clearForm = () => {
        setId(0)
        setName("")
        setAge(0)
    }


    const Save = (id, name, age) => {
        if (id === 0) {
            db.friends.add({name: name, age:age})
        } else {
            db.friends.update(id, {name: name, age: age})
        }
        db.friends.toArray().then(item => setStudent(item))
        clearForm();
    }

    const EditData = (id) => {
        db.friends.get(id).then(item => {
            setId(item.id)
            setName(item.name)
            setAge(item.age)
        })
    } 

    const DeleteData = (id) => {
        db.friends.delete(id)
        db.friends.toArray().then(item => setStudent(item))
    }

    const AlertButton = () => 
        alert('Are you sure Delete', [
        {
            text: 'Cancel',
            onPress: () => console.log("Cancel Press !"),
            style: 'Cancel',
        }, 
        {
           text: 'Ok',
           onPress: () => console.log(DeleteData(id)),
        }])



    return (
        <>
            <form className="form">
                <h3>Form ReactJS</h3>
                <input type="hidden"></input>
                <div>
                    <label>Name: </label>
                    <input  type="text"
                            value={name} 
                            onChange={(e) => setName(e.target.value)}>
                    </input>
                </div>
                <div>
                    <label>Age: </label>
                    <input  type="number"
                            value={age} 
                            onChange={(e) => setAge(e.target.value)}>
                    </input>
                </div>
                <button onClick={() => Save(id, name, age)}>Save</button>
            </form>

            <table className="tableInfo">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {student.map((item, index) => (
                        <tr key={index}>
                            <th>{index+1}</th>
                            <th>{item.name}</th>
                            <th>{item.age}</th>
                            <th>
                                <button onClick={() => EditData(item.id)}>Edit</button>
                                <button onClick={() => AlertButton(DeleteData(item.id))}>Delete</button>
                            </th>
                        </tr>
                    ))}
                </tbody>
            </table>
            

        </>
    );
}

export default FormStudents;

