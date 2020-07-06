function validate() {


    var p_name = document.getElementById("p_name");
    var p_location = document.getElementById("p_location");
    var p_price = document.getElementById("p_price");
    var p_expiry = document.getElementById("p_expiry");
    var p_weight = document.getElementById("p_weight");
    var p_picture = document.getElementById("p_picture");
    var p_desc = document.getElementById("desc");


    if (p_name.value == "") {
        p_name.style.border = "solid 1px red";
        setTimeout(() => {
            p_name.style.border = "solid 1px #dedede"
        }, 3000);
        return false;

    }

    else if (p_location.value == "") {
        p_location.style.border = "solid 1px red";
        setTimeout(() => {
            p_location.style.border = 'solid 1px #dedede';
        }, 3000);
        return false;
    }
     else if (p_desc.value == "") {
        p_desc.style.border = "solid 1px red";
        setTimeout(() => {
            p_desc.style.border = 'solid 1px #dedede';
        }, 3000);
        return false;
    }

    else if (p_expiry.value == "") {
        p_expiry.style.border = 'solid 1px red';
        setTimeout(() => {
            p_expiry.style.border = "solid 1px #dedede";
        }, 3000);
        return false;
    }

    else if (p_price.value == "") {
        p_price.style.border = 'solid 1px red';
        setTimeout(() => {
            p_price.style.border = "solid 1px #dedede";
        }, 3000);
        return false;
    }

    else if (p_weight.value == "") {
        p_weight.style.border = 'solid 1px red';
        setTimeout(() => {
            p_weight.style.border = 'solid 1px #dedede';
        }, 3000);
        return false;
    }

    else if (p_picture.value == "") {
        p_picture.style.border = 'solid 1px red';
        setTimeout(() => {
            p_picture.style.border = 'soild 1px #dedede';
        }, 3000);
        return false;
    }

    else {
        true;
    }











}