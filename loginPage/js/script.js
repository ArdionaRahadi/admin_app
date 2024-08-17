let check = document.getElementById("showPw");

function showPasswd() {
    let passwd = document.getElementsByClassName("password");
    for (let i = 0; i < passwd.length; i++) {
        if (passwd[i].type === "password") {
            passwd[i].type = "text";
        } else {
            passwd[i].type = "password";
        }
    }
}
