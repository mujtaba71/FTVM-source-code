function validate() {

    var sname = document.getElementById("s_name");
    var slastname = document.getElementById("s_lastname");
    var semail = document.getElementById("s_email");
    var scpass = document.getElementById("s_c_pass");
    var spass = document.getElementById("s_pass");





    if (sname.value.trim() == "") {

        sname.style.border = 'solid 1px red';
        setTimeout(() => {
            sname.style.border = 'solid 1px #dedede';
        }, 3000);
        return false;


    }


    else if (slastname.value.trim() == "") {

        slastname.style.border = 'solid 1px red';
        setTimeout(() => {
            slastname.style.border = 'solid 1px #dedede';
        }, 3000);
        return false;
    }


    else if (semail.value.trim() == "") {

        semail.style.border = 'solid 1px red';
        setTimeout(() => {
            semail.style.border = 'solid 1px #dedede';
        }, 3000);
        return false;
    }


    else if (spass.value.trim() == "") {

        spass.style.border = 'solid 1px red';
        setTimeout(() => {
            spass.style.border = 'solid 1px #dedede';
        }, 3000);
        return false;
    }

    else if (scpass.value.trim() == "") {

        scpass.style.border = 'solid 1px red';
        setTimeout(() => {
            scpass.style.border = 'solid 1px #dedede';
        }, 3000);
        return false;
    }





    else if (scpass.value !== spass.value) {

        alert("Password does not match");
        return false;
    }

    else {
        return true;
    }
}