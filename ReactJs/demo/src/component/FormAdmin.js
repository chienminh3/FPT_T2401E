


import { useState, useEffect } from "react";
import { db } from "./Service";

function FormAdmin () {
    const [id, setId] = useState(0);
    const [name, setName] = useState("");
    const [age, setAge] = useState(0);
    const [students, setStudents] = useState([]);

    // outport dbindex
    useEffect(() => {
        db.friends.toArray().then(items => setStudents(items))//set lai useState
    }, [])
    

    const clearForm = () => {
        setId(0)
        setName("")
        setAge(0)
    }

    // add in dbindex
    const save = (id, name, age) => {
        if (id === 0) {
            db.friends.add({name:name, age:age})
        } else {
            db.friends.update(id, {name:name, age:age})
        }
        db.friends.toArray().then(items => setStudents(items)) //set lai useState
        clearForm();
    }


    const LoaddataEdit = (id) => {
        db.friends.get(id).then(item => {
            setId(item.id)
            setName(item.name)
            setAge(item.age)
        })
    }


    const DeleteData = (id) => {
        db.friends.delete(id)
        db.friends.toArray().then(items => setStudents(items)) //set lai useState
    }



    return (
            <div >
                <input type="hidden" value={id}></input>
                <div>
                    <label>Name</label>
                    <input type="Text" value={name} onChange={(e) => setName(e.target.value)}></input>
                </div>
                    
                <div>
                    <label>Age</label>
                    <input type="Number" value={age} onChange={(e) => setAge(e.target.value)}></input>
                </div>
                <button onClick={() => save(id, name, age)}>Save</button>


                <table style={{width: "1000px"}}>
                <thead>
                    <tr style={{width: "500px", display: "flex", justifyContent: "space-around"}}>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    {students.map((item, index) => ( 
                        <tr key={index} style={{width: "500px", display: "flex", justifyContent: "space-around"}}>
                            <td>{index+1}</td>
                            <td>{item.name}</td>
                            <td>{item.age}</td>
                            <td>
                                <button onClick={() => LoaddataEdit(item.id)}>Edit</button>
                                <button onClick={() => DeleteData(item.id)}>Delete</button>
                            </td>
                        </tr>
                     ))}
                </tbody>
            </table>
        </div>
    );
}

export default FormAdmin;




// onChange={(e) => setAge(e.target.value)} bat event 