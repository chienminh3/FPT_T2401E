import React, { useState } from "react";

function FormEvent() {
    const Sex = [
        { id: 1, value: "Male" },
        { id: 2, value: "Female" },
        { id: 3, value: "Other" }
    ];

    const Job = [
        { id: 1, value: "IT" },
        { id: 2, value: "Marketing" },
        { id: 3, value: "Sales" }
    ];

    const [name, setName] = useState("");
    const [sex, setSex] = useState(2);
    const [job, setJob] = useState([]);

    function handleJob (id)
    {
        setJob(prev =>{
            const isSelected = job.includes(id);
            if (isSelected){
                return job.filter(item => item != id);
            }   else{
                return[...prev, id]
            }
        })
    };

    const handleSubmit = () => {
        console.log(name);
        console.log(sex);
        console.log(job);
    };

    return (
        <>
            <div>
                <label>Name</label>
                <input type="text" onChange={e => setName(e.target.value)} />
            </div>

            <div>
                {Sex.map(item => (
                    <div key={item.id}>
                        <input
                            type="radio"
                            onChange={() => setSex(item.id)}
                            checked={sex === item.id}
                        />
                        {item.value}
                    </div>
                ))}
            </div>

            <div>
                {Job.map(item => (
                    <div key={item.id}>
                        <input
                            type="checkbox"
                            onChange={() => handleJob(item.id)}
                        />
                        {item.value}
                    </div>
                ))}
            </div>

            <button onClick={handleSubmit}>Submit</button>
        </>
    );
}

export default FormEvent;