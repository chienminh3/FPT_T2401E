// valida form
function validationForm() {
    let name = document.getElementById("nameID").value;
    let address = document.getElementById("addressID").value;
    let numberphone = document.getElementById("numberPhoneID").value;
    let password = document.getElementById("passwordID").value;
    let acceptpassword = document.getElementById("acceptpasswordID").value;
    if (name == "" || address == "" || numberphone == "" || password == "" || acceptpassword == "") {
        let error = document.getElementById("enterError");
        error.innerText = "Vui lòng nhập đầy đủ thông tin !"
        return false;
    } else {
        return true;
    }
}

// remove text error
function removeError() {
    let name = document.getElementById("nameID").value;
    let address = document.getElementById("addressID").value;
    let numberphone = document.getElementById("numberPhoneID").value;
    let password = document.getElementById("passwordID").value;
    let acceptpassword = document.getElementById("acceptpasswordID").value;
    if (name == "" || address == "" || numberphone == "" || password == "" || acceptpassword == "") {
        let error = document.getElementById("enterError");
        error.innerText = "";
    }
}

// convert to stars
function convertToStars(inputElement) {
    var inputValue = inputElement.value;
    var starredValue = inputValue.replace(/./g, "*");
    inputElement.value = starredValue;
}

//check numberPhone 
function checkNumIsInteger() {
    let numberPhone = document.getElementById("numberPhoneID").value;
    console.log(numberPhone);
    if (!Number.isInteger(numberPhone)) {
        let error = document.getElementById("enterError");
        error.innerText = "Vui lòng nhập số !";
    } 
}

