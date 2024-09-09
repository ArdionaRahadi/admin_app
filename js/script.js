let menu = document.getElementById("menu");
let sideBar = document.getElementById("sidebar");
let imgThumb = document.getElementById("img_thumb");
let profileSetting = document.getElementById("profile_setting");
menu.addEventListener("click", function () {
  sideBar.classList.toggle("open");
  menu.classList.toggle("open");
});

imgThumb.addEventListener("click", function () {
  profileSetting.classList.toggle("show");
});

window.addEventListener("click", function (e) {
  if (!menu.contains(e.target)) {
    sideBar.classList.remove("open");
  }
  if (!imgThumb.contains(e.target)) {
    profileSetting.classList.remove("show");
  }
});

window.addEventListener("scroll", function (e) {
  sideBar.classList.remove("open");
  profileSetting.classList.remove("show");
});

function myFunction() {
  let loader = document.getElementsByClassName("loader");
  for (let i = 0; i < loader.length; i++) {
    loader[i].classList.add("active");
  }
}

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
