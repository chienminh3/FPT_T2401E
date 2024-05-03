
import { useState } from "react";
import './SetForm.css';


function SetForm () {

    const Sexs = [{id:1, value:"Male"},{id:2, value:"FeMale"},{id:3, value:"Other"}]
    const Jobs = [{id:1, value:"IT"},{id:2, value:"SALE"},{id:3, value:"BUSINESS"}]
    const Select = [{id:1, value:"IT"},{id:2, value:"SALE"},{id:3, value:"BUSINESS"}]


    // set hook useState
    const [name, setName] = useState("");
    const [sex, setSex] = useState(1);
    const [job, setJob] = useState([]);
    const [select, setSelect] = useState("");

    // click event
    function handleDubmit () {
        console.log(name)
        console.log(sex)
        console.log(job)
        console.log(select)
    }

    console.log(name)
    console.log(sex)
    console.log(job)
    console.log(select)   


    function handleJob (id) {
        setJob(prev => 
        { 
            const isSelected = job.includes(id)
            if (isSelected) {
                return job.filter(item => item !== id);
            } else {
                return [...prev, id];
            }
        })  
    }

    return (
        <>
            {/* input text */}
            <div className="formEvent">
            <h1>FORM</h1>
                <div className="inputName">
                    <label>Enter Name : </label>
                    <div>
                        <input 
                            style={{width: "240px", height: "20px"}}
                            type="text"
                            // check event button
                            onChange={e => setName(e.target.value)}
                        ></input>
                    </div>
                </div>


                {/* radio */}
                <div className="inputRadio">
                    <label>Your Sex : </label>
                    {Sexs.map(item => ( <div key={item.id}>
                                            <input 
                                                type="radio" 
                                                onChange={() => setSex(item.id)} 
                                                checked={sex === item.id}>
                                            </input>{item.value}</div> ))}
                                        </div>
        

                {/* checkBox */}
                <div className="inputCheckBox">
                    <label>Your Job : </label>
                    <div className="containerCheckBox">
                        {Jobs.map(item => ( <div key={item.id} >
                            <input  
                                type="checkbox"  
                                onChange={() => handleJob(item.id)} >
                            </input>{item.value}</div> ))}                                                                        
                    </div>
                </div>

                {/* Select and option */}
                <div className="containerSelect">
                    <label>Choose: </label>
                    <select onChange={e => setSelect(e.target.value)}>
                        {Select.map(item => ( <option key={item.id} >{item.value}</option> ))}
                    </select>
                </div>
                
                <button style={{marginTop: "50px", width: "200px"}} 
                        onClick={handleDubmit}>Submit</button>


            </div>




            <div className="display">
                <h4>INFOMATIONS</h4>
                <div className="containerInfor">
                    <div><p>Name:</p> {name}</div>
                    <div><p>Sex:</p> {sex}</div>
                    <div><p>Job:</p> {job}</div>
                    <div><p>Choose Job: </p> {select}</div>
                </div>
            </div>
        </>
    )
}

export default SetForm;