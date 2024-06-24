

import { useState } from 'react';
import './Admin.css'

function Admin() {
    const [username, setUsername] = useState("")
    const [password, setPassword] = useState("")

    // btn login
    const login = (username, password) => {
        if (username === "" || password === "") {
            var userErrorInput = document.getElementById('userError')
            userErrorInput.innerText = "Vui lòng nhập Username và Password !"
        } else {
            if (username === 'admin' && password === 'admin123') {
                window.location.href = "/addproducts";
            } else {
                var userError = document.getElementById('userError')
                userError.innerText = "Sai tài khoản hoặc mật khẩu !";
            }
        }
    }
    
    const removeError = (usernameInput, passwordInput) => {
        if (usernameInput === "" || passwordInput === "") {
            var removeUserError = document.getElementById('userError')
            removeUserError.innerText = "";
        }
    }

    return (
        <>
            <div className='admin-container'>
                <p className='admin-title'>NHA NAM ADMIN LOGIN</p>
                <div style={{ width: "300px", margin: "0 auto" }}>
                    <div className='admin-containerForm'>
                        <label className='admin-label'>Username</label>
                        <input type='text'
                            style={{ width: "200px" }}
                            id='username'
                            onKeyDown={() => setUsername(removeError(username, password))}
                            onChange={(e) => setUsername(e.target.value)}>
                        </input>
                    </div>
                    <div className='admin-containerForm'>
                        <label className='admin-label'>Password</label>
                        <input type='text'
                            style={{ width: "200px" }}
                            id='password'
                            onKeyDown={() => setPassword(removeError(username, password))}
                            onChange={(e) => setPassword(e.target.value)}>
                        </input>
                    </div>
                </div>
                <div style={{
                    width: "100%",
                    textAlign: "center",
                    marginTop: "15px"
                }}>
                    <button className='admin-btn'
                        onClick={() => login(username, password)}>
                        Login
                    </button>
                </div>
                <div style={{
                    width: "100%",
                    marginTop: "20px",
                    display: "flex",
                    flexDirection: "column",
                    textAlign: "center"
                }}>
                    <p id='userError' style={{ color: "red", margin: 0 }}></p>
                </div>
            </div>
        </>
    );
}

export default Admin;