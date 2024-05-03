function valid() {
    let firstName = document.getElementById("firstNameID").value;
    let lastName = document.getElementById("lastNameID").value;
    let birthday = document.getElementById("birthdayID").value;
    let email = document.getElementById("emailID").value;
    let phone = document.getElementById("numephoneID").value;
    if (firstName == "" || lastName == "" || birthday == "" || email == "" || phone == "") {
        let error = document.getElementById("errorID");
        error.innerText = "Vui lòng nhập đầy đủ thông tin !"; 
        return false;
    } else {
        return true;
    }
}

// remove text error
function removeError() {
    let firstName = document.getElementById("firstNameID").value;
    let lastName = document.getElementById("lastNameID").value;
    let birthday = document.getElementById("birthdayID").value;
    let email = document.getElementById("emailID").value;
    let phone = document.getElementById("numephoneID").value;
    if (firstName == "" || lastName == "" || birthday == "" || phone == "" || email == "") {
        let error = document.getElementById("errorID");
        error.innerText = "";
    }
}