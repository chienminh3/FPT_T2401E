function PasswordRecovery() {
    let a = document.getElementsByClassName("login_normal");
    let b = document.getElementsByClassName("login_passwordrecovery");
    let i
    if (a[0].style.display != "none"){
        for (i=0 ;i<a.length ;i++){
            a[i].style.display="none";
            b[i].style.display="block";
        }
    }
    else {
        for (i=0 ;i<a.length ;i++){
            a[i].style.display="block";
            b[i].style.display="none";
        }
    }
    }