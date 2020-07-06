// Function to calidate login

function validate() {

    var u_Email = document.getElementById("u_mail");
    var u_password = document.getElementById("u_pass");

    if (u_Email.value.trim() == "") {

        u_Email.style.border = "solid 1px red";
        setTimeout(() => {
            u_Email.style.border = 'solid 1px #dedede';
        }, 3000);
        return false;
    }

    else if (u_password.value.trim() == "") {
        u_password.style.border = "solid 1px red";
        setTimeout(() => {
            u_password.style.border = 'solid 1px #dedede';
        }, 3000);

        return false;
    }

    else {
        return true;
    }
}